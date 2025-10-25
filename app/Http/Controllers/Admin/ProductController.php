<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductSize;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function detail($id)
    {
        $produk = Product::findOrFail($id);
        return view('user.produk.detail', compact('produk'));
    }
    
    public function index()
    {
        $products = Product::with('category')->paginate(10);
        $categories = Category::all();
        return view('admin.products.index', compact('products', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|max:2048',
            'is_active' => 'sometimes|boolean',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        $data['is_active'] = $request->has('is_active') ? (bool)$request->is_active : true;

        // ✅ Simpan produk utama
        $product = Product::create($data);

        // ✅ Tambahkan ukuran default S–XXXL dengan stok 0
        $sizes = ['S', 'M', 'L', 'XL', 'XXL', 'XXXL'];
        foreach ($sizes as $size) {
            ProductSize::create([
                'product_id' => $product->id,
                'size' => $size,
                'stock' => 0,
            ]);
        }

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambahkan beserta ukuran default.');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $sizes = $product->sizes; // ✅ ambil data stok per ukuran

        return view('admin.products.edit', compact('product', 'categories', 'sizes'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|max:2048',
            'is_active' => 'sometimes|boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image) Storage::disk('public')->delete($product->image);
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        $data['is_active'] = $request->has('is_active') ? (bool)$request->is_active : $product->is_active;

        // ✅ Update produk utama
        $product->update($data);

        // ✅ Update stok ukuran kalau dikirim dari form
        if ($request->has('sizes')) {
            foreach ($request->sizes as $size => $stock) {
                $productSize = $product->sizes()->where('size', $size)->first();
                if ($productSize) {
                    $productSize->update(['stock' => (int)$stock]);
                }
            }
        }

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil diupdate.');
    }

    public function destroy(Product $product)
    {
        if ($product->image) Storage::disk('public')->delete($product->image);
        $product->delete();
        return back()->with('success', 'Produk dihapus.');
    }
}
