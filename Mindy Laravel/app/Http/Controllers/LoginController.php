<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller{
    public function login(Request $request){
        
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $data = User::where('email', $request -> email)->first();
            Session::put('user', $data);
            return redirect()->intended('profile/'. $data->id);
        }

        return back()->with('loginError', 'Login Failed!');
    }
}