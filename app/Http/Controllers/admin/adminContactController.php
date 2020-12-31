<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;

class adminContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $products = Product::limit(10);
        return view('admin/contact', ['page' => 'contact', 'contact' => $contact, 'products' => $products]);
    }
}
