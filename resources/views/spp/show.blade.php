@extends('dividing.app')

@section('heading', 'Detail Data Spp')

@section('content')
    <div class="card shadow mb-4 col-sm-12 border-left-primary py-2">
        <div class="card-body">
            ID SPP : {{ $spp->id_spp }}
            <br>
            TAHUN : {{ $spp->tahun }}
            <br>
            NOMINAL : {{ $spp->nominal }}
        </div>
    </div>
@endsection
