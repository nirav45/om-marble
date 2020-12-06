<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Contact;
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

    public function updateFooterData(Request $request)
    {
        $footerData = Contact::find($request->id);
        $footerData->address1 = $request->address1;
        $footerData->address2 = $request->address2;
        $footerData->email = $request->email;
        $footerData->phoneNumber = $request->phoneNumber;
        $footerData->twitter = $request->twitter;
        $footerData->facebook = $request->facebook;
        $footerData->instagram = $request->instagram;
        $footerData->linkedin = $request->linkedin;
        $footerData->save();

        return redirect()->route('adminhome');
    }
}