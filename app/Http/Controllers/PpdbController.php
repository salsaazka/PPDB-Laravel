<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
        $request->validate([
            'nisn' => 'required|min:4',
            'name' => 'required|min:4',
            'email' => 'required|min:8'
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

        // User::create ([
        //     'ppdb_id' => Ppdb::latest()->first()->id,
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);

        // DB::table('users')->insert($user);

        // $Ppdb = Ppdb::orderBy('id', 'DESC')->get();
        // view()->share('Ppdb',$Ppdb);
        // $pdf = PDF::loadView('auth.pdf-view', $Ppdb->toArray());
        // return $pdf->download('ppdb.pdf');

        return view('auth.register')->with('success', 'Anda berhasil mengeksport PDF!');

    }

     //pdf
     public function createPDF()
     {
         $Ppdb = Ppdb::orderBy('date', 'DESC')->get();
         // share Ppdb to view (ambil data) -> redirect ke halaman view sama seperti compact
         view()->share('Ppdb',$Ppdb);
         // yang didalam petik nama yang ada di blade, $ ambil nama variable untuk models
         //kalau mau didashboard 'dashboard.pdf_view'
         $pdf = PDF::loadView('pdf-view', $Ppdb->toArray());
         // download PDF file with download method
         return $pdf->download('ppdb.pdf');
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
