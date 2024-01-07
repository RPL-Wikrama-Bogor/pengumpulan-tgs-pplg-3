<?php

namespace App\Http\Controllers;

use App\Exports\OrdersExport;
use App\Models\Order;
use App\Models\Medicine;
// use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use Excel;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orders = Order::query()->with('user');
        $filter = $request->input('filter');

        if($filter) {
            $orders->whereDate('created_at', '=', $filter);
        }

        $orders = $orders->simplePaginate(10);
        
        return view('order.kasir.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicines = Medicine::all();
        return view("order.kasir.create", compact('medicines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_customer' => 'required',
            'medicines' => 'required',
        ]);
        // mencari jumlah item yang sama pada array, struknya
        $arrayDistinct = array_count_values($request->medicines);
        // menyiapkan array kosong untulk menampung format array baru
        $arrayAssocMedicines = [];
        foreach ($arrayDistinct as $id => $count) {
            // mencari data obat berdasarkan ud (obat yang dipilih)
            $medicine = Medicine::where('id', $id)->first();
            $subPrice = $medicine['price'] * $count;
            // struktur value column medicines menjadi multidimensi dengan dimensi kedua berbentuk array assoc dengan key "id", "name_medicine", "qty","price"
            $arrayItem = [
                "id" => $id,
                "name_medicine" => $medicine['name'],
                "qty" => $count,
                "price" => $medicine['price'],
                "sub_price" => $subPrice,
            ];
            // masukkan struktur array tersebut ke array tersebut ke array kosong yang disediakan sebelumnya
            array_push($arrayAssocMedicines, $arrayItem);
        }
        // total harga pembelian dari obat-obatan yang dipilih
        $totalPrice = 0;
        // looping format array medicines baru
        foreach ($arrayAssocMedicines as $item) {
            // total harga pembelian di tambahkan dari keseluruhan sub_price data medicines
            $totalPrice += (int)$item['sub_price'];
        }
        // harga dibeli di tambah 10% ppn
        $priceWithPPN = $totalPrice + ($totalPrice * 0.01);
        // tambah data ke database
        $proses = Order::create([
            // data user_id di ambil dari id akun kasir yang sedang login
            'user_id' => Auth::user()->id,
            'medicines' => $arrayAssocMedicines,
            'name_customer' => $request->name_customer,
            'total_price' => $priceWithPPN,
        ]);

        if ($proses) {
            // jika proses tambah data berhasil, ambil data  order yang dibuat oleh kasir yang sedang login (where),
            // dengan tanggal paling terbaru (orderBoy), ambil hanya satu data (first)
            $order = Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
            // kirim data order yang di ambil tadi, bagian column id sebagai parameter path dari router print
            return redirect()->route('kasir.order.print', $order['id']);
        }else {
            // jika tidak berhasil maka akan di arahkan kembali ke halaman form dengan pesan pemberitahuan
            return redirect()->back()->with('failed', 'Gagal membuat data pembelian, Silahkan coba kembali dengan data yang sesuai!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view('order.kasir.print', compact('order'));
    }


    // public function downloadPDF($id)
    // {
    //     $order = Order::find($id);
    //     $pdf = PDF::loadView('order.kasir.download-Pdf', compact('order'));
    //     return $pdf->download('receipt.pdf');
    // }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function downloadPDF($id)
    {
        $order = Order::find($id);
        $pdf = PDF::loadView('order.kasir.download-Pdf', $order );
        return $pdf->download('receipt.pdf');
    }

    public function data()
    {
        $orders = Order::with('user')->simplePaginate(5);
        return view("order.admin.index", compact('orders'));
    }

    public function exportExcel()
    {
        $fileName = 'data_pembelian.xlsx';
        return Excel::download(new OrdersExport, $fileName);
    }
}
