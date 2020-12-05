<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class createAdminController extends Controller
{
    
    public function create(Request $request)
    {
        $user = new User;
        $user->name = 'Nirav';
        $user->password = bcrypt('123456');
        $user->email = 'nirav1549@gmail.com';

        $user->save();
        echo $user;
        return $user;
    }
}