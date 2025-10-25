<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category->name }} | Admin Butik Elsabrin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {margin:0; padding:0; box-sizing:border-box; font-family:'Baloo 2', cursive, sans-serif;}
        
        body {
            background: 
                radial-gradient(circle at 20% 80%, rgba(255, 182, 193, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 105, 180, 0.05) 0%, transparent 50%),
                linear-gradient(135deg, #FFF0F5 0%, #FFF8FB 25%, #FFF0F5 50%, #FFE4EC 75%, #FFD6E7 100%);
            color: #6A3A4D;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }
        
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 10% 20%, rgba(255, 182, 193, 0.05) 0%, transparent 25%),
                radial-gradient(circle at 90% 80%, rgba(255, 105, 180, 0.04) 0%, transparent 25%);
            pointer-events: none;
            z-index: -1;
        }

        /* Header */
        .admin-header {
            position: relative;
            text-align: center;
            padding: 40px 20px;
            background: 
                radial-gradient(circle at 30% 70%, rgba(255, 182, 193, 0.2) 0%, transparent 50%),
                radial-gradient(circle at 70% 30%, rgba(255, 105, 180, 0.15) 0%, transparent 50%),
                linear-gradient(135deg, #FFF0F5 0%, #FFB6C1 30%, #FF69B4 70%, #FF1493 100%);
            border-radius: 0 0 30px 30px;
            color: white;
            overflow: hidden;
            box-shadow: 
                0 8px 20px rgba(255, 182, 193, 0.3);
            margin-bottom: 30px;
        }
        
        .admin-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                linear-gradient(45deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 50%);
            pointer-events: none;
        }
        
        .admin-header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            text-shadow: 
                2px 2px 4px rgba(0,0,0,0.1);
            font-weight: 700;
        }
        
        .admin-header p {
            font-size: 1.1rem;
            opacity: 0.95;
            font-weight: 500;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Category Header */
        .category-header {
            background: 
                radial-gradient(circle at 20% 80%, rgba(255, 182, 193, 0.1) 0%, transparent 50%),
                linear-gradient(145deg, #FFF8FB, #FFF0F5);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 
                0 8px 20px rgba(255, 182, 193, 0.2);
            border: 2px solid #FFB6C1;
            margin-bottom: 30px;
            text-align: center;
        }

        .category-title {
            font-size: 2.2rem;
            background: linear-gradient(135deg, #FF69B4, #FF1493);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .category-description {
            font-size: 1.2rem;
            color: #6A3A4D;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Product Grid */
        .product-grid {
            display: grid;
            gap: 25px;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }
        
        .product-card {
            background: 
                radial-gradient(circle at 20% 80%, rgba(255, 182, 193, 0.1) 0%, transparent 50%),
                linear-gradient(145deg, #FFF8FB, #FFF0F5);
            border-radius: 20px;
            padding: 25px;
            box-shadow: 
                0 8px 20px rgba(255, 182, 193, 0.2);
            border: 2px solid #FFB6C1;
            transition: all 0.3s ease;
            text-align: center;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 
                0 12px 25px rgba(255, 182, 193, 0.3);
        }

        .product-image {
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #FFB6C1, #FF69B4);
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-name {
            font-size: 1.3rem;
            background: linear-gradient(135deg, #FF69B4, #FF1493);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .product-price {
            font-size: 1.4rem;
            font-weight: 700;
            color: #FF69B4;
            margin-bottom: 8px;
        }

        .product-stock {
            font-size: 1rem;
            color: #6A3A4D;
            margin-bottom: 15px;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            grid-column: 1 / -1;
        }

        .empty-state i {
            font-size: 80px;
            background: linear-gradient(135deg, #FFB6C1, #FF69B4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 20px;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .empty-state p {
            color: #6A3A4D;
            font-size: 1.2rem;
            font-weight: 600;
        }

        /* Back Button */
        .btn-secondary {
            background: linear-gradient(135deg, #CCCCCC, #999999);
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.2);
            cursor: pointer;
            font-size: 1rem;
            box-shadow: 
                0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .btn-secondary:hover {
            background: linear-gradient(135deg, #AAAAAA, #888888);
            transform: translateY(-2px);
            color: white;
        }

        /* Footer */
        footer {
            background: 
                radial-gradient(circle at 20% 80%, rgba(255, 182, 193, 0.2) 0%, transparent 50%),
                linear-gradient(135deg, #FF69B4, #FF1493);
            color: white;
            text-align: center;
            padding: 30px 20px;
            margin-top: 50px;
            border-radius: 30px 30px 0 0;
            box-shadow: 
                0 -5px 15px rgba(255, 182, 193, 0.4);
            position: relative;
            overflow: hidden;
        }
        
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #FFB6C1, #FFFFFF, #FFB6C1);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .admin-header h1 {
                font-size: 2rem;
            }
            
            .container {
                padding: 15px;
            }

            .category-header {
                padding: 25px 20px;
            }

            .category-title {
                font-size: 1.8rem;
            }

            .product-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .admin-header {
                padding: 30px 15px;
            }
            
            .admin-header h1 {
                font-size: 1.8rem;
            }

            .category-title {
                font-size: 1.6rem;
            }

            .product-card {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<header class="admin-header">
    <h1>Admin Butik Elsabrin</h1>
    <p>Detail kategori produk</p>
</header>

<div class="container">
    <a href="{{ route('admin.categories.index') }}" class="btn-secondary">
        <i class="fas fa-arrow-left"></i> Kembali ke Daftar Kategori
    </a>

    <div class="category-header">
        <h1 class="category-title">{{ $category->name }}</h1>
        <p class="category-description">{{ $category->description ?? 'Tidak ada deskripsi' }}</p>
    </div>

    <div class="product-grid">
        @forelse($category->activeProducts as $product)
            <div class="product-card">
                <div class="product-image">
                    @if($product->image)
                        <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}">
                    @else
                        <i class="fas fa-shopping-bag" style="font-size: 60px; color: white;"></i>
                    @endif
                </div>
                <h3 class="product-name">{{ $product->name }}</h3>
                <div class="product-price">IDR {{ number_format($product->price,0,',','.') }}</div>
                <div class="product-stock">Stok: {{ $product->stock }}</div>
            </div>
        @empty
            <div class="empty-state">
                <i class="fas fa-box-open"></i>
                <p>Belum ada produk di kategori ini</p>
            </div>
        @endforelse
    </div>
</div>

<footer>
    &copy; 2025 Butik Elsabrin. Semua Hak Dilindungi. <br>
    <div style="margin-top:15px;">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-tiktok"></i>
        <i class="fab fa-whatsapp"></i>
    </div>
</footer>

</body>
</html>