<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use App\Models\User;
use App\Models\Admin;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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


    public function ProfileIndex(){
        $admin = Auth::guard('admin')->user();
        return view('admin.profile.index',compact('admin'));
    }
    public function ProfileUpdate(Request $request){
        $admin = Auth::guard('admin')->user();
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'email','unique:users,email,'.$admin->id.'', 'max:255'],
            'avatar' => ['nullable','image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);
        $data = $request->only(['name', 'email']);
        if ($request->filled('remove_avatar') && $admin->avatar) {
            Storage::disk('public')->delete($admin->avatar);
            $data['avatar'] = null;
        }

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('uploads/admins-avatar', 'public');
            $data['avatar'] = $path;

            if ($admin->avatar) {
                Storage::disk('public')->delete($admin->avatar);
            }
        }
        $admin->update($data);

        return redirect()->route('admin.profile')->with('status', 'profile-updated');
    }
    public function PasswordUpdate(Request $request){
        $admin = Auth::guard('admin')->user();
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);
        if(!Hash::check($request->current_password, $admin->password)){
            return redirect()->route('admin.profile')->with('status', 'Current password is incorrect');
        }
        $admin->update([
            'password' => bcrypt($request->password)
        ]);
        return redirect()->route('admin.profile')->with('status', 'password-updated');
    }

}
