@extends('user.layouts.app')

@section('title', $category->name)

@section('content')

<!-- Import font Baloo 2 -->
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600;700&display=swap" rel="stylesheet">

<style>
    /* Gaya font lucu */
    .hero h1, 
    .hero p {
        font-family: 'Baloo 2', cursive;
        font-weight: 700; /* tebal */
        color: rgba(255, 255, 255, 1) !important;
    }

    /* Biar konsisten, kalau mau semua text pakai Baloo 2 */
    body {
        font-family: 'Baloo 2', cursive;
    }
</style>

<!-- Bagian header kategori -->
<div class="hero py-16 text-center rounded-b-3xl mb-8">
    <h1 class="text-4xl font-bold mb-2">{{ $category->name }}</h1>
    <p class="text-lg">{{ $category->description }}</p>
</div>

<div class="container">
    <div class="row">
        @forelse($category->activeProducts as $product)
            <div class="col-md-4 mb-4">
                <div class="card p-3 text-center shadow-sm">
                    @if($product->image)
                        <img src="{{ asset('storage/'.$product->image) }}" class="img-fluid mb-2 rounded">
                    @endif
                    <h5 class="fw-bold">{{ $product->name }}</h5>
                    <p class="mb-1">IDR {{ number_format($product->price,0,',','.') }}</p>
                    <p class="text-muted">Stok: {{ $product->stock }}</p>
                    <p class="mb-2">{{ $product->description }}</p>
                </div>
            </div>
        @empty
            <p>Belum ada produk di kategori ini.</p>
        @endforelse
    </div>
</div>
@endsection
