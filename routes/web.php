<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\DashboardUserController;

// ==============================
// HOME & PUBLIC
// ==============================
Route::get('/', [DashboardUserController::class, 'index'])->name('user.dashboard');
Route::get('/kategori/{id}', [DashboardUserController::class, 'showCategory'])->name('user.produk.kategori');

// Redirect ke login user saat auth gagal
Route::get('/login', function () {
    return redirect()->route('user.login');
})->name('login');


// ==============================
// USER AUTH (Guard: web)
// ==============================
Route::prefix('user')->name('user.')->group(function () {
    // Form login user
    Route::get('/login', [AuthController::class, 'loginuser'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    // Register user
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');

    // Logout user
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Kategori untuk user
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/{id}', [CategoryController::class, 'showUser'])->name('categories.show');
});

// ==============================
// ADMIN AUTH (Guard: admin)
// ==============================
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'loginadmin'])->name('login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('login.post');
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');
});

// ==============================
// ADMIN PANEL (Guard: admin)
// ==============================
Route::prefix('admin')->name('admin.')->middleware(['auth:admin'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Products
    Route::resource('products', ProductController::class);
    Route::get('/products-dashboard', [ProductController::class, 'index'])->name('products.dashboard');

    // Users
    Route::resource('users', UserController::class);

    // Settings
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingController::class, 'update'])->name('settings.update');

    // Categories (CRUD Admin)
    Route::get('/categories', [CategoryController::class, 'adminIndex'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{id}', [CategoryController::class, 'showAdmin'])->name('categories.show');
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

// ==============================
// KATEGORI (Public tanpa login)
// ==============================
Route::get('/kategori', [CategoryController::class, 'index'])->name('categories.public.index');
Route::get('/kategori/{id}', [CategoryController::class, 'showPublic'])->name('categories.public.show');

// routes/web.php
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

// Route untuk kirim form
Route::post('/kontak/kirim', function (Request $request) {
    // Bisa tambahkan validasi & simpan / kirim email di sini
    // Contoh dummy: tampilkan pesan sukses
    return back()->with('success', 'Pesan berhasil dikirim!');
})->name('user.kontak.kirim');
