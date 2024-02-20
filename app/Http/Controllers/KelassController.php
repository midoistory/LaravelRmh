<?php

namespace App\Http\Controllers;

use App\Models\Kelass;
use App\Http\Requests\StoreKelassRequest;
use App\Http\Requests\UpdateKelassRequest;

class KelassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelass = Kelass::select('id_kelas', 'nama_kelas', 'kompetensi_keahlian')->get();
        return view('kelas.index', compact('kelass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKelassRequest $request)
    {
        $kelas = Kelass::create($request->all());
        return redirect()->route('kelas.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelass $kela)
    {
        return view('kelas.show', compact('kela'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelass $kela)
    {
        return view('kelas.edit', compact('kela'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelassRequest $request, Kelass $kela)
    {
        $kela->update($request->only(['nama_kelas', 'kompetensi_keahlian']));
        return redirect()->route('kelas.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelass $kela)
    {
        $kela->delete();
        return redirect()->route('kelas.index')->with('success', 'Data berhasil dihapus');
    }
}
