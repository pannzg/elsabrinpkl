<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'products_count' => Product::count(),
            'users_count' => User::count(),
            'orders_count' => 24, // Ini bisa diganti dengan model Order jika ada
            'revenue' => 'IDR 8.5jt' // Ini juga bisa dihitung dari model Order
        ];
        
        return view('admin.dashboard', compact('stats'));
    }
    
    public function settings()
    {
        $settings = Setting::first();
        return view('admin.settings', compact('settings'));
    }
    
    public function updateSettings(Request $request)
    {
        $settings = Setting::firstOrNew();
        $settings->website_name = $request->website_name;
        $settings->website_description = $request->website_description;
        $settings->admin_email = $request->admin_email;
        $settings->theme_color = $request->theme_color;
        $settings->notifications_enabled = $request->has('notifications_enabled');
        $settings->maintenance_mode = $request->has('maintenance_mode');
        
        // Handle logo upload
        if ($request->hasFile('website_logo')) {
            $logoPath = $request->file('website_logo')->store('settings', 'public');
            $settings->website_logo = $logoPath;
        }
        
        $settings->save();
        
        return redirect()->route('admin.settings')->with('success', 'Pengaturan berhasil diperbarui.');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/loginadmin');
    }
}