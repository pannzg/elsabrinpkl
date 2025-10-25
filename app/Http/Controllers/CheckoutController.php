<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    // ✅ Menampilkan halaman checkout
    public function create($id)
    {
        $product = Product::findOrFail($id);
        $sizes = ['S', 'M', 'L', 'XL', 'XXL', 'XXXL'];

        return view('user.checkout.create', compact('product', 'sizes'));
    }

    // ✅ Proses penyimpanan pesanan
    public function store(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $request->validate([
        'nama' => 'required|string|max:255',
        'no_telp' => 'required|string|max:30',
        'alamat' => 'required|string|max:2000',
        'size' => 'required|string',
        'quantity' => 'required|integer|min:1'
    ]);

    $size = $request->input('size');
    $qty = (int) $request->input('quantity');

    // ✅ CEK stock CUKUP ATAU TIDAK
    if ($product->stock < $qty) {
        return back()->withErrors([
            'error' => 'stock tidak mencukupi! stock tersedia: ' . $product->stock
        ]);
    }

    DB::beginTransaction();
    try {
        // ✅ BUAT ORDER
        $order = Order::create([
            'nama' => $request->nama,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'total' => $product->price * $qty,
            'status' => 'pending'
        ]);

        // ✅ BUAT ORDER ITEM
        OrderItem::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'product_name' => $product->name,
            'size' => $size,
            'quantity' => $qty,
            'price' => $product->price
        ]);

        // ✅ UPDATE stock PRODUK - INI YANG PENTING!
        $product->decrement('stock', $qty);
        // atau bisa juga: 
        // $product->stock -= $qty;
        // $product->save();

        DB::commit();

        return redirect()->route('order.success')->with('success', 'Order berhasil dibuat!');
        
    } catch (\Exception $e) {
        DB::rollBack();
        return back()->withInput()->withErrors([
            'error' => 'Terjadi kesalahan: ' . $e->getMessage()
        ]);
    }
}       

    // ✅ Halaman sukses setelah checkout
    public function success()
    {
        return view('user.checkout.success');
    }
}
