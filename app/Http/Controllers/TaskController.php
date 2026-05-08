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

    public function create()
    {
        return view('tasks.create');
    }


    public function store(Request $request)
    {
        $task_name = $request->input('task_name');
        $participant_name = $request->input('participant_name');
        $task_date = $request->input('task_date');
        $duration = $request->input('duration');
        $status = $request->input('status');
        $description = $request->input('description');
        
        Task::create([
            'title' => $task_name,
            'assignees' => $participant_name,
            'date' => $task_date,
            'status' => $status,
            'duration' => $duration,
            'description' => $description,
            'user_id' => 1, 
        ]);

        return redirect()->route('tasks.index');
    }

    public function show($id)
    {
        
    }
    public function edit($id)
    {

        $tasks = Task::all(); 
        return view('tasks.edit', compact('tasks'));
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        
        if (!$task) {
            return redirect('/tasks');
        }

        $task->delete();

        return redirect('/tasks');
    }
}



