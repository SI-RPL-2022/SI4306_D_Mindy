<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Pembelian;
use App\Models\User;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function show(Request $request) {
        $data = Pembelian::get();
        return view('user.chose', compact('data'));
    }

    public function beli()
    {
        return view("pilihLayanan");
    }

    public function pilih()
    {
        $data = Layanan::get(). User::get();
        return view('pilihLayanan', compact('data'));
    }
}
