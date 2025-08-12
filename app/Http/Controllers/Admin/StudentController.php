<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __invoke(User $user) {
        return view('admin.students.show',compact('user'));
    }

    public function search(Request $request) {
        $id = $request->id;
        $request->validate([
            'id' => 'required|integer'
        ]);
        $user = User::findOrFail($id);
        return redirect()->route('admin.student',$user->id);
    }
}
