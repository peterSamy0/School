<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;
class AuthController extends Controller
{
    public function login(){

        return view('auth.login');
    }

    public function authLogin(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], true)){
            return redirect('admin/dashboard');
        }else{
            return back()->withErrors(['error' => 'Invalid credentials']);
        }
    }
}
