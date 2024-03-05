@extends('dividing.app')

@section('heading', 'Edit Data Siswa')

@section('content')
    <div class="card shadow mb-4 col-sm-12 border-left-primary py-2">
        <div class="card-body">
            <form action="{{ route('siswa.update', ['siswa' => $siswa->nisn]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nis">NIS</label>
                    <input name="nis" type="text" class="form-control @error('nis') is-invalid @enderror" id="nis"
                        placeholder="Ketik NIS" value="{{ $siswa->nis }}">
                    @error('nis')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                        id="nama" placeholder="Ketik Nama Siswa" value="{{ $siswa->nama }}">
                    @error('nama')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="id_kelas">ID Kelas</label>
                    <input name="id_kelas" type="number" class="form-control @error('id_kelas') is-invalid @enderror"
                        id="id_kelas" placeholder="Ketik Id Kelas" value="{{ $siswa->id_kelas }}">
                    @error('id_kelas')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror"
                        id="alamat" placeholder="Ketik Alamat" value="{{ $siswa->alamat }}">
                    @error('alamat')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telp">Nomor Telepon</label>
                    <input name="telp" type="number" class="form-control @error('telp') is-invalid @enderror"
                        id="telp" placeholder="Ketik Nomor Telepon" value="{{ $siswa->telp }}">
                    @error('telp')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="id_spp">Id Spp</label>
                    <input name="id_spp" type="number" class="form-control @error('id_spp') is-invalid @enderror"
                        id="id_spp" placeholder="Ketik Nomor Telepon" value="{{ $siswa->id_spp }}">
                    @error('id_spp')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
