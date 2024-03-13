@extends('dividing.app')

@section('heading', 'Edit Data Pembayaran')

@section('content')
    <div class="card shadow mb-4 col-sm-12 border-left-primary py-2">
        <div class="card-body">
            <form action="{{ route('pembayaran.update', ['pembayaran' => $pembayaran->id_pembayaran]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="id_petugas">Pilih Nama Petugas</label>
                    <select name="id_petugas" class="form-control @error('id_petugas') is-invalid @enderror">
                        <option value="">Pilih Nama Petugas</option>
                        @foreach ($petugasList as $id_petugas => $nama_petugas)
                            <option value="{{ $id_petugas }}" {{ $pembayaran->id_petugas == $id_petugas ? 'selected' : '' }}>
                                {{ $nama_petugas }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_petugas')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nisn">Nama Siswa</label>
                    <select name="nisn" class="form-control @error('nisn') is-invalid @enderror">
                        <option value="">Pilih Nama Siswa</option>
                        @foreach ($siswaList as $nisn => $nama)
                            <option value="{{ $nisn }}" {{ $pembayaran->nisn == $nisn ? 'selected' : '' }}>
                                {{ $nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('nisn')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tgl_bayar">Tanggal Bayar</label>
                    <input name="tgl_bayar" type="text" class="form-control @error('tgl_bayar') is-invalid @enderror"
                        id="tgl_bayar" placeholder="Tanggal Bayar" value="{{ $pembayaran->tgl_bayar }}">
                    @error('tgl_bayar')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="bulan_bayar">Bulan Dibayar</label>
                    <input name="bulan_bayar" type="text" class="form-control @error('bulan_bayar') is-invalid @enderror"
                        id="bulan_bayar" placeholder="Ketik Bulan Dibayar" value="{{ $pembayaran->bulan_bayar }}">
                    @error('bulan_bayar')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tahun_bayar">Tahun Dibayar</label>
                    <input name="tahun_bayar" type="number" class="form-control @error('tahun_bayar') is-invalid @enderror"
                        id="tahun_bayar" placeholder="Ketik Tahun Dibayar" value="{{ $pembayaran->tahun_bayar }}">
                    @error('tahun_bayar')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="id_spp">Pilih Tahun SPP</label>
                    <select name="id_spp" class="form-control @error('id_spp') is-invalid @enderror">
                        <option value="">Pilih Tahun Spp</option>
                        @foreach ($sppList as $id_spp => $tahun)
                            <option value="{{ $id_spp }}" {{ $pembayaran->id_spp == $id_spp ? 'selected' : '' }}>
                                {{ $tahun }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_spp')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jumlah_bayar">Ketik Jumlah Bayar</label>
                    <input name="jumlah_bayar" type="number"
                        class="form-control @error('jumlah_bayar') is-invalid @enderror" id="jumlah_bayar"
                        placeholder="Ketik Jumlah Bayar" value="{{$pembayaran->jumlah_bayar}}">
                    @error('jumlah_bayar')
                        <span class="error invalid-feedback"
                            style="display: inline-block; font-size: 12px; color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
