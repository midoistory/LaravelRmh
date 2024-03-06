@extends('dividing.app')

@section('heading', 'Data Pembayaran')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('pembayaran.create') }}" class="btn btn-primary">
                <i class="fa fa-plus"></i>PEMBAYARAN<br>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID PEMBAYARAN</th>
                            <th>ID PETUGAS</th>
                            <th>NISN</th>
                            <th>TANGGAL BAYAR</th>
                            <th>BULAN BAYAR</th>
                            <th>TAHUN BAYAR</th>
                            <th>ID SPP</th>
                            <th>JUMLAH BAYAR</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pembayaran as $key => $value)
                            <tr>
                                <td>{{ $value->id_pembayaran }}</td>
                                <td>{{ $value->id_petugas }}</td>
                                <td>{{ $value->nisn }}</td>
                                <td>{{ $value->tgl_bayar }}</td>
                                <td>{{ $value->bulan_bayar }}</td>
                                <td>{{ $value->tahun_bayar }}</td>
                                <td>{{ $value->id_spp }}</td>
                                <td>{{ $value->jumlah_bayar }}</td>
                                <td>
                                    <form action="{{ route('pembayaran.destroy', $value->id_pembayaran) }}" method="POST">
                                        <a href="{{ route('pembayaran.show', $value->id_pembayaran) }}"
                                            class="btn btn-sm btn-primary">Detail</a>
                                        <a href="{{ route('pembayaran.edit', $value->id_pembayaran) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger my-1">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">Data Masih Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('adminsb/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminsb/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('adminsb/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('adminsb/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('adminsb/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminsb/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
@endpush
