<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ImagineController;
use App\Http\Controllers\ProductController;

Route::get('/',[PageController::class,'index'])->name('index');
Route::resource('product',ProductController::class);
Route::resource('imagine',ImagineController::class);
