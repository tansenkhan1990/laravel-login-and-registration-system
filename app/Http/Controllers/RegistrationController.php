<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Session;

class RegistrationController extends Controller
{

    public function index()
    {
        return view('registration');
    }

    public function insert(Request $request){
        //validate post data
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'birth_date' => 'required',
            'user_name' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|max:255',
            'gender' => 'required',
            'password' => 'required|min:6',
        ]);
        //get post data
        $postData = $request->all();
        //print_r($postData);
        //insert post data
        User::create($postData);
        //store status message
        Session::flash('success_msg', 'Congrats you are registered');
        return redirect()->route('index');


    }


}
