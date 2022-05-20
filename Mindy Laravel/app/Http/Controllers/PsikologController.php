<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PsikologController extends Controller
{
    public function index()
    {
        return view('psikolog.jadwal');
    }

    public function chat()
    {
        return view('psikolog.chat');
    }

    public function profile()
    {
        return view('psikolog.profile');
    }
}
