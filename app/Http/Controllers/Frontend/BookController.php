<?php

namespace App\Http\Controllers\Frontend;

use App\Book;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(5);
        return view('frontend.book.index', [
            'title' => 'Home Perpusku',
            'books' => $books,
        ]);
    }

    public function show(Book $book)
    {
        return view('frontend.book.show', [
            'title' => $book->title,
            'book' => $book
        ]);
    }

    public function borrow(Book $book)
    {
        $user = auth()->user();
        if ($user->borrow()->where('books.id', $book->id)->count() > 0) {
            return redirect()->back()->with('toast', 'Kamu sudah meminjam buku dengan judul : ' . $book->title);
        }

        $user->borrow()->attach($book);
        $book->decrement('qty');
        return redirect()->back()->with('toast', 'Berhasil Meminjam Buku');
    }
}
