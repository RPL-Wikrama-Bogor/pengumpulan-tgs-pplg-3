<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('medicine.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|min:3',
            'type'=> 'required',
            'price'=> 'required|numeric',
            'stock'=> 'required|numeric',
        ]);

        medicine::create([
            'name'=> $request->name,
            'type'=> $request->type,
            'price'=> $request->price,
            'stock'=> $request->stock,
        ]);

        return redirect()->back()->with('success', 'berhasil menambahkan');
    }

    public function show(Medicine $medicine)
    {

    }

    public function edit(Medicine $medicine)
    {

    }

    public function update(Request $request, Medicine $medicine)
    {

    }

    public function destroy(Medicine $medicine)
    {

    }
}
