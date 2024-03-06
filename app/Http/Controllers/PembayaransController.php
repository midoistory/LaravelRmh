<?php

namespace App\Http\Controllers;

use App\Models\{
    Pembayarans,
    Siswas,
    Spp,
    Petugass,
};
use App\Http\Requests\StorePembayaranRequest;
use App\Http\Requests\UpdatePembayaranRequest;

class PembayaransController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembayaran = Pembayarans::select('id_pembayaran', 'id_petugas', 'nisn', 'tgl_bayar', 'bulan_bayar', 'tahun_bayar', 'id_spp', 'jumlah_bayar')->get();
        return view('pembayaran.index', compact('pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $petugasList = Petugass::pluck('nama_petugas', 'id_petugas');
        $siswaList = Siswas::pluck('nama', 'nisn');
        $sppList = Spp::pluck('tahun', 'id_spp');

        return view('pembayaran.create', compact('petugasList', 'siswaList', 'sppList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePembayaranRequest $request)
    {
        $pembayaran = Pembayarans::create($request->all());
        return redirect()->route('pembayaran.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembayarans $pembayaran)
    {
        return view('pembayaran.show', compact('pembayaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembayarans $pembayaran)
    {
        $petugasList = Petugass::pluck('nama_petugas', 'id_petugas');
        $siswaList = Siswas::pluck('nama', 'nisn');
        $sppList = Spp::pluck('tahun', 'id_spp');

        return view('pembayaran.edit', compact('pembayaran', 'petugasList', 'siswaList', 'sppList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePembayaranRequest $request, Pembayarans $pembayaran)
    {
        $pembayaran->update($request->only(['id_petugas', 'nisn', 'tgl_bayar', 'bulan_bayar', 'tahun_bayar', 'id_spp', 'jumlah_bayar']));
        return redirect()->route('pembayaran.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembayarans $pembayaran)
    {
        $pembayaran->delete();
        return redirect()->route('pembayaran.index')->with('success', 'Data berhasil dihapus');
    }
}
