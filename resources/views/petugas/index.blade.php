@extends('dividing.app')

@section('heading', 'Data Petugas')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('petugas.create') }}" class="btn btn-primary">
                <i class="fa fa-plus"></i>PETUGAS<br>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID PETUGAS</th>
                            <th>USERNAME</th>
                            <th>PASSWORD</th>
                            <th>NAMA PETUGAS</th>
                            <th>LEVEL</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($petugass as $key => $value)
                            {{-- Perubahan di sini --}}
                            <tr>
                                <td>{{ $value->id_petugas }}</td>
                                <td>{{ $value->username }}</td>
                                <td>{{ $value->password }}</td>
                                <td>{{ $value->nama_petugas }}</td>
                                <td>{{ $value->level }}</td>
                                <td>
                                    <form action="{{ route('petugas.destroy', $value->id_petugas) }}" method="POST">
                                        <a href="{{ route('petugas.show', $value->id_petugas) }}"
                                            class="btn btn-sm btn-primary">Detail</a>
                                        <a href="{{ route('petugas.edit', $value->id_petugas) }}"
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
