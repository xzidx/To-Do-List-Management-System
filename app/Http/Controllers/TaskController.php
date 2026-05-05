<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class TaskController extends Controller
{
    


    public function index()
    {
        $tasks = Task::all(); 
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $title= $request->input('title');
        $status= $request->input('status');
        $date= $request->input('date');
        $user_id= $request->input('user_id');
        
            Task::create([
            'title' => $title,
            'status' => $status,
            'date' => $date,
            'user_id' => $user_id,
        ]);

        
        return redirect()->route('tasks.index');

    }
}



