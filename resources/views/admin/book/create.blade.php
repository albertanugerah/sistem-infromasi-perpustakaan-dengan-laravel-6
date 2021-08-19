@extends('admin.templates.default')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Buku</h3>
        </div>
        <div class="card-body">
            <form action="{{  route('admin.book.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group ">
                    <label for="title">Penulis</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                           placeholder="Masukan judul buku" value="{{ old('title') }}"
                           aria-describedby="titleFeedback"
                           required>
                    @error('title')
                    <span id="titleFeedback" class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group ">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control" name="description" id="description" cols="30"
                              placeholder="Tuliskan deskripsi buku"
                              rows="3">{{ old('description') }}</textarea>
                    @error('description')
                    <span id="descriptionFeedback" class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group ">
                    <label for="author_id">Penulis</label>
                    <select name="author_id" id="author_id" class="form-control select2">
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                    @error('author')
                    <span id="author_idFeedback" class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group ">
                    <label for="cover">Cover</label>
                    <input type="file" name="cover" id="cover" class="form-control @error('cover') is-invalid @enderror"
                           aria-describedby="coverFeedback">
                    @error('cover')
                    <span id="coverFeedback" class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group ">
                    <label for="qty">Jumlah</label>
                    <input type="text" name="qty" id="qty" class="form-control @error('qty') is-invalid @enderror"
                           placeholder="Masukan jumlah buku" value="{{ old('qty') }}"
                           aria-describedby="qtyFeedback"
                           required>
                    @error('qty')
                    <span id="qtyFeedback" class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit" value="Tambah" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
@push('select2css')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset ('assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $('.select2').select2({
            theme: 'bootstrap4'
        });

    </script>
@endpush
