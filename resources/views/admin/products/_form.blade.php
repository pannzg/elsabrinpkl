<!-- resources/views/products/_form.blade.php -->

<!-- Modal Tambah / Edit Produk -->
<div class="modal fade" id="productModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ isset($product) ? 'Edit Produk' : 'Tambah Produk Baru' }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ isset($product) ? route('admin.products.update', $product->id) : route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($product))
                    @method('PUT')
                @endif

                <div class="modal-body">

                    <!-- Nama Produk -->
                    <div class="mb-3">
                        <label class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name', $product->name ?? '') }}" required>
                    </div>

                    <!-- Kategori -->
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select class="form-select" name="category_id" required>
                            <option value="">-- Pilih Kategori --</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}" {{ old('category_id', $product->category_id ?? '') == $cat->id ? 'selected' : '' }}>
                                    {{ $cat->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Harga dan Stok -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Harga (IDR)</label>
                            <input type="number" class="form-control" name="price" value="{{ old('price', $product->price ?? '') }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Stok</label>
                            <input type="number" class="form-control" name="stock" value="{{ old('stock', $product->stock ?? '') }}" required>
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="description" rows="3">{{ old('description', $product->description ?? '') }}</textarea>
                    </div>

                    <!-- Gambar Produk -->
                    <div class="mb-3">
                        <label class="form-label">Gambar Produk</label>
                        <input type="file" class="form-control" name="image">
                        @if(isset($product) && $product->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="100">
                            </div>
                        @endif
                    </div>

                    <!-- Status Aktif -->
                    <div class="mb-3 form-check">
                        <input type="hidden" name="is_active" value="0"> <!-- pastikan checkbox dikirim walau tidak dicentang -->
                        <input type="checkbox" class="form-check-input" name="is_active" id="is_active" value="1" {{ old('is_active', $product->is_active ?? true) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">Aktif</label>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-pink">{{ isset($product) ? 'Perbarui' : 'Simpan' }} Produk</button>
                </div>

            </form>
        </div>
    </div>
</div>
