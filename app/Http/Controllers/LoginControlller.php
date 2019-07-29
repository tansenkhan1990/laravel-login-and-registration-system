<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class LoginControlller extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function loginCheck(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt([ 'email' => $request['email'], 'password' => $request['password'] ])){
            return redirect()->route('dashboard');
        }
          return redirect()->back();

    }
}
