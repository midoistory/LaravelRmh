@extends('dividing.app')

@section('heading', 'Detail Data Petugas')

@section('content')
    <div class="card shadow mb-4 col-sm-12 border-left-primary py-2">
        <div class="card-body">
            ID PETUGAS : {{ $petuga->id_petugas }}
            <br>
            USERNAME : {{ $petuga->username }}
            <br>
            PASSWORD : {{ $petuga->password }}
            <br>
            NAMA PETUGAS : {{ $petuga->nama_petugas }}
            <br>
            LEVEL : {{ $petuga->level }}
        </div>
    </div>
@endsection
