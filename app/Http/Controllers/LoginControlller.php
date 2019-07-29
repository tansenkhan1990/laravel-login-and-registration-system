<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginControlller extends Controller
{
    public function login()
    {
        return view('login');
    }
}
