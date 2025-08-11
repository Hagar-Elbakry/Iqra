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
        return view('admin.dashboard');
    }

    public function edit(Admin $admin) {
        return view ('admin.edit');
    }

}
