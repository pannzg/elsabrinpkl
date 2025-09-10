<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;

// ==============================
// Public (bisa diakses semua orang)
// ==============================
Route::get('/kategori', [CategoryController::class, 'index'])->name('categories.index');

// ==============================
// Login User
// ==============================
Route::get('/loginuser', [AuthController::class, 'loginuser'])->name('login.user');
Route::post('/loginuser', [AuthController::class, 'login']);
Route::post('/logoutuser', [AuthController::class, 'logout'])->name('logout.user');

// ==============================
// Login Admin
// ==============================
Route::get('/loginadmin', [AdminLoginController::class, 'loginadmin'])->name('login'); // penting: kasih nama 'login'
Route::post('/loginadmin', [AdminLoginController::class, 'login']);
Route::post('/logoutadmin', [AdminLoginController::class, 'logout'])->name('admin.logout');

    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    // CRUD Produk
    Route::resource('products', ProductController::class);

    // CRUD User
    Route::resource('users', UserController::class);

    // CRUD Setting
    Route::resource('settings', SettingController::class);