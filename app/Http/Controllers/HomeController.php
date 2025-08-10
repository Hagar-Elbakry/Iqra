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
        $books = Book::whereIn('id',[3,6,5,10])->get();
        $categories = Category::with('books')->get();
        $Is_home = true;
        return view('home',compact('banner','books','Is_home','categories'));
    }
    public function index(){
        $books = Book::simplePaginate(8);
        $categories = Category::with('books')->get();
        return view('books.index',compact('books','categories'));
    }
    public function show($book){
        $book = Book::findOrFail($book);
        $categories = Category::with('books')->get();
        return view('books.show',compact('book','categories'));
    }
}
