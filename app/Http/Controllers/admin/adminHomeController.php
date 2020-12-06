<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;


class adminHomeController extends Controller
{

    public function index()
    {
        $contact = Contact::first();
        $products = Product::limit(10);
        return view('admin/home', ['page' => 'home', 'contact' => $contact, 'products' => $products]);
    }
}