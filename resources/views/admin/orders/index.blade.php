@extends('admin.layouts.app')

@section('title', 'Daftar Pesanan')

@section('content')
<div class="container-fluid">
    <div class="page-header mb-4">
        <h1 class="page-title">
            <i class="fas fa-shopping-cart me-2"></i>Daftar Pesanan Customer
        </h1>
    </div>

    @if(session('success'))
        <div class="alert alert-success mb-4">
            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
        </div>
    @endif

    @if($orders->isEmpty())
        <div class="empty-state text-center py-5">
            <i class="fas fa-shopping-cart"></i>
            <p class="mt-3 mb-4">Belum ada pesanan yang diterima</p>
            <a href="{{ route('admin.products.index') }}" class="btn btn-primary">
                <i class="fas fa-store me-2"></i>Kelola Produk
            </a>
        </div>
    @else
        <div class="admin-card">
            <div class="card-body p-0">
                <div class="table-container">
                    <table class="table">
                        <thead class="table-header">
                            <tr>
                                <th>No</th>
                                <th>Customer</th>
                                <th>Produk</th>
                                <th>Ukuran</th>
                                <th>Qty</th>
                                <th>Total</th>
                                <th>Tanggal</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $counter = 1; @endphp
                            @foreach($orders as $order)
                                @foreach($order->items as $item)
                                    <tr>
                                        <td><strong>{{ $counter++ }}</strong></td>
                                        <td>
                                            <div class="customer-info">
                                                <div class="customer-name">{{ $order->nama }}</div>
                                                <small class="customer-phone">{{ $order->no_telp }}</small>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product-info">
                                                <span class="product-name">{{ $item->product_name }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="size-badge">{{ $item->size }}</span>
                                        </td>
                                        <td>
                                            <span class="quantity">{{ $item->quantity }}</span>
                                        </td>
                                        <td>
                                            <strong class="price">Rp {{ number_format($item->price * $item->quantity, 0, ',', '.') }}</strong>
                                        </td>
                                        <td>
                                            <div class="date-info">
                                                <div>{{ $order->created_at->format('d M Y') }}</div>
                                                <small class="text-muted">{{ $order->created_at->format('H:i') }}</small>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-info btn-sm" title="Detail Pesanan">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
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
    }

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

    /* Customer Info */
    .customer-info {
        display: flex;
        flex-direction: column;
    }

    .customer-name {
        font-weight: 600;
        color: #6A3A4D;
        font-size: 0.95rem;
    }

    .customer-phone {
        color: #8B7A8C;
        font-size: 0.8rem;
        margin-top: 2px;
    }

    /* Product Info */
    .product-info {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .product-name {
        font-weight: 500;
        color: #6A3A4D;
        font-size: 0.9rem;
    }

    /* Badges */
    .size-badge {
        background: linear-gradient(135deg, #FFB6C1, #FF69B4);
        color: white;
        padding: 4px 8px;
        border-radius: 8px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    /* Quantity */
    .quantity {
        background: rgba(255, 182, 193, 0.1);
        color: #FF69B4;
        padding: 4px 8px;
        border-radius: 6px;
        font-weight: 600;
        font-size: 0.9rem;
    }

    /* Price */
    .price {
        color: #FF1493;
        font-size: 0.95rem;
    }

    /* Date Info */
    .date-info {
        display: flex;
        flex-direction: column;
    }

    .date-info small {
        font-size: 0.75rem;
    }

    /* Buttons */
    .btn {
        padding: 6px 10px;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        border: 2px solid rgba(255, 255, 255, 0.2);
        cursor: pointer;
        font-size: 0.8rem;
        width: 32px;
        height: 32px;
    }

    .btn-info {
        background: linear-gradient(135deg, #74B9FF, #0984E3);
        color: white;
    }

    .btn-info:hover {
        background: linear-gradient(135deg, #0984E3, #074B8F);
        transform: translateY(-1px);
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 60px 20px;
    }

    .empty-state i {
        font-size: 80px;
        background: linear-gradient(135deg, #FFB6C1, #FF69B4);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 20px;
    }

    .empty-state p {
        color: #6A3A4D;
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 25px;
    }

    .btn-primary {
        background: linear-gradient(135deg, #FFB6C1, #FF69B4);
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

    .btn-primary:hover {
        background: linear-gradient(135deg, #FF69B4, #FF1493);
        transform: translateY(-1px);
        color: white;
    }

    /* Alerts */
    .alert {
        border-radius: 10px;
        border: none;
        padding: 15px 20px;
    }

    .alert-success {
        background: linear-gradient(135deg, #E8F8EF, #D1F2D6);
        color: #27AE60;
        border-left: 4px solid #4CD964;
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

        .btn {
            width: 28px;
            height: 28px;
            padding: 5px 8px;
        }

        .empty-state i {
            font-size: 60px;
        }
    }

    @media (max-width: 480px) {
        .page-title {
            font-size: 1.3rem;
        }

        .customer-name,
        .product-name {
            font-size: 0.85rem;
        }

        .size-badge,
        .quantity {
            font-size: 0.75rem;
            padding: 3px 6px;
        }
    }
</style>
@endsection