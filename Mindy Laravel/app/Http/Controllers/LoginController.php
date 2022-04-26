<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{
    public function login(Request $request){
        // dd($request);
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $data = User::where('email', $request -> email)->first();
            return redirect()->intended('profile/'. $data->id);
        }

        return back()->with('loginError', 'Login Failed!');
    }
}