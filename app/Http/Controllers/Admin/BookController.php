<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('admin.book.index', [
            'title' => 'Data Buku'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.book.create', [
            'title' => 'Tambah Buku',
            'authors' => Author::orderBy('name', 'asc')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required|min:20',
            'author_id' => 'required',
            'cover' => 'file|image',
            'qty' => 'required|numeric'
        ]);
        $cover = null;
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover')->store('assets/covers');
        }

        Book::create([
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => $request->author_id,
            'cover' => $cover,
            'qty' => $request->qty,
        ]);

        return redirect()->route('admin.book.index')->withSuccess('Data buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|Response|View
     */
    public function edit(Book $book)
    {
        return view('admin.book.edit', [
            'title' => 'Ubah data buku',
            'book' => $book,
            'authors' => Author::orderBy('name', 'asc')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, Book $book)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required|min:20',
            'author_id' => 'required',
            'cover' => 'file|image',
            'qty' => 'required|numeric'
        ]);
        $cover = $book->cover;
        if ($request->hasFile('cover')) {
            Storage::delete($book->cover);
            $cover = $request->file('cover')->store('assets/covers');
        }

        $book->update([
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => $request->author_id,
            'cover' => $cover,
            'qty' => $request->qty,
        ]);

        return redirect()->route('admin.book.index')->withSuccess('Data buku berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('admin.book.index')->withDanger('Data buku sudah dihapus');
    }
}
