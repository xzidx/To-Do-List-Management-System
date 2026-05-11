<?php

namespace App\Http\Controllers;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('test.index');
    }

    public function store(Request $request)
    {
    
        Test::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
        ]);

        return back()->with('success', 'Test submitted successfully!');
    }
}