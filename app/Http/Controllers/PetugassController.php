<?php

namespace App\Http\Controllers;

use App\Models\Petugass;
use App\Http\Requests\StorePetugassRequest;
use App\Http\Requests\UpdatePetugassRequest;

class PetugassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petugass = Petugass::select('id_petugas', 'username', 'password', 'nama_petugas', 'level')->get();
        return view('petugas.index', compact('petugass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetugassRequest $request)
    {
        $petugas = Petugass::create($request->all());
        return redirect()->route('petugas.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Petugass $petuga)
    {
        return view('petugas.show', compact('petuga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petugass $petuga)
    {
        return view('petugas.edit', compact('petuga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetugassRequest $request, Petugass $petuga)
    {
        $petuga->update($request->only(['username', 'password', 'nama_petugas', 'level']));
        return redirect()->route('petugas.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petugass $petuga)
    {
        $petuga->delete();
        return redirect()->route('petugas.index')->with('success', 'Data berhasil dihapus');
    }
}
