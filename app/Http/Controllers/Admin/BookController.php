<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        return view('admin.books.index');
    }

    public function create() {
        return view('admin.books.create');
    }

    public function store(Request $request) {}
    public function edit(Book $book) {
        return view('admin.books.edit');
    }
    public function update(Request $request, Book $book) {}
    public function destroy(Book $book) {}
}
