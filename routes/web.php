<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('/', [TaskController::class,'index'])->name('task.index');
Route::post('task',[TaskController::class,'store'])->name('task.store');
