<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Book;
use App\BorrowHistory;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    public function authors()
    {
        $authors = Author::orderBy('name', 'asc');
        return datatables()->of($authors)
            ->addColumn('action', 'admin.author.action')
            ->addIndexColumn()
            ->toJson();
    }

    public function books()
    {

        $books = Book::orderBy('title', 'asc')->get();
        $books->load('author');
        return datatables()->of($books)
            ->addColumn('author', function (Book $book) {
                return $book->author->name;
            })
            ->editColumn('cover', function (Book $book) {
                return '<img class="img-thumbnail" src="' . $book->getCover() . '" >';
            })
            ->addColumn('action', 'admin.book.action')
            ->addIndexColumn()
            ->rawColumns(['cover', 'action'])
            ->toJson();
    }

    public function borrows()
    {
        $borrows = BorrowHistory::isBorrowed()->latest()->get();
        $borrows->load('user', 'book');
        return datatables()->of($borrows)
            ->addColumn('user', function (BorrowHistory $borrowHistory) {
                return $borrowHistory->user->name;
            })
            ->addColumn('book_title', function (BorrowHistory $borrowHistory) {
                return $borrowHistory->book->title;
            })
            ->addColumn('action', 'admin.borrow.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }
}
