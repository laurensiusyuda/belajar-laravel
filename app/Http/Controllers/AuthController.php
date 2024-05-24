<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credential = $request->only('email','password');
        if (Auth::attempt($credential)) {
            return redirect('posts');
        } else{
            return redirect('login')->with('error_message','Wrong Email or Password');
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    public function register_form(){
        return view('auth.register');
    }
    public function register(Request $request){

        // memberika validasi
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' =>'required|min:6|confirmed'
        ]
        );

        //menambahkan data
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('email')),

        ]);

        return redirect('login');
    }
}
