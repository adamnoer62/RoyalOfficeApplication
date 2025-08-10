<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index(){
        $contact = Contact::all();
        return view('Admin.Contact.index', compact('contact'));
    }
    // Show the contact form
    public function showForm()
    {
        return view('HalamanDepan.contact');
    }

    // Store the contact data in the database
    public function store(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Store contact data
        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for contacting us!');
    }
}
