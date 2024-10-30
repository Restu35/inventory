<?php

namespace App\Http\Controllers;

use app\models\pelanggan;
use Illuminate\Http\Request;

class pelanggancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan=pelanggan::all();
        return view('home.user.index' ,compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.user.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        user::create([
            'name'=>$request->nama,
            'alamat'=>$request->alamat,
            'notlp'=> bcrypt($request->name),
        ]);
        return redirect('/pelanggan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pelanggan=pelanggan::find($id);
        return view('home.pelanggan.edit', compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pelanggan=pelanggan::find($id);
        $pelanggan->update([
            'name'=>$request->nama,
            'alamat'=>$request->alamat,
            'notlp'=>bcrypt($request->notlp),
        ]);
        return redirect('/pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelanggan = pelanggan::find($id);
        $user->delate();
        return redirect('/pelanggan');
    }
}
