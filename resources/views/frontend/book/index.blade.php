@extends('frontend.templates.default')
@section('content')
    <h2>Koleksi Buku</h2>
    <blockquote><p class="flow-text"> Koleksi buku yang bisa kamu baca dan pinjam</p></blockquote>
    <div class="row">
        @foreach($books as $book)
            <div class="col s12 m6">
                <div class="card horizontal hoverable">
                    <div class="card-image">
                        <img src="{{ $book->getCover() }}">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h5>{{ Str::limit($book->title,30) }}</h5>
                            <p>{{ Str::limit($book->description ,100)}}</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{--pagination--}}
    {{ $books->links('vendor.pagination.materialize') }}
@endsection
