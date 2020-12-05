<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;


class adminaboutusController extends Controller
{

    public function index()
    {
        $addresses = Address::all();
        $contact = Contact::all();
        return view('admin/about', ['page' => 'aboutus', 'addresses' => $addresses, 'contact' => $contact]);
    }
}