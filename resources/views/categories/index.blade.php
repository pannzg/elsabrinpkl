<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori | Butik Elsabrin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #ffd1dc 0%, #ffa07a 100%);
            min-height: 100vh;
            color: #333;
        }
        
        .header {
            background: linear-gradient(135deg, #ff6b81 0%, #ff8c69 100%);
            color: white;
            padding: 25px 0;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        .header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px 20px;
        }
        
        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 20px;
        }
        
        .category-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }
        
        .category-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(233, 150, 158, 0.25);
        }
        
        .category-image {
            height: 200px;
            background: linear-gradient(45deg, #ffd1dc, #ffa07a);
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        
        .category-image i {
            font-size: 70px;
            color: white;
            z-index: 2;
        }
        
        .category-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(255, 107, 129, 0.7), rgba(255, 140, 105, 0.7));
            opacity: 0.8;
        }
        
        .category-content {
            padding: 20px;
            text-align: center;
        }
        
        .category-content h3 {
            color: #ff6b81;
            font-size: 1.4rem;
            margin-bottom: 10px;
        }
        
        .category-content p {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.5;
        }
        
        .category-count {
            display: inline-block;
            background: linear-gradient(to right, #ff6b81, #ff8c69);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-top: 10px;
        }
        
        .navigation {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }
        
        .nav-btn {
            background: white;
            color: #ff6b81;
            border: none;
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: 600;
            margin: 0 10px;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }
        
        .nav-btn:hover {
            background: linear-gradient(to right, #ff6b81, #ff8c69);
            color: white;
            box-shadow: 0 6px 15px rgba(233, 150, 158, 0.3);
        }
        
        .breadcrumb {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }
        
        .breadcrumb a {
            color: #ff6b81;
            text-decoration: none;
            font-weight: 500;
        }
        
        .breadcrumb span {
            margin: 0 10px;
            color: #888;
        }
        
        @media (max-width: 768px) {
            .category-grid {
                grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
                gap: 20px;
            }
            
            .header h1 {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 480px) {
            .category-grid {
                grid-template-columns: 1fr;
            }
            
            .header h1 {
                font-size: 1.8rem;
            }
        }
        
        .gamis .category-image {
            background: linear-gradient(45deg, #ff9a9e, #fad0c4);
        }
        
        .koko .category-image {
            background: linear-gradient(45deg, #a1c4fd, #c2e9fb);
        }
        
        .hijab .category-image {
            background: linear-gradient(45deg, #ffecd2, #fcb69f);
        }
        
        .sarimbit .category-image {
            background: linear-gradient(45deg, #84fab0, #8fd3f4);
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>Kategori Produk</h1>
        <p>Temukan koleksi terbaru dari Butik Elsabrin</p>
    </header>

    <div class="container">
        <div class="breadcrumb">
            <a href="#">Home</a>
            <span>/</span>
            <a href="#">Produk</a>
            <span>/</span>
            <a href="#">Kategori</a>
        </div>

        <div class="category-grid">
            <div class="category-card gamis">
                <div class="category-image">
                    <i class="fas fa-tshirt"></i>
                </div>
                <div class="category-content">
                    <h3>Gamis</h3>
                    <p>Koleksi gamis elegan dengan desain modern dan bahan nyaman</p>
                    <div class="category-count">42 Produk</div>
                </div>
            </div>

            <div class="category-card koko">
                <div class="category-image">
                    <i class="fas fa-male"></i>
                </div>
                <div class="category-content">
                    <h3>Baju Koko</h3>
                    <p>Baju koko pria dengan berbagai model dan bahan berkualitas</p>
                    <div class="category-count">28 Produk</div>
                </div>
            </div>

            <div class="category-card hijab">
                <div class="category-image">
                    <i class="fas fa-female"></i>
                </div>
                <div class="category-content">
                    <h3>Hijab</h3>
                    <p>Berbagai model hijab syar'i dengan bahan nyaman dan trendy</p>
                    <div class="category-count">35 Produk</div>
                </div>
            </div>

            <div class="category-card sarimbit">
                <div class="category-image">
                    <i class="fas fa-users"></i>
                </div>
                <div class="category-content">
                    <h3>Seragam Keluarga</h3>
                    <p>Koleksi sarimbit untuk keluarga dengan desain matching</p>
                    <div class="category-count">15 Produk</div>
                </div>
            </div>
        </div>

        <div class="navigation">
            <button class="nav-btn">Lihat Semua Produk</button>
            <button class="nav-btn">Kategori Lainnya</button>
        </div>
    </div>

    <script>
        // Animasi untuk card kategori
        document.querySelectorAll('.category-card').forEach(card => {
            card.addEventListener('click', function() {
                const categoryName = this.querySelector('h3').textContent;
                alert(`Anda memilih kategori: ${categoryName}\n\nDalam aplikasi lengkap, ini akan mengarahkan ke halaman produk kategori.`);
            });
        });
        
        // Animasi untuk tombol navigasi
        document.querySelectorAll('.nav-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                this.style.transform = "scale(0.95)";
                setTimeout(() => {
                    this.style.transform = "scale(1)";
                }, 200);
                
                if(this.textContent === "Lihat Semua Produk") {
                    alert("Membuka halaman semua produk...");
                } else {
                    alert("Membuka halaman kategori lainnya...");
                }
            });
        });
    </script>
</body>
</html>