<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pengguna.index' , [
            'penggunas' => Pengguna::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pengguna = new Pengguna;

        $pengguna->name = $request->name;
        $pengguna->title = $request->title;
        $pengguna->email = $request->email;

        $pengguna->save();

        return redirect()->route('pengguna.index');
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
        $pengguna = Pengguna::find($id);

        return view('pengguna.edit', [
            'pengguna' => $pengguna,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pengguna = Pengguna::find($id);

        $pengguna->name = $request->name;
        $pengguna->title = $request->title;
        $pengguna->email = $request->email;

        $pengguna->save();

        return redirect()->route('pengguna.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengguna = Pengguna::find($id);

        $pengguna->delete();

        return redirect()->route('pengguna.index');
    }
}
