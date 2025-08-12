<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Category;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),

        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'email','unique:users,email,'.$request->user()->id.'', 'max:255'],
            'avatar' => ['nullable','image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);

        $data = $request->only(['name', 'email']);
        if ($request->filled('remove_avatar') && $request->user()->avatar) {
            Storage::disk('public')->delete($request->user()->avatar);
            $data['avatar'] = null;
        }

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('uploads/users-avatar', 'public');
            $data['avatar'] = $path;

            if ($request->user()->avatar) {
                Storage::disk('public')->delete($request->user()->avatar);
            }
        }

        $request->user()->update($data);

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
