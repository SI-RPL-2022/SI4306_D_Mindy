<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\User;
use Illuminate\Http\Request;

class PsikologController extends Controller
{
    public function index()
    {
        $jadwal = Pembelian::join('users', 'pembelians.id_user', '=', 'users.id')->join('products', 'pembelians.pilihan', '=', 'products.paket')->get(['pembelians.*', 'users.nama', 'products.paket', 'products.service']);
        return view('psikolog.jadwal', compact('jadwal'));
    }

    public function input(Request $request, $id){
        Pembelian::find($request->id)->update([
            'jadwal' => $request->jadwal,
            'link' =>$request->link
        ]);
        return redirect('jadwal/' . $request->id);
    }

    public function chat()
    {
        $contact = Pembelian::join('users', 'pembelians.id_user', '=', 'users.id')->get(['pembelians.*', 'users.nama', 'users.nomor']);
        return view('psikolog.chat', compact('contact'));
    }

    public function profil()
    {
        return view('psikolog.profile');
    }

    public function show($id)
    {
        $data = User::find($id);
        return view('psikolog.profile', compact('data'));
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('user.editUser', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $imgName = User::find($request->id);
        if ($request->gambar) {
            $imgName = time() . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('gambar'), $imgName);
        }

        User::find($request->id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'nomor' => $request->nomor,
            'lahir' => $request->lahir,
            'kelamin' => $request->kelamin,
            'gambar' => $imgName,
        ]);
        return redirect('psikolog/' . $request->id);
    }
}