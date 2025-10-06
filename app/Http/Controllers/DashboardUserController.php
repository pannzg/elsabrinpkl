<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class DashboardUserController extends Controller
{
    public function index()
    {
        // Ambil semua kategori beserta jumlah produknya
        $categories = Category::withCount('products')->get();

        // Produk terbaru hardcode untuk demo dari public/images
        $produkTerbaru = [
            [
                'nama' => 'Baju Lucu',
                'harga' => 120000,
                'gambar' => '/images/sample-product1.jpg'
            ],
            [
                'nama' => 'Gaun Cantik',
                'harga' => 200000,
                'gambar' => '/images/sample-product2.jpg'
            ],
            [
                'nama' => 'Kemeja Pria',
                'harga' => 150000,
                'gambar' => '/images/sample-product3.jpg'
            ],
            [
                'nama' => 'Topi Fashion',
                'harga' => 50000,
                'gambar' => '/images/sample-product4.jpg'
            ],
        ];

        // Kategori hardcode untuk hero section jika mau
        $kategori = [
            ['nama' => 'Pria', 'gambar' => '/images/kategori-pria.jpg'],
            ['nama' => 'Wanita', 'gambar' => '/images/kategori-wanita.jpg'],
            ['nama' => 'Anak', 'gambar' => '/images/kategori-anak.jpg'],
            ['nama' => 'Aksesoris', 'gambar' => '/images/kategori-aksesoris.jpg'],
        ];

        return view('user.dashboard', compact('categories', 'produkTerbaru', 'kategori'));
    }
    public function showCategory($id)
{
    $category = Category::with('products')->findOrFail($id);

    // Kalau mau demo, kita bisa ambil data produk dari category
    $produkDalamKategori = $category->products;

    return view('user.kategori-detail', compact('category', 'produkDalamKategori'));
}

}
