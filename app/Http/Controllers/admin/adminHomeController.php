<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Contact;
use Illuminate\Http\Request;


class adminHomeController extends Controller
{

    public function index()
    {
        $addresses = Address::all();
        $contact = Contact::all();
        return view('admin/home', ['page' => 'home', 'addresses' => $addresses, 'contact' => $contact]);
    }
}