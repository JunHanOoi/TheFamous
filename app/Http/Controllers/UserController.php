<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //import the database
use App\Models\User;//import model
use App\Models\Company;

class UserController extends Controller
{


    function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
           
        ],[
        //'email.max' =>'Invalid format',
       // 'password.min' =>'The password must be longer than 5 character '

    ]);
        return $request->input();
    }
}
