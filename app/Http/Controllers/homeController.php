<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Contact;
use Illuminate\Http\Request;


class homeController extends Controller
{

    public function index()
    {
        $addresses = Address::all();
        $contact = Contact::all();
        return view('home', ['page' => 'home', 'addresses' => $addresses, 'contact' => $contact]);
    }
}