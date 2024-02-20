@extends('dividing.app')

@section('heading', 'Edit Data Spp')

@section('content')
    <div class="card shadow mb-4 col-sm-12 border-left-primary py-2">
        <div class="card-body">
            <form action="{{ route('spp.update', ['spp' => $spp->id_spp]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="number" name="tahun" class="form-control @error('tahun') {{ 'is-invalid' }} @enderror"
                        value="{{ $spp->tahun }}" required>
                </div>
                <div class="form-group">
                    <label for="nominal">Nominal</label>
                    <input type="number" name="nominal" class="form-control @error('nominal') {{ 'is-invalid' }} @enderror"
                        value="{{ $spp->nominal }}" required>
                </div>
                @error('tahun')
                    <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                @enderror
                @error('nominal')
                    <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                @enderror
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
