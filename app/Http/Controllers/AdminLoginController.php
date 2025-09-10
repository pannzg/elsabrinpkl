<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    // Tampilkan form login admin
    public function loginadmin()
    {
        return view('auth.adminlogin');
    }

    // Proses login admin
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials, $request->remember)) {
        $request->session()->regenerate();
        // selalu ke dashboard
        return redirect()->route('admin.dashboard');
    }

    return back()->withErrors([
        'username' => 'Username atau password salah.',
    ]);
}

    // Logout admin
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/loginadmin');
    }
}
