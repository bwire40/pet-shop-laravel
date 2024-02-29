<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(10);
        return view('contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store the message


        $validated = $request->validate([
            "name" => "required|min:3|max:30",
            "email" => "required|email",
            "message" => "required|min:3|max:1000",
        ]);
        // create
        Contact::create($validated);

        // redirect back
        return redirect()->route('contact-us')->with('success', 'Message sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //update
        $message_status = "read";
        // create
        $contact->update(["message_status" => $message_status]);

        // redirect back
        return redirect()->route('contact.index')->with('success', 'Message Read!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
        $contact->delete();

        return redirect()->route('contact.index')->with('success', 'Successfully deleted message!');
    }
}
