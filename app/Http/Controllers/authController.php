<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class authController extends Controller
{
    public function login(){

        return view('login');
    }

    public function loginAttempt(Request $req){
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            
            return redirect()->intended('/');
        }else{
            return redirect('/login')->with('error', 'Authentication Error');
        }
    }
}
