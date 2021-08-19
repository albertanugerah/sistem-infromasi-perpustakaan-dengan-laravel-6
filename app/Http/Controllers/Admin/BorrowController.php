<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BorrowController extends Controller
{
    public function index()
    {
        return view('admin.borrow.index');
    }
}
