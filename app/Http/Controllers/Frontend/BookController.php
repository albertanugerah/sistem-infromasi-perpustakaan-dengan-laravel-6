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
            'books' => $books,
        ]);
    }

    public function show(Book $book)
    {
        return view('frontend.book.show', [
            'book' => $book
        ]);
    }
}
