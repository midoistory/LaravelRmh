@extends('layout.master')

@section('header', 'Detail Data Spp')

@section('content')
    <div class="card shadow mb-4 col-sm-12 border-left-primary py-2">
        <div class="card-body">
            ID SPP : {{ $sppsShow->id_spp }}
            <br>
            TAHUN : {{ $sppsShow->tahun }}
            <br>
            NOMINAL : {{ $sppsShow->nominal }}
        </div>
    </div>

@endsection
