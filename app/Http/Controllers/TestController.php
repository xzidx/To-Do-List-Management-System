<?php

namespace App\Http\Controllers;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{


    public function index() {
        return view('tests.index');
    }

    public function store(Request $request)
    {
        Test::create([
            'name' => $request->name,
            'phone' => $request->phone,
        ]);

        return back()->with('success', 'Test submitted successfully!');

    }





    //
}
