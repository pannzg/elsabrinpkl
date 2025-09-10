@extends('layouts.dashboard')

@section('content')
<div class="dashboard-section active" id="products-section">
    <div class="main-content">
        <h3 class="mb-4"><i class="fas fa-plus me-2"></i>Tambah Produk Baru</h3>
        
        <div class="card">
            <div class="card-header">Form Tambah Produk</div>
            <div class="card-body">
                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <select class="form-select" name="category" required>
                                    <option value="">Pilih Kategori</option>
                                    <option value="Dress">Dress</option>
                                    <option value="Blouse">Blouse</option>
                                    <option value="Skirt">Skirt</option>
                                    <option value="Celana">Celana</option>
                                    <option value="Aksesoris">Aksesoris</option>
                                </select>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Harga (IDR)</label>
                                    <input type="number" class="form-control" name="price" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Stok</label>
                                    <input type="number" class="form-control" name="stock" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="description" rows="4"></textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Gambar Produk</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="is_active" id="is_active" value="1" checked>
                                <label class="form-check-label" for="is_active">Aktif</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-end mt-3">
                        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary me-2">Batal</a>
                        <button type="submit" class="btn btn-pink">Simpan Produk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection