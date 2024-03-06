<?php

namespace App\Http\Controllers;

use App\Models\{
    Siswas,
    Kelass,
    Spp,
};
use App\Http\Requests\StoreSiswasRequest;
use App\Http\Requests\UpdateSiswasRequest;

class SiswasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswas::select('nisn', 'nis', 'nama', 'id_kelas', 'alamat', 'telp', 'id_spp')->get();
        return view('siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelasList = Kelass::pluck('nama_kelas', 'id_kelas');
        $sppList = Spp::pluck('tahun', 'id_spp');

        return view('siswa.create', compact('kelasList', 'sppList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSiswasRequest $request)
    {
        $siswa = Siswas::create($request->all());
        return redirect()->route('siswa.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswas $siswa)
    {
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswas $siswa)
    {
        $kelasList = Kelass::pluck('nama_kelas', 'id_kelas');
        $sppList = Spp::pluck('tahun', 'id_spp');

        return view('siswa.edit', compact('siswa', 'kelasList', 'sppList'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSiswasRequest $request, Siswas $siswa)
    {
        $siswa->update($request->only(['nis', 'nama', 'id_kelas', 'alamat', 'telp', 'id_spp']));
        return redirect()->route('siswa.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswas $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Data berhasil dihapus');
    }
}
