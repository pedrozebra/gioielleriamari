<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use App\Models\ContactSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contatti');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10',
        ]);

        $submission = ContactSubmission::create($validatedData);
        Mail::to('admin@gioielleriamari.test')->send(new ContactFormSubmitted($submission));

        return redirect()->route('contact.create')->with('success', 'Il tuo messaggio è stato inviato con successo! Ti risponderemo al più presto.');
    }
}
