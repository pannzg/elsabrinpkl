<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Tampilkan halaman setting (kirim $settings ke view)
     */
    public function index()
    {
        $settings = [
            'site_name'   => session('site_name', config('app.name', 'Elsabrin Admin')),
            'admin_email' => session('admin_email', config('mail.from.address', 'admin@mail.com')),
            'theme_color' => session('theme_color', '#ff6b81'),
            'logo'        => session('logo', null),
        ];

        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Simpan perubahan setting (session + upload logo ke storage/public)
     */
    public function update(Request $request)
    {
        $request->validate([
            'site_name'   => 'required|string|max:255',
            'admin_email' => 'required|email',
            'theme_color' => 'required|string',
            'logo'        => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        // Simpan ke session
        session([
            'site_name'   => $request->site_name,
            'admin_email' => $request->admin_email,
            'theme_color' => $request->theme_color,
        ]);

        // Upload logo dan simpan path di session
        if ($request->hasFile('logo')) {
            // optional: hapus logo lama kalau ada
            if (session('logo')) {
                Storage::disk('public')->delete(session('logo'));
            }

            $path = $request->file('logo')->store('logos', 'public');
            session(['logo' => $path]);
        }

        return redirect()->back()->with('success', 'Pengaturan berhasil disimpan!');
    }

    /**
     * Reset setting ke default (opsional)
     */
    public function reset()
    {
        session()->forget(['site_name', 'admin_email', 'theme_color', 'logo']);
        return redirect()->back()->with('success', 'Pengaturan berhasil direset ke default!');
    }
}
