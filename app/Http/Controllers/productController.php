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
        $addresses = Address::all();
        $contact = Contact::all();
        $products = Product::all();
        return view('products', ['products' => $products, 'page' => 'products', 'addresses' => $addresses, 'contact' => $contact]);
    }

    public function get(Request $request)
    {
        $product = Product::find($request->id);
        $addresses = Address::all();
        $contact = Contact::all();
        return view('product-detail', ['product' => $product, 'page' => 'products', 'addresses' => $addresses, 'contact' => $contact]);
    }


}