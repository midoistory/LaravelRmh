@extends('dividing.app')

@section('heading', 'Input Data Spp')

@section('content')
    <div class="card shadow mb-4 col-sm-12 border-left-primary py-2">
        <div class="card-body">
            <form action="{{ route('spp.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Tahun</label>
                    <input name="tahun" type="number" class="form-control @error('nama') is-invalid @enderror"
                        placeholder="Ketik Tahun" value="{{ old('tahun') }}">
                    @error('tahun')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">Nominal</label>
                    <input name="nominal" type="number" class="form-control @error('nama') is-invalid @enderror"
                        id="nominal" placeholder="Ketik Nominal" value="{{ old('nominal') }}">
                    @error('nominal')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </form>
        </div>
    </div>
@endsection
