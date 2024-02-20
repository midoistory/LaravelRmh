@extends('dividing.app')

@section('heading', 'Edit Data Kelas')

@section('content')
    <div class="card shadow mb-4 col-sm-12 border-left-primary py-2">
        <div class="card-body">
            <form action="{{ route('kelas.update', ['kela' => $kela->id_kelas]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_kelas">Nama Kelas</label>
                    <input name="nama_kelas" type="text" class="form-control @error('nama_kelas') {{ 'is-invalid' }} @enderror"
                        id="nama_kelas" placeholder="Nama Kelas" value="{{ $kela->nama_kelas }}">
                    @error('nama_kelas')
                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
                    <input name="kompetensi_keahlian" type="text" class="form-control @error('kompetensi_keahlian') {{ 'is-invalid' }} @enderror"
                        id="kompetensi_keahlian" placeholder="Kompetensi Keahlian" value="{{ $kela->kompetensi_keahlian }}">
                    @error('kompetensi_keahlian')
                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
