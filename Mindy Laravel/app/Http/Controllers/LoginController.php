<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
{
    $rules = [
        'username'      => 'required',
        'password'      => 'required'
    ];

    $messages = [
        'username.required'     => 'Username wajib diisi',
        'password.required'     => 'Password wajib diisi',
    ];

    $validator = Validator::make($request->all(), $rules, $messages);

    if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput($request->all);
    }

    $remember = $request->has('remember') ? true : false;

    $data = [
        'email'     => $request->input('username'),
        'pass'  => $request->input('password'),
    ];

    Auth::attempt($data, $remember);

    if (Auth::check()) {
        return redirect()->route('home');
    } else { 
        return redirect()->route('login')->withInput()->withErrors(['error' => 'Username atau Password tidak ditemukan!']);
    }
}
}
