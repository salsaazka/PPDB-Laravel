<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PDF;
use App\Exports\PpdbExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PpdbController extends Controller
{

    public function index()
    {
        return view('auth.register');
    }


    public function create()
    {
        return view('auth.register');
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|min:4',
            'nisn' => 'required|min:4',
            'jk' => 'required',
            'school' => 'required',
            'email' => 'required|min:8',
            'no_telp' => 'required|max:13',
            'no_telpA' => 'required|max:13',
            'no_telpB' => 'required|max:13',
            'referensi' => 'required',
        ]);

        Ppdb::create([
            // 'user_id' => Auth::user()->id,
            'name' => $request->name,
            'nisn' => $request->nisn,
            'jk' => $request->jk,
            'school' =>$request->school,
            'sch' =>$request->sch,
            'email' =>$request->email,
            'no_telp'=>$request->no_telp,
            'no_telpA' =>$request->no_telpA,
            'no_telpB' =>$request->no_telpB,
            'referensi' =>$request->referensi,
        ]);

        User::create ([
            'ppdb_id' => Ppdb::latest()->first()->id,
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->nisn),
        ]);

        // DB::table('users')->insert($user);
        return redirect()->route('export.pdf')->with('success', 'Anda berhasil membuat akun!');

    }

     //pdf
     public function createPDF()
     {
         $Ppdb = Ppdb::orderBy('id', 'DESC')->first();
         view()->share('Ppdb',$Ppdb);

         $pdf = PDF::loadView('pdf-view', $Ppdb->toArray());
         // download PDF file with download method
         return $pdf->download('ppdb.pdf');
     }


     public function login()
     {
        return view('auth.login');

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
            if(Auth::user()->role == 'user'){
                return redirect()->route('userDash');
            }else{
                return redirect()->route('adminDash');
            }
         } else {
             return redirect('/')->with('fail', 'Gagal login, silahkan periksa dan coba lagi!');
         }
 
     }

     public function logout()
     {
         //menghapus history login
         Auth::logout();
         //mengarahkan ke halaman login
         return redirect('/login');
     }

     public function error(){
        return view('error');
     }
    public function show(Ppdb $ppdb)
    {
        $item = Ppdb::find($id);
        return response()->json([
            'data' => $item
        ]);
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
