<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Closure;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function handle($request, Closure $next)
{
    if ( ! $this->auth->user() )
    {
        return(redirect('/masuk'));
    }

    return $next($request);
}
    public function index(Request $request) {
        $data = Layanan::get();
        return view('pilihLayanan', compact('data'));
    }
}
