<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;


class aboutusController extends Controller
{

    public function index()
    {
        $addresses = Address::all();
        $contact = Contact::all();
        return view('about', ['page' => 'aboutus', 'addresses' => $addresses, 'contact' => $contact]);
    }
}