<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class DashboardController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        $totalTasks = Task::count();

        $pendingTasks = Task::where('status', 'pending')->count();

        $completedTasks = Task::where('status', 'completed')->count();

        $inProgressTasks = Task::where('status', 'in-progress')->count();

        $recentTasks = Task::latest()->take(5)->get();

        $tasksByStatus = [
            'pending' => $pendingTasks,
            'completed' => $completedTasks,
            'in-progress' => $inProgressTasks,
        ];

        return view('dashboard.index', compact(
            'tasks',
            'totalTasks',
            'pendingTasks',
            'completedTasks',
            'inProgressTasks',
            'recentTasks',
            'tasksByStatus'
        ));
    }
}