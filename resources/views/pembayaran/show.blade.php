@extends('dividing.app')

@section('heading', 'Detail Data Pembayaran')

@section('content')
    <div class="card shadow mb-4 col-sm-12 border-left-primary py-2">
        <div class="card-body">
            ID PEMBAYARAN : {{ $pembayaran->id_pembayaran }}
            <br>
            NAMA PETUGAS : {{ $pembayaran->petugas->nama_petugas }}
            <br>
            NAMA SISWA : {{ $pembayaran->siswa->nama }}
            <br>
            TANGGAL BAYAR : {{ $pembayaran->tgl_bayar }}
            <br>
            BULAN BAYAR : {{ $pembayaran->bulan_bayar }}
            <br>
            TAHUN BAYAR : {{ $pembayaran->tahun_bayar }}
            <br>
            TAHUN SPP : {{ $pembayaran->spp->tahun }}
            <br>
            JUMLAH BAYAR : Rp.{{ $pembayaran->jumlah_bayar }}
            <br>
        </div>
    </div>
@endsection
