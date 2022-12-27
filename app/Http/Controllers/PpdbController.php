<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    
    public function index()
    {
        //
    }

    public function auth(Request$request)
    {
        $request->validate([
            //required data harus diisi
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ],
        [
            'email.exists' => "email ini tidak tersedia"
            //email akan di cek ada atau tidak di database kalau tidak ada akan diberi pesan
        ]);

        $user = $request->only('email', 'password');
        //auth fitur untuk menyimpan data dari login user 
        if (Auth::attempt($user)) {
            return redirect()->route('');
        } else {
            return redirect('/')->with('fail', 'Gagal login, silahkan periksa dan coba lagi!');
        }

    }
    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show(Ppdb $ppdb)
    {
        //
    }

    
    public function edit(Ppdb $ppdb)
    {
        //
    }

    public function update(Request $request, Ppdb $ppdb)
    {
        //
    }

    
    public function destroy(Ppdb $ppdb)
    {
        //
    }
}
