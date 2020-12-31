<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Contact;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


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
        $products = Product::all()->where('category','=',$request->category);
        return view('product-detail', ['products' => $products, 'product' => $product, 'page' => 'products', 'contact' => $contact]);
    }

    public function getproducts(Request $request)
    {
        if (str_contains($request->category,'all')) {
            $products = Product::all();
        }else{
            $products = Product::all()->where('category','=',$request->category);
        }


        return response()->json([
            'success' => true,
            'html'=> view('products-card-view',compact('products'))->render(),
            ]);
    }


}
