<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Product;

class homeController extends Controller
{

    public function index()
    {
        $contact = Contact::first();
        $products = Product::limit(10);
        return view('home', ['page' => 'home', 'contact' => $contact, 'products' => $products]);
    }
}