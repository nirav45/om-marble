<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Address;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;


class adminHomeController extends Controller
{

    public function index()
    {
        $contact = Contact::first();
        $offices = DB::table('offices')->get();
        $products = Product::latest()->take(10)->get();
        return view('admin/home', ['page' => 'home', 'contact' => $contact,'offices' => $offices, 'products' => $products]);
    }
}
