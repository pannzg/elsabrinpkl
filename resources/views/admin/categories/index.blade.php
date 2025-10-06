@extends('admin.layouts.app')

@section('title', 'Daftar Kategori')

@section('content')
    <header class="bg-danger text-white text-center py-4 shadow mb-4">
        <h1>Kategori Produk</h1>
        <p>Kelola kategori produk untuk Butik Elsabrin</p>
    </header>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Produk</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kategori</li>
                </ol>
            </nav>
            <a href="{{ route('admin.categories.create') }}" class="btn btn-success">
                <i class="fas fa-plus"></i> Tambah Kategori
            </a>
        </div>

        <div class="card shadow-lg">
            <div class="card-header bg-danger text-white">
                <h5 class="mb-0"><i class="fas fa-list me-2"></i> Daftar Kategori</h5>
            </div>
            <div class="card-body p-0">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Jumlah Produk</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $index => $category)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description ?? '-' }}</td>
                                <td>
                                    @if($category->image)
                                        <img src="{{ asset('storage/'.$category->image) }}" alt="{{ $category->name }}" width="70" class="rounded">
                                    @else
                                        <i class="fas fa-image-slash text-muted"></i>
                                    @endif
                                </td>
                                <td>
                                    <span class="badge bg-primary">{{ $category->products_count ?? 0 }} Produk</span>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4">
                                    <i class="fas fa-folder-open fa-2x text-muted mb-2"></i>
                                    <p class="mb-0">Belum ada kategori produk</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
