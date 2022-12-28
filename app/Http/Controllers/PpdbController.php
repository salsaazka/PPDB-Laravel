<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use App\Exports\BorrowsExport;

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
        return redirect()->route('index')->with('success', 'Anda berhasil register!');

        User::create([
            'email'=>$request->email,
            'password' =>$request->password,
        ]);
        return redirect()->route('index')->with('successAdd', 'Anda berhasil');

    }

     //pdf
     public function createPDF()
     {
         $Ppdb = Ppdb::orderBy('date', 'DESC')->get();
         // share Ppdb to view (ambil data) -> redirect ke halaman view sama seperti compact
         view()->share('Ppdb',$Ppdb);
         // yang didalam petik nama yang ada di blade, $ ambil nama variable untuk models
         //kalau mau didashboard 'dashboard.pdf_view'
         $pdf = PDF::loadView('pdf_view', $Ppdb->toArray());
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
