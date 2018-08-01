<?php

namespace App\Http\Controllers;

use App\ContactMe;
use App\Mail\Contact;
use Illuminate\Http\Request;

class ContactMeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new ContactMe();

        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->number = $request->input('phone');
        $contact->message = $request->input('message');

        $contact->save();

        //Add Email address you want to collect all the mails
        \Mail::to('')->send(new Contact($contact));

        return redirect()->back()->with('message', 'Message sent successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactMe  $contactMe
     * @return \Illuminate\Http\Response
     */
    public function show(ContactMe $contactMe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactMe  $contactMe
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactMe $contactMe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactMe  $contactMe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactMe $contactMe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactMe  $contactMe
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactMe $contactMe)
    {
        //
    }
}
