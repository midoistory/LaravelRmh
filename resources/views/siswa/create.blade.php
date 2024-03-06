@extends('dividing.app')

@section('heading', 'Input Data Siswa')

@section('content')
    <div class="card shadow mb-4 col-sm-12 border-left-primary py-2">
        <div class="card-body">
            <form action="{{ route('siswa.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input name="nisn" type="text" class="form-control @error('nisn') is-invalid @enderror"
                        placeholder="Ketik NISN" value="{{ old('nisn') }}">
                    @error('nisn')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nis">NIS</label>
                    <input name="nis" type="text" class="form-control @error('nis') is-invalid @enderror"
                        id="nis" placeholder="Ketik NIS" value="{{ old('nis') }}">
                    @error('nis')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                        id="nama" placeholder="Ketik Nama Siswa" value="{{ old('nama') }}">
                    @error('nama')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="id_kelas">Kelas</label>
                    <select name="id_kelas" class="form-control @error('id_kelas') is-invalid @enderror">
                        <option value="">Pilih Kelas</option>
                        @foreach ($kelasList as $id_kelas => $nama_kelas)
                            <option value="{{ $id_kelas }}" {{ old('id_kelas') == $id_kelas ? 'selected' : '' }}>
                                {{ $nama_kelas }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_kelas')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror"
                        id="alamat" placeholder="Ketik Alamat" value="{{ old('alamat') }}">
                    @error('alamat')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telp">Nomor Telepon</label>
                    <input name="telp" type="number" class="form-control @error('telp') is-invalid @enderror"
                        id="telp" placeholder="Ketik Nomor Telepon" value="{{ old('telp') }}">
                    @error('telp')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="id_spp">TAHUN SPP</label>
                    <select name="id_spp" class="form-control @error('id_spp') is-invalid @enderror">
                        <option value="">Pilih Tahun Spp</option>
                        @foreach ($sppList as $id_spp => $tahun)
                            <option value="{{ $id_spp }}" {{ old('id_spp') == $tahun ? 'selected' : '' }}>
                                {{ $tahun }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_spp')
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
