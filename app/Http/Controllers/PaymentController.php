<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
   
    public function index()
    {
        return view('admin.user');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.payment');
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show(Payment $payment)
    {
        // $users = user::all();
        // return view('admin.user', compact('users'))->with('i', (request()->input('page',1)-1));
   
    }

   
    public function edit(Payment $payment)
    {
        //
    }

    
    public function update(Request $request, Payment $payment)
    {
        //
    }

    public function destroy(Payment $payment)
    {
        //
    }
}
