@extends('admin.templates.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Laporan Buku Terlaris</h3>
        </div>
        <div class="card-body">

            <table id="dataTable" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Jumlah Buku</th>
                    <th>Total dipinjam</th>
                    <th>Penulis</th>
                    <th>Sampul</th>
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
                @foreach($books as $book)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $book->title  }}</td>
                        <td>{{ $book->description }}</td>
                        <td>{{ $book->qty }}</td>
                        <td>{{ $book->borrowed_count }}</td>
                        <td>{{ $book->author->name}}</td>
                        <td>
                            <img class="img-thumbnail" src="{{ $book->getCover()}}" alt="{{ $book->title }}">
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $books->links() }}
        </div>
    </div>


@endsection
