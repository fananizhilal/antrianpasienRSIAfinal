<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
 public function register()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'no_hp' => 'required|string|max:12', 
            'no_ktp' => 'required|string|max:20|unique:users',
            'password' => 'required|min:8|confirmed'

        ]);

        $user = new User();
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->no_hp =$request->no_hp;
        $user->no_ktp =$request->no_ktp;
        $user->password = Hash::make($request->password);
 
        $user->save();
 
        return redirect('/login')->with('success', 'Register successfully');
    }

    public function login()
    {
        return view('auth.login');
    }
 
    public function loginPost(Request $request)
    {

        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
            
        ];
 
        if (Auth::attempt($credetials)){
            if (Auth::user()->roles == 'pasien') {
            return redirect('/home');
        }   elseif (Auth::user()->roles == 'admin'){
            return redirect('/dashboard');
        }
    } else {
        return back()->withErrors([
            'email' => 'Data tidak ditemukan. Harap periksa inputan Anda dan coba lagi.',
        ])->onlyInput('email');
    }
}
 
    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login');
    }
}

 

