<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('profileUser'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::find($id);
        return view('profileUser',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);
        return view('editUser',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        return redirect('profile/'.$request->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function schedule()
    {
        return view('scheduleUser');
    }
    
     public function logout()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('/masuk');
    }
}
