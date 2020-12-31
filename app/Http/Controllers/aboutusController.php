<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;


class aboutusController extends Controller
{

    public function index()
    {
        $contact = Contact::first();
        return view('about', ['page' => 'aboutus', 'contact' => $contact]);
    }
}
