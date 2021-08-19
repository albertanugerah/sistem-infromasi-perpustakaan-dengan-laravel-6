<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function topBook()
    {
        $books = Book::withCount('borrowed')
            ->orderBy('borrowed_count', 'desc')
            ->paginate(5);
        return view('admin.report.top-book', [
            'books' => $books
        ]);

    }
}
