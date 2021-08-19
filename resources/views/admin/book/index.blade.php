@extends('admin.templates.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Buku</h3>
            <a href="{{ route('admin.book.create') }}" class="btn btn-primary btn-sm float-right">Tambah Buku</a>
        </div>
        <div class="card-body">

            <table id="dataTable" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Author</th>
                    <th>Cover</th>
                    <th>Action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
    <form action="" method="post" id="deleteForm">
        @csrf
        @method("DELETE")
        <input type="submit" value="Delete" class="btn btn-danger btn-sm d-none">
    </form>

@endsection
@push('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endpush

@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('admin.templates.partials.alerts')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script>
        $(function () {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.book.data') }}',
                columns: [
                    {data: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'title'},
                    {data: 'description'},
                    {data: 'author'},
                    {data: 'cover'},
                    {data: 'action'},
                ]
            })

        });

    </script>
@endpush
