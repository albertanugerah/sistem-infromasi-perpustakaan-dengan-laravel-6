@extends('admin.templates.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Laporan User Teraktif</h3>
        </div>
        <div class="card-body">

            <table id="dataTable" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Bergabung</th>
                    <th>Jumlah Peminjaman</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $page = 1;
                        if(request()->has('page'))
                        {
                            $page = request('page');
                        }
                        $no = (env('PAGINATION_ADMIN') * $page)-(env('PAGINATION_ADMIN')-1)
                @endphp
                @foreach($users as $user)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{ $user->name  }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                        <td>{{ $user->borrow_count }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>


@endsection
