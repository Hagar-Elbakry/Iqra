<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BorrowController extends Controller
{
    public function index(){
        $books = Auth::user()->books()->get();
        return view('dashboard', compact('books'));
    }
    public function borrow($book){
        $book = Book::findOrFail($book);
        if($book->quantity > 0 ){
            if($book->users()->where('users.id', Auth::user()->id)->where('is_returned', false)->exists()){
                return redirect()->route('dashboard')->with('error', 'You have already borrowed this book');
            }
            $book->users()->attach(Auth::user()->id, ['borrow_date' => now(), 'return_date' => now()->addDays(7), 'is_returned' => false]);
            $book->quantity--;
            $book->save();
            return redirect()->route('dashboard')->with('success', 'Book borrowed successfully');
        }
        return redirect()->route('dashboard')->with('error', 'Book is not available now we will restock it soon');
    }
    public function return($book)
    {
        $user = Auth::user();

        $borrow = $user->books()->where('book_id', $book)->first();

        if (!$borrow) {
            return redirect()->back()->with('error', 'You have not borrowed this book.');
        }

        $user->books()->updateExistingPivot($book, [
            'is_returned' => true,
        ]);

        $book = Book::findorFail($book);
        $book->quantity++;
        $book->save();

        return redirect()->back()->with('success', 'Book returned successfully.');
    }

}
