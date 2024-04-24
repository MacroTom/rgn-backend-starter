<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'fullname' => 'required',
            'message' => 'nullable'
        ]);

        // Create a contact record into the contact table
        Contact::create($data);

        dd('Contact has been saved!');
    }

    public function contacts()
    {
        // not performance wise
        $contacts = Contact::all();

        // Contact::paginate();
        return view('contacts', [
            'contacts' => $contacts
        ]);
    }
}
