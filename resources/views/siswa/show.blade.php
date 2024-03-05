@extends('dividing.app')

@section('heading', 'Detail Data Siswas')

@section('content')
    <div class="card shadow mb-4 col-sm-12 border-left-primary py-2">
        <div class="card-body">
            NISN : {{ $siswa->nisn }}
            <br>
            NIS : {{ $siswa->nis }}
            <br>
            NAMA : {{ $siswa->nama }}
            <br>
            ID KELAS : {{ $siswa->id_kelas }}
            <br>
            ALAMAT : {{ $siswa->alamat }}
            <br>
            NOMOR TELEPON : {{ $siswa->telp }}
            <br>
            ID SPP : {{ $siswa->id_spp }}
            <br>
        </div>
    </div>
@endsection