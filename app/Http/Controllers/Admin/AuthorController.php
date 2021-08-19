<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('admin.author.index', [
            'title' => 'Data Penulis'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.author.create', [
            'title' => 'Tambah Penulis'
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
            'name' => 'required|min:3',
        ]);
        Author::create($request->only('name'));
        return redirect()->route('admin.author.index')
            ->with('success', 'Data penulis berhasil disimpan');
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
     * @return Response
     */
    public function edit(Author $author)
    {
        return view('admin.author.edit', [
            'author' => $author,
            'title' => 'Edit Penulis'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function update(Request $request, Author $author)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
        ]);
        $author->update($request->only('name'));
        return redirect()->route('admin.author.index')
            ->with('info', 'Data penulis berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('admin.author.index')
            ->with('danger', 'Data penulis berhasil dihapus');
    }

    public function showData()
    {

    }
}
