<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing.home');
    }


    public function create()
    {
       return view('landing.home');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3',
            'message'=> 'required|min:5'

        ]);
        Contact::create([
            'name'=> $request->name,
            'message'=> $request->message,
            'no_telp'=> $request->no_telp,
            'email'=> $request->email,
        ]);
        return view('landing.home')->with('success', 'Anda berhasil membuat pesan!');

    }
    public function adminContact()
    {
         $contact = Contact::all();
         return view('admin.contact', compact('contact'))->with('i', (request()->input('page',1)-1));
    }
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
