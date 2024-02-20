@extends('dividing.app')

@section('heading', 'Data Kelas')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('kelas.create') }}" class="btn btn-primary">
                <i class="fa fa-plus"></i>KELAS<br>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID KELAS</th>
                            <th>NAMA KELAS</th>
                            <th>KOMPETENSI KEAHLIAN</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($kelass as $key => $value)
                            <tr>
                                <td>{{ $value->id_kelas }}</td>
                                <td>{{ $value->nama_kelas }}</td>
                                <td>{{ $value->kompetensi_keahlian }}</td>
                                <td>
                                    <form action="{{ route('kelas.destroy', $value->id_kelas) }}" method="POST">
                                        <a href="{{ route('kelas.show', $value->id_kelas) }}"
                                            class="btn btn-sm btn-primary">Detail</a>
                                        <a href="{{ route('kelas.edit', $value->id_kelas) }}"
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
