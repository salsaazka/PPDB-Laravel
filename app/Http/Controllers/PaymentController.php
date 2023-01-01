<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Ppdb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{

    public function index()
    {
        // payment get data
        $payment = Payment::all();
        return view('admin.user', compact('payment'));
    }

   public function userDash()
   {    $bayar= Payment::where('ppdb_id', Auth::user()->ppdb_id)->first();
        return view('user.dashboard', compact('bayar'));
   }

   public function adminDash()
   {
        $look = Payment::all();
        return view('admin.dashboard', compact('look'));
   }


    public function create()
    {

    }

    public function createPayment()
    {
        $bayar= Payment::where('ppdb_id', Auth::user()->ppdb_id)->first();
        return view('user.payment', compact('bayar'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nm_bank' => 'required',
            'nm_rek' => 'required',
            'nominal' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg',
        ]);

        $image = $request->file('image');
        $imgName = time().rand().'.'.$image->extension();

        if(!file_exists(public_path('/assets/img/global/'.$image->getClientOriginalName()))){
            //set untuk menyimpan file nya
            $dPath = public_path('/assets/img/global/');
            //memindahkan file yang diupload ke directory yang telah ditentukan
            $image->move($dPath, $imgName);
            $uploaded = $imgName;
        }else{
            $uploaded = $image->getClientOriginalName();
        }
        Payment::create([
            'nm_bank' => $request->nm_bank,
            'bank' => $request->bank,
            'nm_rek' => $request->nm_rek,
            'nominal' => $request->nominal,
            'image' =>$uploaded,
            'status' => 'Diproses',
            'ppdb_id' => Auth::user()->ppdb_id,
         ]);
         return redirect()->route('payment')->with('Success', 'Bukti Pembayaran Anda sedang di proses');
    }


    public function show(Payment $payment)
    {

        // $item = Payment::find($id);
        // return response()->json([
        //     'data' => $item
        // ]);

    }

    public function reject($id)
    {
        $payment = Payment::where('id', $id)->first();
        $payment->status = 'Ditolak';
        $payment->save();
        return redirect()->back()->with('notSuccess', 'Bukti Pembayaran Ditolak');
    }

    public function approved($id)
    {
        $payment = Payment::where('id', $id)->first();
        $payment->status = 'Diterima';
        $payment->save();
        return redirect()->back()->with('Success', 'Bukti Pembayaran Diterima');
    }

    public function data()
    {
        $payment = Payment::all();
        return view('admin.user', compact('payment'))->with('i', (request()->input('page',1)-1));
    }

    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'nm_bank' => 'required',
            'nm_rek' => 'required',
            'nominal' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg',
        ]);

        $image = $request->file('image');
        $imgName = time().rand().'.'.$image->extension();

        if(!file_exists(public_path('/assets/img/global/'.$image->getClientOriginalName()))){
            //set untuk menyimpan file nya
            $dPath = public_path('/assets/img/global/');
            //memindahkan file yang diupload ke directory yang telah ditentukan
            $image->move($dPath, $imgName);
            $uploaded = $imgName;
        }else{
            $uploaded = $image->getClientOriginalName();
        }
        Payment::create([
            'nm_bank' => $request->nm_bank,
            'bank' => $request->bank,
            'nm_rek' => $request->nm_rek,
            'nominal' => $request->nominal,
            'image' =>$uploaded,
            'status' => 'Ditolak',
            'ppdb_id' => Auth::user()->ppdb_id,
         ]);
         return redirect()->route('updatePayment')->with('notSuccess', 'Bukti Pembayaran Anda ditolak oleh Admin');

    }

    public function destroy(Payment $payment)
    {
        //
    }

    public function image($id)
    {
        $payment = Payment::find($id);
        return view('admin.image', compact('payment'));
    }

    // function detail PPDB
    public function detail($id)
    {
        $Ppdb = Ppdb::find($id);
        return view('admin.detail', compact('Ppdb'));
    }
}
