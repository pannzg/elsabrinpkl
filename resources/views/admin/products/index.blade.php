@extends('admin.layouts.app')

@section('title', 'Kategori Produk')

@section('content')
<div class="container">
    <h1 class="mb-4">Kategori Produk</h1>
    <div class="row">
        @forelse($categories as $category)
            <div class="col-md-4 mb-4">
                <div class="card p-3" 
                     onclick="window.location='{{ route('admin.categories.show', $category->id) }}'">
                    
                    @if($category->image)
                        <img src="{{ asset('storage/'.$category->image) }}" 
                            alt="{{ $category->name }}" 
                            class="d-block mx-auto mb-2" 
                            style="width:200px; height:auto;">
                    @else
                        <img src="{{ asset('image/cSa88honMGv5hCqYFFT3uKCjh8qvTgYHa28IzzhU.png') }}"  
                             alt="Logo Default" 
                             class="d-block mx-auto mb-2" 
                             style="width:100%; height:auto; border-radius:10px;">
                    @endif

                    <h5>{{ $category->name }}</h5>
                    <p>{{ $category->description ?? 'Tidak ada deskripsi' }}</p>
                    <span class="badge bg-pink">{{ $category->products_count }} Produk</span>
                </div>
            </div>
        @empty
            <p>Belum ada kategori</p>
        @endforelse
    </div>
</div>
@endsection
