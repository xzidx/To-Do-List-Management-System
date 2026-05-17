<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    
    //  search
   public function index(Request $request)
    {
        $search = $request->search;
        $status = $request->status;

        $tasks = Task::when($search, function ($query) use ($search) {

                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('assignees', 'like', '%' . $search . '%')
                    ->orWhere('status', 'like', '%' . $search . '%');

            })

            ->when($status, function ($query) use ($status) {

                $query->where('status', $status);

            })

            ->get();

        return view('tasks.index', compact('tasks'));
    }


    // Store task
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
        ]);

        return redirect()->route('tasks.index');
    }


    // Show single task
    public function show($id)
    {
        $task = Task::findOrFail($id);

        return view('tasks.show', compact('task'));
    }


    // Show edit form
    public function edit($id)
    {
        $task = Task::findOrFail($id);

        return view('tasks.edit', compact('task'));
    }


    // Update task
    public function update(Request $request, $id)
    {
        $task_name = $request->input('task_name');
        $participant_name = $request->input('participant_name');
        $task_date = $request->input('task_date');
        $duration = $request->input('duration');
        $status = $request->input('status');
        $description = $request->input('description');

        $task = Task::findOrFail($id);
        
        $task->update([
            'title' => $task_name,
            'assignees' => $participant_name,
            'date' => $task_date,
            'status' => $status,
            'duration' => $duration,
            'description' => $description,
        ]);

        return redirect()->route('tasks.index');
    }

    
    // Delete task
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