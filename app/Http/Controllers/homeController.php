<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use App\Models\Product;

class homeController extends Controller
{

    public function index()
    {
        $contact = Contact::first();
        $offices = DB::table('offices')->get();
        $products = Product::latest()->take(10)->get();
        return view('home', ['page' => 'home', 'contact' => $contact,'offices' => $offices, 'products' => $products]);
    }
}
