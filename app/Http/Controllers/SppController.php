<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use App\Http\Requests\StoreSppRequest;
use App\Http\Requests\UpdateSppRequest;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spps = Spp::select('id_spp', 'tahun', 'nominal')->get();
        return view('spp.index', compact('spps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('spp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSppRequest $request)
    {
        $spp = Spp::create($request->all());
        return redirect()->route('spp.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Spp $spp)
    {
        return view('spp.show', compact('spp'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Spp $spp)
    {
        return view('spp.edit', compact('spp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSppRequest $request, Spp $spp)
    {
        $spp->update($request->all());
        return redirect()->route('spp.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spp $spp)
    {
        $spp->delete();
        return redirect()->route('spp.index')
        ->with('success', 'Data berhasil di hapus');
    }
}
