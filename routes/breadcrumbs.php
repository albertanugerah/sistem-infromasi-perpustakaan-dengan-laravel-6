<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.

// Home
Breadcrumbs::for('admin.dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('admin.dashboard'));
});

//Author Index
Breadcrumbs::for('admin.author.index', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('admin.dashboard'));
    $trail->push('Penulis', route('admin.author.index'));
});

//Author Create
Breadcrumbs::for('admin.author.create', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('admin.dashboard'));
    $trail->push('Penulis', route('admin.author.index'));
    $trail->push('Tambah Penulis', route('admin.author.create'));
});

//Author edit
Breadcrumbs::for('admin.author.edit', function (BreadcrumbTrail $trail, $author) {
    $trail->push('Home', route('admin.dashboard'));
    $trail->push('Penulis', route('admin.author.index'));
    $trail->push('Edit Penulis', route('admin.author.create', $author));
});

//Book Index
Breadcrumbs::for('admin.book.index', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('admin.dashboard'));
    $trail->push('Buku', route('admin.book.index'));
});

//Book Create
Breadcrumbs::for('admin.book.create', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('admin.dashboard'));
    $trail->push('Buku', route('admin.book.index'));
    $trail->push('Tambah Buku', route('admin.book.create'));
});

//Book edit
Breadcrumbs::for('admin.book.edit', function (BreadcrumbTrail $trail, $book) {
    $trail->push('Home', route('admin.dashboard'));
    $trail->push('Buku', route('admin.book.index'));
    $trail->push('Edit Buku', route('admin.book.create', $book));
});
