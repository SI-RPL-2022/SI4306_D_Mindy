<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PsikologController extends Controller
{
    public function index(Request $request, $id)
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