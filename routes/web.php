<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasagerController;

Route::get('/',[PasagerController::class,'index'])->name('index');

Route::post('pasager',[PasagerController::class,'store'])->name('pasager.store');
