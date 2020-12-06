<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;


class productController extends Controller
{

    public function index()
    {
        $contact = Contact::first();
        $products = Product::all();
        return view('products', ['products' => $products, 'page' => 'products', 'contact' => $contact]);
    }

    public function get(Request $request)
    {
        $product = Product::find($request->id);
        $contact = Contact::first();
        return view('product-detail', ['product' => $product, 'page' => 'products', 'contact' => $contact]);
    }


}