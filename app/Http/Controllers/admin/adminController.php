<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Contact;
use App\Models\Address;
use Illuminate\Http\Request;


class adminController extends Controller
{
    
    public function Admin(Request $request)
    {
        $user = new User;
        $user->name = 'Nirav';
        $user->password = bcrypt('123456');
        $user->email = 'nirav1549@gmail.com';

        $user->save();
        echo $user;
        return $user;
    }
    public function initFooterData(Request $request)
    {
        $address = new Address;
        $address->address = 'Om marble, bypass road, Sardar Nagar, Palitana-364270, Bhavanagr, Gujarat.';
        $address->save();

        $address = new Address;
        $address->address = 'Om marble, bypass road, Sardar Nagar, Palitana-364270, Bhavanagr, Gujarat.';
        $address->save();

        $contact = new Contact;
        $contact->email = 'hitenbhayani41@gmail.com';
        $contact->phoneNumber = '+91 9429829884';
        $contact->save();

        return redirect()->route('adminhome');
    }

    public function updateAddress(Request $request)
    {
        $address = Address::find($request->id);
        $address->address = $request->address;
        $address->save();

        return redirect()->route('adminhome');
    }
}