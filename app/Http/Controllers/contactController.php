<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Product;

class contactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        return view('contact', ['page' => 'contact', 'contact' => $contact,]);
    }
}