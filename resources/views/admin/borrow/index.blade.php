@extends('admin.templates.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Peminjaman Buku</h3>
        </div>
        <div class="card-body">

            <table id="dataTable" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Judul Buku</th>
                    <th>Aksi</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
    <form action="" method="post" id="returnForm">
        @csrf
        @method("PUT")
        <input type="submit" value="Return" class="btn btn-danger btn-sm d-none">
    </form>

@endsection
@push('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endpush

@push('scripts')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('admin.templates.partials.alerts')
    <script>
        $(function () {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.borrow.data') }}',
                columns: [
                    {data: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'user'},
                    {data: 'book_title'},
                    {data: 'action'},
                ]
            })

        });

    </script>
@endpush
