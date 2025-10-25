@extends('admin.layouts.app')

@section('title', 'Edit Produk')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Produk</h1>

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Nama Produk --}}
        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" 
                   name="name" 
                   id="name" 
                   class="form-control @error('name') is-invalid @enderror" 
                   value="{{ old('name', $product->name) }}" 
                   required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Harga --}}
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" 
                   name="price" 
                   id="price" 
                   class="form-control @error('price') is-invalid @enderror" 
                   value="{{ old('price', $product->price) }}" 
                   required>
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Stok --}}
        <div class="mb-3">
            <label for="stock" class="form-label">Stok Total</label>
            <input type="number" 
                   name="stock" 
                   id="stock" 
                   class="form-control @error('stock') is-invalid @enderror" 
                   value="{{ old('stock', $product->stock) }}" 
                   required>
            @error('stock')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Kategori --}}
        <div class="mb-3">
            <label for="category_id" class="form-label">Kategori</label>
            <select name="category_id" id="category_id" 
                    class="form-control @error('category_id') is-invalid @enderror" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" 
                        {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Deskripsi --}}
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea 
                name="description" 
                id="description" 
                rows="4"
                class="form-control @error('description') is-invalid @enderror"
            >{{ old('description', $product->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Stok per Ukuran --}}
        <h5 class="mt-4">Stok per Ukuran</h5>
        @php
            $sizes = ['S', 'M', 'L', 'XL', 'XXL', 'XXXL'];
        @endphp
        <div class="row">
            @foreach($sizes as $size)
                <div class="col-md-2 mb-3">
                    <label>{{ $size }}</label>
                    <input type="number" name="sizes[{{ $size }}]" 
                           value="{{ old('sizes.' . $size) ?? ($product->sizes[$size] ?? 0) }}" 
                           class="form-control">
                </div>
            @endforeach
        </div>

        {{-- Upload Gambar --}}
        <div class="mb-3">
            <label for="image" class="form-label">Gambar Produk</label>
            <input type="file" 
                   name="image" 
                   id="image" 
                   class="form-control @error('image') is-invalid @enderror">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            @if ($product->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $product->image) }}" 
                         alt="{{ $product->name }}" 
                         class="img-thumbnail" width="150">
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
