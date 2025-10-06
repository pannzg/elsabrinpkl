<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Admin - Elsabrin')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @php
        $themeColor = session('theme_color', '#ff6b81'); // default pink
        $siteName   = session('site_name', 'Elsabrin Admin');
    @endphp

    <style>
        body { background:#fff0f5; }
        .sidebar {
            width:250px;
            background: {{ $themeColor }};
            height:100vh;
            position:fixed;
            top:0; left:0;
            color:white;
            padding:20px;
        }
        .sidebar h2 {font-size:22px; margin-bottom:30px;}
        .sidebar a {display:block; color:white; padding:10px 15px; margin-bottom:10px; text-decoration:none; border-radius:8px;}
        .sidebar a:hover, .sidebar a.active {background:rgba(0,0,0,0.2);}
        .main {margin-left:270px; padding:20px;}
        .card {border-radius:15px; box-shadow:0 4px 15px rgba(0,0,0,.08);}
        .btn-pink {background:{{ $themeColor }}; color:white; border:none;}
        .btn-pink:hover {background:#ff4d6d;}
        .product-img {width:60px; height:60px; object-fit:cover; border-radius:8px;}
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>
            @if(session('logo'))
                <img src="{{ asset('storage/' . session('logo')) }}" alt="Logo" width="40" class="me-2">
            @else
                <i class="fas fa-store me-2"></i>
            @endif
            {{ $siteName }}
        </h2>

        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="fas fa-home me-2"></i> Dashboard
        </a>
        <a href="{{ route('admin.products.index') }}" class="{{ request()->is('admin/products*') ? 'active' : '' }}">
            <i class="fas fa-tshirt me-2"></i> Produk
        </a>
        <a href="{{ route('admin.users.index') }}" class="{{ request()->is('admin/users*') ? 'active' : '' }}">
            <i class="fas fa-users me-2"></i> Users
        </a>
        <a href="{{ route('admin.settings.index') }}" class="{{ request()->is('admin/settings*') ? 'active' : '' }}">
            <i class="fas fa-cog me-2"></i> Setting
        </a>
        <a href="{{ route('admin.categories.index') }}" class="{{ request()->is('admin/categories*') ? 'active' : '' }}">
            <i class="fas fa-tags me-2"></i> Categories
        </a>

        <form action="{{ route('admin.logout') }}" method="POST" class="mt-3">
            @csrf
            <button type="submit" class="btn btn-light w-100">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>

        <p class="mt-3 small">
            <i class="fas fa-envelope"></i> {{ session('admin_email', 'admin@mail.com') }}
        </p>
    </div>

    <!-- Main Content -->
    <div class="main">
        @yield('content')
    </div>
</body>
</html>
