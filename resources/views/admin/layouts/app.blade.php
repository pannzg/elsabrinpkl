<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Admin - Elsabrin')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @php
        $themeColor = session('theme_color') ?? '#ff6b81';
        $siteName = session('site_name') ?? 'Elsabrin Admin';
        $logo = session('logo') ?? null;
        $adminEmail = session('admin_email') ?? 'admin@mail.com';
    @endphp

    <style>
        :root {
            --pink-primary: {{ $themeColor }};
            --pink-light: #ffd6e0;
            --pink-dark: #e05570;
            --pink-super-light: #fff5f8;
        }
        
        body { 
            background: var(--pink-super-light); 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            position: relative;
            overflow-x: hidden;
        }
        
        /* Background dengan logo butik ElSabrin */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'%3E%3Cpath fill='%23ff6b81' fill-opacity='0.08' d='M100,30 C70,30 50,50 50,80 C50,110 70,130 100,130 C130,130 150,110 150,80 C150,50 130,30 100,30 Z M85,70 L85,90 L75,90 L75,100 L85,100 L85,120 L95,120 L95,100 L105,100 L105,90 L95,90 L95,70 L85,70 Z M100,140 C85,140 75,150 75,165 C75,180 85,190 100,190 C115,190 125,180 125,165 C125,150 115,140 100,140 Z'/%3E%3C/svg%3E");
            background-repeat: repeat;
            background-size: 180px;
            z-index: -1;
        }
        
        /* SIDEBAR BARU YANG LEBIH MODERN */
        .sidebar {
            width: 280px;
            background: linear-gradient(180deg, var(--pink-primary) 0%, #ff8fa3 100%);
            height: 100vh;
            position: fixed;
            top: 0; 
            left: 0;
            color: white;
            padding: 0;
            box-shadow: 4px 0 25px rgba(255, 107, 129, 0.3);
            z-index: 1000;
            overflow-y: auto;
        }
        
        .sidebar-header {
            padding: 30px 25px 20px;
            background: rgba(0,0,0,0.1);
            border-bottom: 1px solid rgba(255,255,255,0.2);
            margin-bottom: 15px;
        }
        
        .sidebar-brand {
            display: flex;
            align-items: center;
            gap: 15px;
            text-decoration: none;
            color: white;
        }
        
        .sidebar-logo {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            background: white;
            padding: 8px;
        }
        
        .brand-text {
            display: flex;
            flex-direction: column;
        }
        
        .brand-name {
            font-size: 24px;
            font-weight: 700;
            margin: 0;
            line-height: 1.2;
            letter-spacing: 0.5px;
        }
        
        .brand-subtitle {
            font-size: 12px;
            opacity: 0.9;
            font-weight: 400;
            margin: 0;
            letter-spacing: 1px;
        }
        
        .sidebar-menu {
            padding: 0 15px;
        }
        
        .menu-section {
            margin-bottom: 5px;
        }
        
        .menu-title {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.7;
            padding: 15px 20px 8px;
            margin: 0;
            font-weight: 600;
        }
        
        .menu-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 14px 20px;
            color: white;
            text-decoration: none;
            border-radius: 12px;
            margin-bottom: 5px;
            transition: all 0.3s ease;
            position: relative;
            font-weight: 500;
        }
        
        .menu-item:hover {
            background: rgba(255,255,255,0.15);
            transform: translateX(8px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        .menu-item.active {
            background: rgba(255,255,255,0.2);
            transform: translateX(8px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        
        .menu-item.active::before {
            content: "";
            position: absolute;
            left: -15px;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 60%;
            background: white;
            border-radius: 0 4px 4px 0;
        }
        
        .menu-icon {
            width: 20px;
            text-align: center;
            font-size: 16px;
        }
        
        .menu-text {
            flex: 1;
            font-size: 15px;
        }
        
        .menu-badge {
            background: rgba(255,255,255,0.2);
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: 600;
        }
        
        .sidebar-footer {
            padding: 20px 25px;
            margin-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.2);
            background: rgba(0,0,0,0.1);
        }
        
        .admin-info {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 15px;
        }
        
        .admin-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }
        
        .admin-details {
            flex: 1;
        }
        
        .admin-name {
            font-weight: 600;
            font-size: 14px;
            margin: 0;
        }
        
        .admin-email {
            font-size: 12px;
            opacity: 0.8;
            margin: 0;
        }
        
        .logout-btn {
            background: rgba(255,255,255,0.15);
            border: 1px solid rgba(255,255,255,0.25);
            color: white;
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .logout-btn:hover {
            background: rgba(255,255,255,0.25);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        .main {
            margin-left: 280px; 
            padding: 30px;
            min-height: 100vh;
        }
        
        .card {
            border-radius: 18px; 
            box-shadow: 0 6px 20px rgba(0,0,0,.08);
            border: none;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,.12);
        }
        
        .card-header {
            background: linear-gradient(135deg, var(--pink-primary) 0%, var(--pink-dark) 100%);
            color: white;
            border: none;
            padding: 15px 20px;
            font-weight: 600;
        }
        
        .btn-pink {
            background: var(--pink-primary); 
            color: white; 
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-pink:hover {
            background: var(--pink-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(255,107,129,0.4);
        }
        
        .product-img {
            width: 60px; 
            height: 60px; 
            object-fit: cover; 
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .sidebar {
                width: 80px;
                padding: 0;
            }
            
            .sidebar-header {
                padding: 20px 10px;
            }
            
            .brand-text,
            .menu-text,
            .menu-badge,
            .admin-details,
            .menu-title {
                display: none;
            }
            
            .sidebar-brand {
                justify-content: center;
            }
            
            .menu-item {
                justify-content: center;
                padding: 15px;
            }
            
            .menu-item::before {
                display: none;
            }
            
            .main {
                margin-left: 80px;
            }
            
            .sidebar-footer {
                padding: 15px 10px;
            }
            
            .admin-info {
                justify-content: center;
            }
            
            .logout-btn span {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar Baru -->
    <div class="sidebar">
        <!-- Header Sidebar -->
        <div class="sidebar-header">
            <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">
                @if($logo && Storage::disk('public')->exists($logo))
                    <img src="{{ asset('storage/' . $logo) }}" alt="Logo" class="sidebar-logo">
                @else
                    <div class="sidebar-logo" style="display: flex; align-items: center; justify-content: center; background: white;">
                        <i class="fas fa-store" style="color: var(--pink-primary); font-size: 24px;"></i>
                    </div>
                @endif
                <div class="brand-text">
                    <div class="brand-name">ElSabrin</div>
                    <div class="brand-subtitle">BOUTIQUE</div>
                </div>
            </a>
        </div>

        <!-- Menu Navigasi -->
        <div class="sidebar-menu">
            <div class="menu-section">
                <div class="menu-title">Main Menu</div>
                <a href="{{ route('admin.dashboard') }}" class="menu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <div class="menu-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="menu-text">Dashboard</div>
                </a>
            </div>

            <div class="menu-section">
                <div class="menu-title">Management</div>
                <a href="{{ route('admin.products.index') }}" class="menu-item {{ request()->is('admin/products*') ? 'active' : '' }}">
                    <div class="menu-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <div class="menu-text">Produk</div>
                    <div class="menu-badge">6</div>
                </a>
                
                <a href="{{ route('admin.users.index') }}" class="menu-item {{ request()->is('admin/users*') ? 'active' : '' }}">
                    <div class="menu-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="menu-text">Users</div>
                    <div class="menu-badge">13</div>
                </a>
                
                <a href="{{ route('admin.categories.index') }}" class="menu-item {{ request()->is('admin/categories*') ? 'active' : '' }}">
                    <div class="menu-icon">
                        <i class="fas fa-tags"></i>
                    </div>
                    <div class="menu-text">Categories</div>
                </a>
                
                <a href="{{ route('admin.orders.index') }}" class="menu-item {{ request()->is('admin/orders*') ? 'active' : '' }}">
                    <div class="menu-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="menu-text">Orders</div>
                </a>
            </div>
        </div>

        <!-- Footer Sidebar -->
        <div class="sidebar-footer">
            <div class="admin-info">
                <div class="admin-avatar">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div class="admin-details">
                    <div class="admin-name">Administrator</div>
                    <div class="admin-email">{{ $adminEmail }}</div>
                </div>
            </div>
            
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </button>
            </form>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>