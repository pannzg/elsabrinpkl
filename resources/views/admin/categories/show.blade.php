@extends('admin.layouts.app')

@section('title', $category->name)

@section('content')
<div class="container">
    <h1 class="mb-4">{{ $category->name }}</h1>
    <p>{{ $category->description }}</p>

    <div class="row">
        @forelse($category->activeProducts as $product)
            <div class="col-md-4 mb-4">
                <div class="card p-3">
                    @if($product->image)
                        <img src="{{ asset('storage/'.$product->image) }}" class="img-fluid mb-2">
                    @endif
                    <h5>{{ $product->name }}</h5>
                    <p>IDR {{ number_format($product->price,0,',','.') }}</p>
                    <p>Stok: {{ $product->stock }}</p>
                </div>
            </div>
        @empty
            <p>Belum ada produk di kategori ini.</p>
        @endforelse
    </div>
</div>
@endsection
