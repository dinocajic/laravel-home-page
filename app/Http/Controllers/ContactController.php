<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']       = "All Contact Messages";
        $data['description'] = "Display all of the contact messages";

        $contact = new Contact();
        $data['messages']    = $contact->latest()->get();

        return view('contact.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']       = 'Contact';
        $data['description'] = 'Contact Dino Cajic';

        return view('contact.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email',
            'phone'      => 'required',
            'message'    => 'required'
        );

        $request->validate($rules);

        // Insert contact info into database if validation passed
        $contact = new Contact();
        $contact->first_name = $request->post('first_name');
        $contact->last_name  = $request->post('last_name');
        $contact->email      = $request->post('email');
        $contact->phone      = $request->post('phone');
        $contact->message    = $request->post('message');
        $contact->save();

        return redirect()->back()->with('success', 'Your message has been successfully submitted.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['title']       = "Individual Post";
        $data['description'] = "Each individual description is listed here";

        $contact             = new Contact();
        $data['message']     = $contact->find($id);

        return view('contact.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title']       = "Edit Message";
        $data['description'] = "Edit each individual contact message";

        $contact             = new Contact();
        $data['message']     = $contact->find($id);

        return view('contact.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email',
            'phone'      => 'required',
            'message'    => 'required'
        );

        $request->validate($rules);

        // Update contact info if validation passed
        $contact = Contact::find($id);
        $contact->first_name = $request->post('first_name');
        $contact->last_name  = $request->post('last_name');
        $contact->email      = $request->post('email');
        $contact->phone      = $request->post('phone');
        $contact->message    = $request->post('message');
        $contact->save();

        return redirect()->back()->with('success', 'Your message has been successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::destroy($id);

        return redirect('/contact');
    }
}