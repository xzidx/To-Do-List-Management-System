<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // search + filter
    public function index(Request $request)
    {
        $search = $request->search;
        $status = $request->status;

        $tasks = Task::when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', "%$search%")
                      ->orWhere('assignees', 'like', "%$search%")
                      ->orWhere('status', 'like', "%$search%");
                });
            })
            ->when($status, function ($query) use ($status) {
                $query->where('status', $status);
            })
            ->latest()
            ->get();

        return view('tasks.index', compact('tasks'));
    }

    // show create
    public function create()
    {
        return view('tasks.create');
    }

    // store tasks
    public function store(Request $request)
    {
        $request->validate([
            'task_name' => 'required',
            'participant_name' => 'required',
            'task_date' => 'required',
            'status' => 'required',
        ]);

        Task::create([
            'title' => $request->task_name,
            'assignees' => $request->participant_name,
            'date' => $request->task_date,
            'status' => $request->status,
            'duration' => $request->duration,
            'description' => $request->description,
        ]);

        return redirect()->route('tasks.index');
    }

    // show single task
    public function show($id)
    {
        $task = Task::findOrFail($id);

        return view('tasks.show', compact('task'));
    }

    // edit form
    public function edit($id)
    {
        $task = Task::findOrFail($id);

        return view('tasks.edit', compact('task'));
    }

    // update task
    public function update(Request $request, $id)
    {
        $request->validate([
            'task_name' => 'required',
            'participant_name' => 'required',
            'task_date' => 'required',
            'status' => 'required',
        ]);

        $task = Task::findOrFail($id);

        $task->update([
            'title' => $request->task_name,
            'assignees' => $request->participant_name,
            'date' => $request->task_date,
            'status' => $request->status,
            'duration' => $request->duration,
            'description' => $request->description,
        ]);

        return redirect()->route('tasks.index');
    }

    // Delete 
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index');
    }
};