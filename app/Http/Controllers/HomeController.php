<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() {
        $banner = Book::whereIn('title', [
                            'Life of the wild',
                            'Birds Gonna be happy'])->get();
        $books = Book::query()->inRandomOrder()->limit(4)->get();
        $Is_home = true;
        return view('home',compact('banner','books','Is_home'));
    }
    public function index(){
        $books = Book::simplePaginate(8);
        return view('books.index',compact('books'));
    }
    public function show($book){
        $book = Book::findOrFail($book);
        return view('books.show',compact('book'));
    }
    public function dashboard(){
        return view('dashboard');
    }
}
