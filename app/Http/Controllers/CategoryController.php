<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{
    // ==========================
    // FRONTEND (TAMPILAN USER)
    // ==========================

    // Halaman semua kategori (user)
    public function index()
    {
        $categories = Category::withCount('products')->get(); 
        return view('user.categories.index', compact('categories'));
    }

    // Halaman produk per kategori (user)
    public function showUser($id)
    {
        $category = Category::with('products')->findOrFail($id);
        return view('user.categories.show', compact('category'));
    }

    // ==========================
    // ADMIN (CRUD)
    // ==========================

    // Halaman semua kategori (admin)
    public function adminIndex()
    {
        $categories = Category::withCount('products')->get();
        return view('admin.categories.index', compact('categories'));
    }

    // Halaman detail kategori (admin)
    public function showAdmin($id)
    {
        $category = Category::with('products')->findOrFail($id);
        return view('admin.categories.show', compact('category'));
    }

    // Form tambah kategori
    public function create()
    {
        return view('admin.categories.create');
    }

    // Simpan kategori baru
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->only(['name', 'description']);

        if ($request->hasFile('image')) {
            // Simpan file ke storage/app/public/categories
            $data['image'] = $request->file('image')->store('categories', 'public');
        }

        Category::create($data);

        return redirect()->route('admin.categories.index')->with('success', 'Kategori berhasil ditambahkan');
    }

    // Form edit kategori
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    // Update kategori
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $category = Category::findOrFail($id);
        $data = $request->only(['name', 'description']);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($category->image && Storage::exists('public/'.$category->image)) {
                Storage::delete('public/'.$category->image);
            }
            // Simpan file baru
            $data['image'] = $request->file('image')->store('categories', 'public');
        }

        $category->update($data);

        return redirect()->route('admin.categories.index')->with('success', 'Kategori berhasil diperbarui');
    }

    // Hapus kategori
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if ($category->image && Storage::exists('public/'.$category->image)) {
            Storage::delete('public/'.$category->image);
        }

        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Kategori berhasil dihapus');
    }
}
