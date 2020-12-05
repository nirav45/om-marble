<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;


class adminProductController extends Controller
{
    
    public function create(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $path = $request->file('image')->store('products');
        $product->image = $path;
        $product->save();
        
        return redirect()->route('adminproducts');
    }

    public function update(Request $request)
    {
        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->description = $request->description;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products');
            $product->image = $path;
        }
        $product->save();
        
        return redirect()->route('adminproduct', ['id' => $product->id]);
    }

    public function index()
    {
        $products = Product::all();
        $addresses = Address::all();
        $contact = Contact::all();
        return view('admin/products', ['products' => $products, 'page' => 'products', 'addresses' => $addresses, 'contact' => $contact]);
    }

    public function get(Request $request)
    {
        $product = Product::find($request->id);
        $addresses = Address::all();
        $contact = Contact::all();
        return view('admin/product-detail', ['product' => $product, 'page' => 'products', 'addresses' => $addresses, 'contact' => $contact]);
    }
}