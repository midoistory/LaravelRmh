@extends('dividing.app')

@section('heading', 'Data Spp')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('spp.create') }}" class="btn btn-primary">
                <i class="fa fa-plus"></i> SPP<br>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID SPP</th>
                            <th>TAHUN</th>
                            <th>NOMINAL</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($spps as $key => $value)
                            <tr>
                                <td>{{ $value->id_spp }}</td>
                                <td>{{ $value->tahun }}</td>
                                <td>{{ $value->nominal }}</td>
                                <td>
                                    <form action="{{ route('spp.destroy', $value->id_spp) }}" method="POST">
                                        <a href="{{ route('spp.show', $value->id_spp) }}"
                                            class="btn btn-sm btn-primary">Detail</a>
                                        <a href="{{ route('spp.edit', $value->id_spp) }}"
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
