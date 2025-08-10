<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function create() {
        return view ('admin.login');
    }

    public function store() {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($attributes)) {
            request()->session()->regenerate();

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function dashboard() {
        return view('admin.dashboard');
    }
}
