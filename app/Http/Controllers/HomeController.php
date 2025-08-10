<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() {
        $banner = Book::whereIn('title', [
                            'Life of the wild',
                            'Birds Gonna be happy'])->get();
        return view('home',compact('banner'));
    }
    public function show($book){
        $book = Book::findOrFail($book);
        return view('books.show',compact('book'));
    }
}
