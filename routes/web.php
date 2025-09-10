<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;

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
Route::get('/loginadmin', [AdminLoginController::class, 'loginadmin'])->name('login');
Route::post('/loginadmin', [AdminLoginController::class, 'login']);
Route::post('/logoutadmin', [AdminLoginController::class, 'logout'])->name('admin.logout');

// ==============================
// Admin Routes - DIKELOMPOKKAN DENGAN BENAR
// ==============================
Route::prefix('admin')->name('admin.')->middleware(['auth:admin'])->group(function () {
    
    // Dashboard`
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Products Resource - ROUTE MANUAL YANG BENAR
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

    // Users Resource - ROUTE MANUAL JUGA UNTUK KONSISTENSI
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    
    // Settings
    Route::get('/settings', [DashboardController::class, 'settings'])->name('settings');
    Route::post('/settings', [DashboardController::class, 'updateSettings'])->name('settings.update');
    
    // Logout
    Route::post('/logout', [DashboardController::class, 'logout'])->name('logout');
});

// ==============================
// Public Home Page
// ==============================
Route::get('/', function () {
    return view('welcome');
});