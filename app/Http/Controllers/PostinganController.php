<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostinganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('postingan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('postingan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('gambar')) {
            $gambar = $request->gambar->store('gambar', 'public');
        }

        Postingan::create([
            'judul' => $request->judul,
            'isikomen' => $request->keterangan,
            'hastag' => $request->hastag,
            'gambar' => $gambar,
            'id_user' => $request->id_user,
        ]);

        return redirect()->route('postingan.index')->with('message', 'Data berhasil diubah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
