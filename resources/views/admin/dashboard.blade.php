@extends('admin.layouts.app')

@section('title', 'Dashboard Admin - Elsabrin')

@section('content')
    <h1 class="mb-4">Dashboard Admin</h1>

    <!-- Statistik -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card p-3 text-center">
                <h5>Total Produk</h5>
                <h2>{{ $products->total() }}</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 text-center">
                <h5>Total User</h5>
                <h2>{{ $users->total() }}</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 text-center">
                <h5>Produk Aktif</h5>
                <h2>{{ $products->where('is_active', true)->count() }}</h2>
            </div>
        </div>
    </div>

    <!-- Produk -->
    <div class="card p-4 mb-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3><i class="fas fa-tshirt me-2"></i> Manajemen Produk</h3>
            <a href="{{ route('admin.products.create') }}" class="btn btn-pink">
                <i class="fas fa-plus me-1"></i> Tambah Produk
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Foto</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $i => $p)
                        <tr>
                            <td>{{ $products->firstItem() + $i }}</td>
                            <td>
                                @if($p->image)
                                    <img src="{{ asset('storage/'.$p->image) }}" class="product-img">
                                @else
                                    <div style="width:60px;height:60px;background:#f7f7f7;
                                    display:flex;align-items:center;justify-content:center;
                                    border-radius:8px;color:#aaa">-</div>
                                @endif
                            </td>
                            <td>{{ $p->name }}</td>
                            <td>{{ $p->category->name ?? '-' }}</td>
                            <td>IDR {{ number_format($p->price,0,',','.') }}</td>
                            <td>{{ $p->stock }}</td>
                            <td>
                                @if($p->is_active)
                                    <span class="badge bg-success">Aktif</span>
                                @else
                                    <span class="badge bg-danger">Nonaktif</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.products.edit', $p->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.products.destroy',$p->id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus produk ini?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $products->links() }}
    </div>

    <!-- Users -->
    <div class="card p-4 mb-4">
        <h3><i class="fas fa-users me-2"></i> Manajemen User</h3>

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $i => $u)
                        <tr>
                            <td>{{ $users->firstItem() + $i }}</td>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ ucfirst($u->role ?? 'user') }}</td>
                            <td>
                                <a href="{{ route('admin.users.edit',$u->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.users.destroy',$u->id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus user ini?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $users->links() }}
    </div>
@endsection
