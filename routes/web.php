<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;  // ← make sure this is here

Route::get('/', function () {
    return view('welcome');
});

// ─── Profile ───────────────────────────────────────────
Route::get('/profile',  [ProfileController::class, 'index'])->name('profile.index');
Route::put('/profile',  [ProfileController::class, 'update'])->name('profile.update');

// ─── Tasks ─────────────────────────────────────────────
Route::get('/tasks',            [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create',     [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks',           [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/{id}',       [TaskController::class, 'show'])->name('tasks.show');
Route::get('/tasks/{id}/edit',  [TaskController::class, 'edit'])->name('tasks.edit');
Route::delete('/tasks/{id}',    [TaskController::class, 'destroy'])->name('tasks.destroy');

// ─── Dashboard ─────────────────────────────────────────
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// ─── Notifications ─────────────────────────────────────
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');