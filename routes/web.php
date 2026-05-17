<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

//  use for submit form connect data to UI
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::patch('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');

//  create a task
Route::get('tasks/create', [TaskController::class, 'create'])->name('tasks.create');


// can view data stock in request 
Route::get('tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');

// function form to edit 
Route::get('tasks/edit/{id}', [TaskController::class, 'edit'])->name('tasks.edit');



// function to delete 
Route::delete('tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');




// Dashboard route

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('dashboard', [DashboardController::class, 'index']);





// notification route 

Route::get('/notifications', function () {
    return view('notifications.index');
});

Route::get('notifications', [NotificationController::class, 'index']);


Route::get('/test', [TestController::class, 'index']);
Route::post('/test', [TestController::class, 'store']);
