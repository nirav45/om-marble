<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;


class adminaboutusController extends Controller
{

    public function index()
    {
        $contact = Contact::first();
        return view('admin/about', ['page' => 'aboutus', 'contact' => $contact]);
    }
}