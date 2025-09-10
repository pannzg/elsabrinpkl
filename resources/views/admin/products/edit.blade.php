@extends('layouts.dashboard')

@section('content')
<div class="dashboard-section active" id="products-section">
    <div class="main-content">
        <h3 class="mb-4"><i class="fas fa-edit me-2"></i>Edit Produk</h3>
        
        <div class="card">
            <div class="card-header">Form Edit Produk</div>
            <div class="card-body">
                <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <select class="form-select" name="category" required>
                                    <option value="">Pilih Kategori</option>
                                    <option value="Dress" {{ $product->category == 'Dress' ? 'selected' : '' }}>Dress</option>
                                    <option value="Blouse" {{ $product->category == 'Blouse' ? 'selected' : '' }}>Blouse</option>
                                    <option value="Skirt" {{ $product->category == 'Skirt' ? 'selected' : '' }}>Skirt</option>
                                    <option value="Celana" {{ $product->category == 'Celana' ? 'selected' : '' }}>Celana</option>
                                    <option value="Aksesoris" {{ $product->category == 'Aksesoris' ? 'selected' : '' }}>Aksesoris</option>
                                </select>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Harga (IDR)</label>
                                    <input type="number" class="form-control" name="price" value="{{ $product->price }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Stok</label>
                                    <input type="number" class="form-control" name="stock" value="{{ $product->stock }}" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="description" rows="4">{{ $product->description }}</textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Gambar Produk</label>
                                <input type="file" class="form-control" name="image">
                                @if($product->image)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="Gambar Produk" width="100" class="img-thumbnail">
                                        <small class="d-block mt-1">Gambar saat ini</small>
                                    </div>
                                @endif
                            </div>
                            
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="is_active" id="is_active" value="1" {{ $product->is_active ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">Aktif</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-end mt-3">
                        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary me-2">Batal</a>
                        <button type="submit" class="btn btn-pink">Perbarui Produk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection