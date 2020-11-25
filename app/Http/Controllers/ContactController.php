<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\ContactMe;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function store()
    {
        request()->validate(['email'=> 'required|email:rfc']);

        \Mail::to(\request('email'))
            ->send(new Contact());

        return redirect(route('contact.index'))->with('message', 'mail sent');
    }
}
