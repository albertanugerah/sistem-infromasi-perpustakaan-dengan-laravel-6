<div class="col s12 m6">
    <div class="card horizontal hoverable">
        <div class="card-image">
            <img src="{{ $book->getCover() }}">
        </div>
        <div class="card-stacked">
            <div class="card-content">
                <h6><a href="{{ route('book.show' , $book) }}">{{ Str::limit($book->title,30) }}</a></h6>
                <p>{{ Str::limit($book->description ,100)}}</p>
            </div>
            <div class="card-action">
                <form action="{{ route('book.borrow' ,$book) }}" method="POST">
                    @csrf
                    <button type="submit" value=""
                            class="btn  teal accent-4 right waves-effect waves-light">
                        Pinjam Buku
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
