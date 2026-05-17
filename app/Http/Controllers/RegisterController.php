<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // Show registration page
    public function index()
    {
        return view('register.index'); 
    }
    
    public function authenticate(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        if ($name === 'mony' && $email === 'khemmonydev@gmail.com' && $password === '123456') {
            return redirect('/welcome');
        }

        return back()->with('error', 'Invalid registration details!');
    }

}