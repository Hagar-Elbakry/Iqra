<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use App\Models\User;
use App\Models\Admin;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index() {
        $users = User::all();
        $borrowedBooks =  User::with('books')->get();
        $stdCount = User::count();
        $bookCount = Book::count();
        $borrowCount = DB::table('book_user')->count();
        return view('admin.dashboard',compact('users','borrowedBooks' , 'stdCount', 'bookCount', 'borrowCount'));
    }

    public function edit(Admin $admin) {
        return view ('admin.edit');
    }

}
