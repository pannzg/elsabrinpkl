<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route untuk login
Route::get('/login', [AuthController::class, 'loginuser'])->name('login');
Route::post('/login', [AuthController::class, 'login']);