@extends('dividing.app')

@section('heading', 'Detail Data Kelas')

@section('content')
    <div class="card shadow mb-4 col-sm-12 border-left-primary py-2">
        <div class="card-body">
            ID KELAS : {{ $kela->id_kelas }}
            <br>
            TAHUN : {{ $kela->nama_kelas }}
            <br>
            NOMINAL : {{ $kela->kompetensi_keahlian }}
        </div>
    </div>
@endsection
