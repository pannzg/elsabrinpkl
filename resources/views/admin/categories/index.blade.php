@extends('admin.layouts.app')

@section('title', 'Daftar Kategori')

@section('content')
<div class="container-fluid py-4">

    <!-- Header -->
    <div class="text-center mb-4">
        <h1 class="fw-bold text-dark" style="font-size: 2rem;">Admin Butik Elsabrin</h1>
        <p class="text-muted" style="font-size: 1.1rem;">Kelola kategori produk untuk Butik Elsabrin</p>
    </div>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb bg-light p-3 rounded shadow-sm">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Produk</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kategori</li>
        </ol>
    </nav>

    <!-- Tombol Tambah -->
    <div class="d-flex justify-content-end mb-3 flex-wrap">
        <a href="{{ route('admin.categories.create') }}" class="btn text-white px-4 py-2 mb-2"
           style="background: linear-gradient(135deg, #FFB6C1, #FF69B4); border-radius: 12px; font-weight: 600;">
            <i class="fas fa-plus me-1"></i> Tambah Kategori
        </a>
    </div>

    <!-- Card Kategori -->
    <div class="card shadow border-0">
        <div class="card-header text-white"
             style="background: linear-gradient(135deg, #FFB6C1, #FF69B4); font-size: 1.1rem;">
            <h5 class="mb-0"><i class="fas fa-list me-2"></i> Daftar Kategori</h5>
        </div>

        <div class="card-body bg-white p-3">
            <div class="table-responsive">
                <table class="table align-middle table-hover">
                    <thead class="table-light">
                        <tr>
                            <th style="min-width: 50px;">#</th>
                            <th style="min-width: 120px;">Nama</th>
                            <th style="min-width: 200px;">Deskripsi</th>
                            <th style="min-width: 100px;">Gambar</th>
                            <th style="min-width: 130px;">Jumlah Produk</th>
                            <th style="min-width: 120px;" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $index => $category)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td><strong>{{ $category->name }}</strong></td>
                                <td>{{ $category->description ?? '-' }}</td>
                                <td>
                                    @if($category->image)
                                        <img src="{{ asset('storage/'.$category->image) }}" alt="{{ $category->name }}"
                                             class="rounded shadow-sm" style="width:75px; height:75px; object-fit:cover;">
                                    @else
                                        <i class="fas fa-image text-muted fa-2x"></i>
                                    @endif
                                </td>
                                <td>
                                    <span class="badge text-white px-3 py-2"
                                          style="background: linear-gradient(135deg,#FFB6C1,#FF69B4); font-size: 0.95rem;">
                                        {{ $category->products_count ?? 0 }} Produk
                                    </span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center flex-wrap gap-2">
                                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="d-inline"
                                              onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-5 text-muted">
                                    <i class="fas fa-folder-open fa-3x mb-3 d-block"></i>
                                    Belum ada kategori produk
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    body {
        background-color: #FFF8FB;
        font-family: 'Poppins', sans-serif;
    }

    .table th, .table td {
        vertical-align: middle;
        font-size: 1rem;
    }

    /* Hover lembut */
    .table-hover tbody tr:hover {
        background-color: rgba(255, 182, 193, 0.1);
        transition: 0.2s ease;
    }

    /* Tombol di HP */
    @media (max-width: 768px) {
        h1 {
            font-size: 1.6rem !important;
        }

        p {
            font-size: 1rem !important;
        }

        .btn {
            width: 100%;
            text-align: center;
            font-size: 1rem;
        }

        .table {
            font-size: 0.9rem;
        }

        .table img {
            width: 60px !important;
            height: 60px !important;
        }

        .card-header h5 {
            font-size: 1rem;
        }

        .breadcrumb {
            font-size: 0.9rem;
        }

        .d-flex.justify-content-end {
            justify-content: center !important;
        }
    }

    /* Untuk layar sangat kecil */
    @media (max-width: 480px) {
        .table th, .table td {
            padding: 8px 5px;
            font-size: 0.85rem;
        }

        img.rounded {
            width: 55px !important;
            height: 55px !important;
        }
    }
</style>
@endpush
