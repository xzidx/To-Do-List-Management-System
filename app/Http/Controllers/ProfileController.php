<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        // Just get the first user or specific user by ID
        $user = User::first(); // or User::find(1);

        return view('profile.index', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'username'  => 'required|string|max:255',
            'email'     => 'required|email',
            'avatar'    => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // Just find the user by ID directly
        $user = User::first(); // or User::find(1);

        $user->full_name = $request->full_name;
        $user->username  = $request->username;
        $user->email     = $request->email;

        if ($request->hasFile('avatar')) {
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }
            $path = $request->file('avatar')->store('images', 'public');
            $user->avatar = $path;
        }

        $user->save();

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully!');
    }
}