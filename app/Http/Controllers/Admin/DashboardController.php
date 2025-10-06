<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5); // bisa diubah sesuai kebutuhan
        $users = User::paginate(5);

        return view('admin.dashboard', compact('products', 'users'));
    }
}
