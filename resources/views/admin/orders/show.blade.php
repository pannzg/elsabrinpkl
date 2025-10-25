@extends('admin.layouts.app')

@section('title', 'Detail Pesanan #' . $order->id)

@section('content')
<div class="container-fluid">
    <div class="page-header mb-4">
        <h1 class="page-title">
            <i class="fas fa-file-invoice me-2"></i>Detail Pesanan #{{ $order->id }}
        </h1>
    </div>

    <div class="row">
        <!-- Informasi Customer -->
        <div class="col-md-6 mb-4">
            <div class="admin-card">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-user me-2"></i>Informasi Customer</h5>
                </div>
                <div class="card-body">
                    <div class="info-group">
                        <label class="info-label">Nama Lengkap</label>
                        <p class="info-value">{{ $order->nama }}</p>
                    </div>
                    <div class="info-group">
                        <label class="info-label">No. Telepon</label>
                        <p class="info-value">{{ $order->no_telp }}</p>
                    </div>
                    <div class="info-group">
                        <label class="info-label">Alamat Pengiriman</label>
                        <p class="info-value">{{ $order->alamat }}</p>
                    </div>
                    <div class="info-group">
                        <label class="info-label">Tanggal Pesanan</label>
                        <p class="info-value">{{ $order->created_at->format('d M Y H:i') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ringkasan Pesanan -->
        <div class="col-md-6 mb-4">
            <div class="admin-card">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-clipboard-list me-2"></i>Ringkasan Pesanan</h5>
                </div>
                <div class="card-body">
                    <div class="info-group">
                        <label class="info-label">Total Item</label>
                        <p class="info-value">{{ $order->items->count() }} item</p>
                    </div>
                    <div class="info-group">
                        <label class="info-label">Status</label>
                        <span class="status-badge pending">Menunggu</span>
                    </div>
                    <div class="info-group">
                        <label class="info-label">Total Pembayaran</label>
                        <p class="info-value total-price">
                            Rp {{ number_format($order->items->sum(function($item) { return $item->price * $item->quantity; }), 0, ',', '.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Daftar Item Pesanan -->
    <div class="admin-card">
        <div class="card-header">
            <h5 class="mb-0"><i class="fas fa-boxes me-2"></i>Daftar Item Pesanan</h5>
        </div>
        <div class="card-body p-0">
            @if($order->items->isEmpty())
                <div class="empty-state text-center py-5">
                    <i class="fas fa-box-open"></i>
                    <p class="mt-3">Tidak ada item pada pesanan ini</p>
                </div>
            @else
                <div class="table-container">
                    <table class="table">
                        <thead class="table-header">
                            <tr>
                                <th>#</th>
                                <th>Gambar</th>
                                <th>Produk</th>
                                <th>Ukuran</th>
                                <th>Qty</th>
                                <th>Harga</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->items as $index => $item)
                                <tr>
                                    <td><strong>{{ $index + 1 }}</strong></td>
                                    <td>
                                        <div class="product-image">
                                            @if($item->product && $item->product->image)
                                                <img src="{{ asset('storage/' . $item->product->image) }}" 
                                                     alt="{{ $item->product->name }}" 
                                                     class="product-img">
                                            @else
                                                <div class="image-placeholder">
                                                    <i class="fas fa-image"></i>
                                                </div>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product-info">
                                            <strong class="product-name">{{ $item->product ? $item->product->name : $item->product_name }}</strong>
                                            @if($item->product && $item->product->description)
                                                <small class="product-desc">{{ Str::limit($item->product->description, 50) }}</small>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <span class="size-badge">{{ $item->size }}</span>
                                    </td>
                                    <td>
                                        <span class="quantity">{{ $item->quantity }}</span>
                                    </td>
                                    <td>
                                        <span class="price">Rp {{ $item->price ? number_format($item->price, 0, ',', '.') : '-' }}</span>
                                    </td>
                                    <td>
                                        <strong class="subtotal">Rp {{ $item->price ? number_format($item->price * $item->quantity, 0, ',', '.') : '-' }}</strong>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>

    <!-- Tombol Kembali -->
    <div class="text-center mt-4">
        <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar Pesanan
        </a>
    </div>
</div>

<style>
    .page-title {
        font-size: 1.8rem;
        background: linear-gradient(135deg, #FF69B4, #FF1493);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 700;
        margin-bottom: 0;
    }

    .admin-card {
        background: 
            radial-gradient(circle at 20% 80%, rgba(255, 182, 193, 0.1) 0%, transparent 50%),
            linear-gradient(145deg, #FFF8FB, #FFF0F5);
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(255, 182, 193, 0.2);
        border: 2px solid #FFB6C1;
        overflow: hidden;
        margin-bottom: 25px;
    }

    .card-header {
        background: linear-gradient(135deg, #FFB6C1, #FF69B4);
        color: white;
        padding: 15px 20px;
        border-bottom: 2px solid #FFB6C1;
    }

    .card-header h5 {
        margin: 0;
        font-size: 1.1rem;
        font-weight: 700;
        display: flex;
        align-items: center;
    }

    .card-body {
        padding: 20px;
    }

    /* Info Groups */
    .info-group {
        margin-bottom: 15px;
    }

    .info-label {
        font-weight: 600;
        color: #FF1493;
        font-size: 0.9rem;
        margin-bottom: 5px;
        display: block;
    }

    .info-value {
        color: #6A3A4D;
        font-size: 1rem;
        margin: 0;
    }

    .total-price {
        font-size: 1.2rem !important;
        font-weight: 700;
        color: #FF1493 !important;
    }

    /* Status Badge */
    .status-badge {
        padding: 6px 12px;
        border-radius: 12px;
        font-weight: 600;
        font-size: 0.8rem;
    }

    .status-badge.pending {
        background: linear-gradient(135deg, #FFD93D, #FF9F1C);
        color: #6A3A4D;
    }

    /* Table Styles */
    .table-header {
        background: linear-gradient(135deg, #FFB6C1, #FF69B4) !important;
    }

    .table-header th {
        color: white;
        font-weight: 700;
        padding: 15px 12px;
        border: none;
        text-align: left;
    }

    .table td {
        padding: 12px;
        border-bottom: 1px solid #FFE4EC;
        vertical-align: middle;
        background: white;
    }

    .table tbody tr:hover td {
        background: rgba(255, 182, 193, 0.05);
    }

    /* Product Image */
    .product-image {
        display: flex;
        justify-content: center;
    }

    .product-img {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 8px;
        border: 2px solid #FFB6C1;
    }

    .image-placeholder {
        width: 50px;
        height: 50px;
        border-radius: 8px;
        background: linear-gradient(135deg, #FFB6C1, #FF69B4);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    /* Product Info */
    .product-info {
        display: flex;
        flex-direction: column;
    }

    .product-name {
        color: #6A3A4D;
        font-size: 0.95rem;
        font-weight: 600;
    }

    .product-desc {
        color: #8B7A8C;
        font-size: 0.8rem;
        margin-top: 2px;
    }

    /* Badges and Labels */
    .size-badge {
        background: linear-gradient(135deg, #FFB6C1, #FF69B4);
        color: white;
        padding: 4px 8px;
        border-radius: 8px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    .quantity {
        background: rgba(255, 182, 193, 0.1);
        color: #FF69B4;
        padding: 4px 8px;
        border-radius: 6px;
        font-weight: 600;
        font-size: 0.9rem;
    }

    .price, .subtotal {
        color: #FF1493;
        font-weight: 600;
    }

    /* Buttons */
    .btn-secondary {
        background: linear-gradient(135deg, #CCCCCC, #999999);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
    }

    .btn-secondary:hover {
        background: linear-gradient(135deg, #AAAAAA, #888888);
        transform: translateY(-1px);
        color: white;
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 40px 20px;
    }

    .empty-state i {
        font-size: 60px;
        background: linear-gradient(135deg, #FFB6C1, #FF69B4);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .empty-state p {
        color: #6A3A4D;
        font-size: 1rem;
        font-weight: 600;
        margin-top: 15px;
    }

    /* Table Container */
    .table-container {
        overflow-x: auto;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .page-title {
            font-size: 1.5rem;
        }

        .table th,
        .table td {
            padding: 10px 8px;
            font-size: 0.9rem;
        }

        .product-img {
            width: 40px;
            height: 40px;
        }

        .image-placeholder {
            width: 40px;
            height: 40px;
        }
    }

    @media (max-width: 480px) {
        .page-title {
            font-size: 1.3rem;
        }

        .card-body {
            padding: 15px;
        }

        .info-value {
            font-size: 0.9rem;
        }
    }
</style>
@endsection