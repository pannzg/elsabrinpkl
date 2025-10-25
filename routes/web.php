<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;


// ==============================
// HOME & PUBLIC
// ==============================
// TEST ROUTE - PASTI WORK
Route::get('/test-success', function() {
    return "🔥 TEST SUCCESS PAGE - ROUTE WORKS! 🔥";
});

Route::get('/', [DashboardUserController::class, 'index'])->name('user.dashboard');

// kategori publik & detail produk user
Route::get('/kategori', [CategoryController::class, 'index'])->name('categories.public.index');
Route::get('/kategori/{id}', [DashboardUserController::class, 'showCategory'])->name('user.produk.kategori');
Route::get('/produk/{id}', [DashboardUserController::class, 'showProduct'])->name('user.produk.detail');

// Redirect ke login user saat auth gagal
Route::get('/login', function () {
    return redirect()->route('user.login');
})->name('login');


// ==============================
// USER AUTH (Guard: web)
// ==============================
// ==============================
// USER AUTH (Guard: web)
// ==============================
Route::prefix('user')->name('user.')->group(function () {
    // Login
    Route::get('/login', [AuthController::class, 'loginuser'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    // Register
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Category user
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/{id}', [CategoryController::class, 'showUser'])->name('categories.show');

    // CHECKOUT (User)
    Route::get('/checkout/{id}', [CheckoutController::class, 'create'])->name('checkout.create');
    Route::post('/checkout/{id}', [CheckoutController::class, 'store'])->name('checkout.store');
    Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success'); // ✅ FIXED
});

// TAMBAHKAN INI di luar group manapun:
Route::get('/order-success', [CheckoutController::class, 'success'])->name('order.success');


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

    // Categories
    Route::get('/categories', [CategoryController::class, 'adminIndex'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{id}', [CategoryController::class, 'showAdmin'])->name('categories.show');
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    // ==========================
    // ORDER LIST (Admin)
    // ==========================
    Route::get('/orders', [AdminOrderController::class, 'index'])->name('orders.index'); 
    Route::get('/orders/{id}', [AdminOrderController::class, 'show'])->name('orders.show');
});


// ==============================
// STATIC PAGES
// ==============================
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

// Route untuk form kontak
Route::post('/kontak/kirim', function (Request $request) {
    return back()->with('success', 'Pesan berhasil dikirim!');
})->name('user.kontak.kirim');
