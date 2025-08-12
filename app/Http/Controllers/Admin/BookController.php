<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index() {
        return view('admin.books.index', [
            'books' => Book::all()
        ]);
    }

    public function create() {
        return view('admin.books.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request) {
        $data = $request->validate([
                'title' => 'required',
                'author' => 'nullable',
                'description' => 'nullable',
                'image' => 'nullable',
                'quantity' => 'required|integer',
                'category_id' => 'required|exists:categories,id',
            ],
            [
                'category_id.exists' => 'The category field is required.',
            ]
        );

        if(request()->hasFile('image')) {
            $data['image'] = request()->file('image')->store('books');
        }

        Book::query()->create($data);
        return redirect()->route('admin.books');
    }
    public function edit(Book $book) {
        return view('admin.books.edit' , [
            'book' => $book
        ]);
    }
    public function update(Request $request, Book $book) {
        $data = $request->validate([
                'title' => 'required',
                'author' => 'nullable',
                'description' => 'nullable',
                'image' => 'nullable',
                'quantity' => 'required|integer',
                'category_id' => 'required|exists:categories,id',
            ],
            [
                'category_id.exists' => 'The category field is required.',
            ]
        );

        if(request()->hasFile('image')) {
            if ($book->image) {
                Storage::delete($book->image);
            }
            $data['image'] = request()->file('image')->store('books');
        }
        $book->update($data);
        return redirect()->route('admin.books');
    }
    public function destroy(Book $book) {
        if($book->image) {
            Storage::delete($book->image);
        }
        $book->delete();
        return redirect()->route('admin.books');
    }
}
