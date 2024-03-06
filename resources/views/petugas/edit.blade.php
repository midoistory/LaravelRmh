@extends('dividing.app')

@section('heading', 'Edit Data Petugas')

@section('content')
    <div class="card shadow mb-4 col-sm-12 border-left-primary py-2">
        <div class="card-body">
            <form action="{{ route('petugas.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input name="username" type="text" class="form-control @error('username') is-invalid @enderror"
                        placeholder="Ketik Username" value="{{ old('username') }}">
                    @error('username')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        id="password" placeholder="Ketik password" value="{{ old('password') }}">
                    @error('password')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_petugas">Nama Petugas</label>
                    <input name="nama_petugas" type="text"
                        class="form-control @error('nama_petugas') is-invalid @enderror" id="nama_petugas"
                        placeholder="Ketik Nama Petugas" value="{{ old('nama_petugas') }}">
                    @error('nama_petugas')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="level">Pilih Level</label>
                    <select name="level" class="form-control @error('level') is-invalid @enderror" id="level">
                        <option value="Admin" {{ old('level') === 'Admin' ? 'selected' : '' }}>Admin</option>
                        <option value="Petugas" {{ old('level') === 'Petugas' ? 'selected' : '' }}>Petugas</option>
                    </select>
                    @error('level')
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
