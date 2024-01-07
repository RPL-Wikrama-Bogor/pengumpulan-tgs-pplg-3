<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{

    public function loginAuth(Request $request){
        $request->validate([
            'email' => 'required|email:dns', //DNSChechValidation -> cek email valid atau tidak
            'password' => 'required|alpha_dash', // valid: _a-z A-Z, angka & tidak boleh spasi
        ], [
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password harus diisi',
            'password.alpha_dash' => 'Password harus berisi huruf dan karakter tanpa spasi'
        ]);

        $user = $request->only(['email', 'password']);

        if(Auth::attempt($user)) {
            return redirect()->route('home.page');
        }else{
            return redirect()->back()->with('Failed', 'Proses login gagal, silahkan coba kembali dengan data yang benar!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('logout', 'Anda telah logout');
    }

    public function index()
    {
        $pengguna = User::all();
        return view('pengguna.index', compact('pengguna'));
    }

    public function create()
    {
        // $pengguna = User::all();
        return view('pengguna.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'role' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make(substr($request->email, 0, 3) . substr($request->name, 0, 3))
        ]);
        return redirect()->route('pengguna.akun')->with('success', 'Berhasil Menambahkan Akun!');
    }


    public function edit($id)
    {
        $pengguna = User::find($id);
        
        return view('pengguna.edit', compact('pengguna'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'role' => 'required'
        ]);

       if ($request->password == "") {
        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);
       }else {
        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $request->password
        ]);
       }
       return redirect()->route('pengguna.akun')->with('success', 'Berhasil Mengubah Data!');
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();

        return redirect()->back()->with('deleted', 'Berhasil Menghapus Pengguna');
    }

}
