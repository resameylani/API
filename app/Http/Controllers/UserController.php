<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = [
            'pageTitle' => 'Profil Pengguna',
            'content' => 'Ini adalah halaman profil pengguna.'
        ];
       
       return view('user', compact('data'));
    }

    public function tambah(){
        return view('tambah_user');
    }

    public function simpan(Request $request){
        // Logika untuk menyimpan user
        // $request->input('nama') untuk mendapatkan data nama dari formulir
        // $request->input('email') untuk mendapatkan data email dari formulir
        // dll.
    }

    public function ubah($id){
        // Logika untuk halaman ubah user
        // $id adalah ID user yang ingin diubah
    }

    public function update(Request $request, $id){
        // Logika untuk memperbarui user
        // $id adalah ID user yang ingin diperbarui
    }
}