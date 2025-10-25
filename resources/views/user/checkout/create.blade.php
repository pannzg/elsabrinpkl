<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Butik Elsabrin</title>
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

        /* Music Player */
        .music-player {
            position: fixed;
            top: 20px;
            right: 20px;
            background: linear-gradient(135deg, #FFB6C1, #FF69B4);
            color: white;
            padding: 12px 20px;
            border-radius: 50px;
            box-shadow: 
                0 4px 12px rgba(255, 182, 193, 0.4);
            z-index: 1000;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.2);
            font-weight: 600;
        }
        
        .music-player:hover {
            transform: scale(1.05);
            box-shadow: 
                0 6px 15px rgba(255, 182, 193, 0.6);
        }

        /* Theme Toggle */
        .theme-toggle {
            position: fixed;
            top: 20px;
            left: 20px;
            background: linear-gradient(135deg, #FFB6C1, #FF69B4);
            color: white;
            padding: 12px;
            border-radius: 50%;
            box-shadow: 
                0 4px 12px rgba(255, 182, 193, 0.4);
            z-index: 1000;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.2);
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .theme-toggle:hover {
            transform: scale(1.1) rotate(15deg);
            box-shadow: 
                0 6px 15px rgba(255, 182, 193, 0.6);
        }

        /* Header */
        header {
            position: relative;
            text-align: center;
            padding: 60px 20px;
            background: 
                radial-gradient(circle at 30% 70%, rgba(255, 182, 193, 0.2) 0%, transparent 50%),
                radial-gradient(circle at 70% 30%, rgba(255, 105, 180, 0.15) 0%, transparent 50%),
                linear-gradient(135deg, #FFF0F5 0%, #FFB6C1 30%, #FF69B4 70%, #FF1493 100%);
            border-radius: 0 0 40px 40px;
            color: white;
            overflow: hidden;
            box-shadow: 
                0 8px 20px rgba(255, 182, 193, 0.3);
        }
        
        header::before {
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
        
        header h1 {
            font-size: 3rem;
            margin-bottom: 15px;
            animation: slideIn 1s ease-out;
            text-shadow: 
                2px 2px 4px rgba(0,0,0,0.1);
            font-weight: 700;
        }
        
        header p {
            font-size: 1.2rem;
            opacity: 0.95;
            animation: fadeIn 2s ease-out;
            font-weight: 500;
        }

        /* Navigation */
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px 20px;
        }
        
        .nav-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }
        
        .nav-btn {
            background: linear-gradient(135deg, #FFB6C1, #FF69B4);
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 14px 28px;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 
                0 6px 15px rgba(255, 182, 193, 0.4);
            border: 2px solid rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            gap: 10px;
            min-width: 150px;
            justify-content: center;
            font-size: 1.05rem;
            position: relative;
            overflow: hidden;
        }
        
        .nav-btn:hover {
            transform: translateY(-3px);
            box-shadow: 
                0 8px 20px rgba(255, 182, 193, 0.6);
            background: linear-gradient(135deg, #FF69B4, #FF1493);
        }

        /* Container */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* Product Card */
        .product-card {
            background: 
                radial-gradient(circle at 20% 80%, rgba(255, 182, 193, 0.1) 0%, transparent 50%),
                linear-gradient(145deg, #FFF8FB, #FFF0F5);
            border-radius: 20px;
            padding: 0;
            box-shadow: 
                0 8px 20px rgba(255, 182, 193, 0.2);
            border: 2px solid #FFB6C1;
            overflow: hidden;
            margin-bottom: 30px;
            display: flex;
            flex-direction: column;
        }

        /* PERUBAHAN: Gambar sesuai ukuran asli */
        .product-image {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
            /* Tidak ada height fixed */
        }

        .product-image img {
            width: 100%;
            height: auto; /* Ukuran asli */
            max-height: 400px; /* Batas maksimal tinggi */
            object-fit: contain; /* Menjaga proporsi asli */
            display: block;
        }

        .product-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-title {
            font-size: 1.4rem;
            background: linear-gradient(135deg, #FF69B4, #FF1493);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .product-description {
            color: #6A3A4D;
            margin-bottom: 15px;
            line-height: 1.5;
            flex-grow: 1;
        }

        .stock-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 15px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .stock-danger {
            background: linear-gradient(135deg, #FF6B6B, #FF4757);
            color: white;
        }

        .stock-warning {
            background: linear-gradient(135deg, #FFD93D, #FF9F1C);
            color: #6A3A4D;
        }

        .stock-success {
            background: linear-gradient(135deg, #6BCF7F, #4CD964);
            color: white;
        }

        .product-price {
            font-size: 1.3rem;
            font-weight: 700;
            color: #FF69B4;
            margin-top: auto;
        }

        /* Checkout Form */
        .checkout-form {
            background: 
                radial-gradient(circle at 20% 80%, rgba(255, 182, 193, 0.1) 0%, transparent 50%),
                linear-gradient(145deg, #FFF8FB, #FFF0F5);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 
                0 8px 20px rgba(255, 182, 193, 0.2);
            border: 2px solid #FFB6C1;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #FF1493;
            font-size: 1rem;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #FFB6C1;
            border-radius: 12px;
            background: white;
            color: #6A3A4D;
            font-size: 1rem;
            transition: all 0.3s ease;
            font-family: 'Baloo 2', cursive;
        }

        .form-control:focus {
            outline: none;
            border-color: #FF69B4;
            box-shadow: 0 0 0 3px rgba(255, 182, 193, 0.3);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }

        select.form-control {
            cursor: pointer;
        }

        .form-text {
            margin-top: 8px;
            font-size: 0.9rem;
            color: #6A3A4D;
        }

        .text-danger {
            color: #FF4757 !important;
        }

        .text-success {
            color: #4CD964 !important;
        }

        /* Buttons */
        .submit-btn {
            background: linear-gradient(135deg, #FFB6C1, #FF69B4);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 25px;
            font-weight: 700;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 
                0 6px 15px rgba(255, 182, 193, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            margin-top: 10px;
        }

        .submit-btn:hover:not(:disabled) {
            background: linear-gradient(135deg, #FF69B4, #FF1493);
            transform: translateY(-2px);
            box-shadow: 
                0 8px 20px rgba(255, 182, 193, 0.6);
        }

        .submit-btn:disabled {
            background: linear-gradient(135deg, #CCCCCC, #999999);
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .btn-secondary {
            background: linear-gradient(135deg, #CCCCCC, #999999);
            color: white;
            cursor: not-allowed;
        }

        /* Alerts */
        .alert {
            padding: 15px 20px;
            border-radius: 12px;
            margin-top: 20px;
            border: 2px solid;
        }

        .alert-danger {
            background: linear-gradient(135deg, #FFE4E4, #FFC9C9);
            border-color: #FF4757;
            color: #D63031;
        }

        .alert-success {
            background: linear-gradient(135deg, #E8F8EF, #D1F2D6);
            border-color: #4CD964;
            color: #27AE60;
        }

        .alert ul {
            margin-bottom: 0;
            padding-left: 20px;
        }

        /* Validation */
        .is-invalid {
            border-color: #FF4757 !important;
            box-shadow: 0 0 0 3px rgba(255, 71, 87, 0.2) !important;
        }

        /* Footer */
        footer {
            background: 
                radial-gradient(circle at 20% 80%, rgba(255, 182, 193, 0.2) 0%, transparent 50%),
                linear-gradient(135deg, #FF69B4, #FF1493);
            color: white;
            text-align: center;
            padding: 35px 20px;
            margin-top: 60px;
            border-radius: 35px 35px 0 0;
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
        
        footer i {
            margin: 0 15px;
            font-size: 1.4rem;
            cursor: pointer;
            transition: all 0.3s ease;
            opacity: 0.9;
        }
        
        footer i:hover {
            transform: scale(1.2) translateY(-2px);
            opacity: 1;
            color: #FFF0F5;
        }

        /* Animations */
        @keyframes slideIn {
            from { transform: translateY(-30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Responsive */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2.2rem;
            }
            
            .nav-buttons {
                gap: 10px;
            }
            
            .nav-btn {
                padding: 12px 20px;
                min-width: 130px;
                font-size: 0.95rem;
            }

            .container {
                padding: 30px 15px;
            }

            .product-content {
                padding: 20px;
            }

            .checkout-form {
                padding: 25px 20px;
            }

            .music-player, .theme-toggle {
                top: 10px;
                padding: 10px 15px;
                font-size: 0.9rem;
            }

            .product-image img {
                max-height: 350px; /* Sedikit lebih kecil di tablet */
            }
        }

        @media (max-width: 480px) {
            header {
                padding: 40px 15px;
            }
            
            header h1 {
                font-size: 1.8rem;
            }
            
            .nav-buttons {
                flex-direction: column;
                align-items: center;
            }

            .product-image img {
                max-height: 300px; /* Lebih kecil di mobile */
            }
        }
    </style>
</head>
<body>

<!-- Theme Toggle -->
<div class="theme-toggle" onclick="toggleTheme()">
    <i class="fas fa-palette"></i>
</div>

<header>
    <h1>Checkout Produk 🛍️</h1>
    <p>Lengkapi data diri untuk menyelesaikan pembelian</p>
</header>

<div class="nav-container">
    <div class="nav-buttons">
        <a href="{{ url('/') }}" class="nav-btn">
            <i class="fas fa-home"></i> Beranda
        </a>
        <a href="{{ url('/kategori') }}" class="nav-btn">
            <i class="fas fa-th-large"></i> Kategori
        </a>
        <a href="{{ url('/tentang') }}" class="nav-btn">
            <i class="fas fa-info-circle"></i> Tentang
        </a>
        <a href="{{ url('/kontak') }}" class="nav-btn">
            <i class="fas fa-envelope"></i> Kontak
        </a>
    </div>
</div>

<div class="container">
    <!-- 🛍️ Card Produk -->
    <div class="product-card">
        <div class="product-image">
            <img src="{{ $product->image ? asset('storage/'.$product->image) : asset('default.jpg') }}" 
                 alt="{{ $product->name }}"
                 onload="this.style.opacity='1'"
                 style="opacity:0; transition: opacity 0.3s ease;">
        </div>
        <div class="product-content">
            <h3 class="product-title">{{ $product->name }}</h3>
            <p class="product-description">{{ $product->description }}</p>
            
            <!-- ✅ INFO STOK DINAMIS -->
            <div class="mb-3">
                @if($product->stock <= 0)
                    <span class="stock-badge stock-danger">STOK HABIS</span>
                @elseif($product->stock < 5)
                    <span class="stock-badge stock-warning">STOK TERBATAS</span>
                @else
                    <span class="stock-badge stock-success">STOK TERSEDIA</span>
                @endif
                <small class="text-muted">({{ $product->stock }} pcs)</small>
            </div>
            
            @if($product->price)
                <p class="product-price">Harga: Rp {{ number_format($product->price,0,',','.') }}</p>
            @endif
        </div>
    </div>

    <!-- 🧾 Form Checkout -->
    <form action="{{ route('user.checkout.store', $product->id) }}" method="POST" 
          class="checkout-form"
          id="checkoutForm">
        @csrf

        <!-- Nama -->
        <div class="form-group">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required placeholder="Masukkan nama lengkap">
        </div>

        <!-- No Telepon -->
        <div class="form-group">
            <label class="form-label">No. Telepon</label>
            <input type="text" name="no_telp" class="form-control" value="{{ old('no_telp') }}" required placeholder="Contoh: 081234567890">
        </div>

        <!-- Alamat -->
        <div class="form-group">
            <label class="form-label">Alamat Lengkap</label>
            <textarea name="alamat" class="form-control" rows="3" required placeholder="Masukkan alamat lengkap pengiriman">{{ old('alamat') }}</textarea>
        </div>

        <!-- Ukuran -->
        <div class="form-group">
            <label class="form-label">Pilih Ukuran</label>
            <select name="size" class="form-control" required>
                <option value="">-- Pilih Ukuran --</option>
                @foreach($sizes as $size)
                    <option value="{{ $size }}" {{ old('size') == $size ? 'selected' : '' }}>{{ $size }}</option>
                @endforeach
            </select>
        </div>

        <!-- Jumlah - DINAMIS BERDASARKAN STOK -->
        <div class="form-group">
            <label class="form-label">Jumlah Pesanan</label>
            <input type="number" 
                   name="quantity" 
                   class="form-control" 
                   id="quantityInput"
                   min="1" 
                   max="{{ $product->stock }}" 
                   value="{{ old('quantity', 1) }}" 
                   required
                   {{ $product->stock <= 0 ? 'disabled' : '' }}
                   placeholder="Jumlah yang dipesan">
            
            <!-- ✅ INFO STOK REAL-TIME -->
            <div class="form-text">
                <span id="stockInfo">
                    @if($product->stock <= 0)
                        <span class="text-danger">Stok habis!</span>
                    @else
                        Stok tersedia: <strong>{{ $product->stock }}</strong> pcs
                    @endif
                </span>
                <span id="totalPrice" class="ms-2 fw-bold" style="color: #FF69B4;"></span>
            </div>
        </div>

        <!-- Tombol - DINAMIS BERDASARKAN STOK -->
        <button type="submit" 
                class="submit-btn"
                id="submitBtn"
                {{ $product->stock <= 0 ? 'disabled' : '' }}>
            <i class="fas fa-shopping-cart"></i>
            <span id="submitText">
                @if($product->stock <= 0)
                    STOK HABIS
                @else
                    Bayar / Checkout
                @endif
            </span>
        </button>
    </form>

    <!-- ✅ Pesan error/success -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Perhatian!</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
        </div>
    @endif
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


<script>
// ========== VARIABLES GLOBAL ==========
let isPlaying = false;
let isDarkTheme = false;
const music = document.getElementById('backgroundMusic');

// ========== THEME TOGGLE ==========
function toggleTheme() {
    isDarkTheme = !isDarkTheme;
    document.body.classList.toggle('dark-theme', isDarkTheme);
    
    // Theme transition effect
    document.body.style.transition = 'all 0.5s ease';
    setTimeout(() => {
        document.body.style.transition = '';
    }, 500);
}

// ========== CHECKOUT FUNCTIONALITY ==========
document.addEventListener('DOMContentLoaded', function() {
    const quantityInput = document.getElementById('quantityInput');
    const stockInfo = document.getElementById('stockInfo');
    const totalPrice = document.getElementById('totalPrice');
    const submitBtn = document.getElementById('submitBtn');
    const submitText = document.getElementById('submitText');
    const productPrice = {{ $product->price ?? 0 }};
    const maxStock = {{ $product->stock }};

    // Fungsi update total harga
    function updateTotalPrice() {
        const quantity = parseInt(quantityInput.value) || 0;
        const total = quantity * productPrice;
        
        if (total > 0) {
            totalPrice.textContent = 'Total: Rp ' + total.toLocaleString('id-ID');
        } else {
            totalPrice.textContent = '';
        }
        
        // Validasi stok
        if (quantity > maxStock) {
            quantityInput.classList.add('is-invalid');
            submitBtn.disabled = true;
            submitText.textContent = 'Jumlah melebihi stok!';
            submitBtn.style.background = 'linear-gradient(135deg, #FF6B6B, #FF4757)';
        } else {
            quantityInput.classList.remove('is-invalid');
            submitBtn.disabled = maxStock <= 0;
            submitText.textContent = maxStock <= 0 ? 'STOK HABIS' : 'Bayar / Checkout';
            submitBtn.style.background = maxStock <= 0 ? 
                'linear-gradient(135deg, #CCCCCC, #999999)' : 
                'linear-gradient(135deg, #FFB6C1, #FF69B4)';
        }
    }

    // Event listener untuk input quantity
    quantityInput.addEventListener('input', updateTotalPrice);
    
    // Validasi form sebelum submit
    document.getElementById('checkoutForm').addEventListener('submit', function(e) {
        const quantity = parseInt(quantityInput.value) || 0;
        
        if (quantity > maxStock) {
            e.preventDefault();
            alert('Jumlah pesanan melebihi stok yang tersedia!');
            quantityInput.focus();
        }
        
        if (maxStock <= 0) {
            e.preventDefault();
            alert('Maaf, stok produk sudah habis!');
        }
    });

    // Initial calculation
    updateTotalPrice();
});
</script>

</body>
</html>