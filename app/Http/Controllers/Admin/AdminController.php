<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index() {
        $users = User::all();
        $borrowedBooks =  User::with('books')->get();
        return view('admin.dashboard',compact('users','borrowedBooks'));
    }

    public function edit(Admin $admin) {
        return view ('admin.edit');
    }

}
