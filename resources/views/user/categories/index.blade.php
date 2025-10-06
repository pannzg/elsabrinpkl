<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori | Butik Elsabrin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {margin:0; padding:0; box-sizing:border-box; font-family:'Baloo 2', cursive, 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;}
        body {background: linear-gradient(135deg, #ffd1dc, #ffe1b5); min-height: 100vh; color:#333;}
        .header {background: linear-gradient(135deg,#ff6b81 0%,#ff9a76 100%); color:white; padding:30px 0; text-align:center; box-shadow:0 6px 15px rgba(0,0,0,.1); border-radius:0 0 25px 25px;}
        .header h1 {font-size:2.5rem; margin-bottom:10px; text-shadow:2px 2px 5px rgba(0,0,0,0.1);}
        .header p {font-size:1.1rem; opacity:.9;}
        .container {max-width:1200px; margin:0 auto; padding:30px 20px;}
        .breadcrumb {display:flex; justify-content:center; margin-bottom:30px; flex-wrap: wrap;}
        .breadcrumb a {color:#ff6b81; text-decoration:none; font-weight:600; margin: 0 5px; transition:color .3s;}
        .breadcrumb a:hover {color:#ff3b63;}
        .breadcrumb span {margin:0 5px; color:#888;}
        .category-grid {display:grid; grid-template-columns:repeat(auto-fill,minmax(260px,1fr)); gap:25px; margin-top:20px;}
        .category-card {background:white; border-radius:20px; overflow:hidden; box-shadow:0 10px 25px rgba(255,105,135,.3); transition:.4s; cursor:pointer; position:relative;}
        .category-card:hover {transform:translateY(-8px) rotate(-1deg) scale(1.03); box-shadow:0 15px 30px rgba(255,105,135,0.5);}
        .category-image {height:180px; display:flex; justify-content:center; align-items:center; position:relative; overflow:hidden; background:linear-gradient(45deg,#ffd1dc,#ff9a76);}
        .category-image img {width:100%; height:100%; object-fit:cover; transition:transform .3s;}
        .category-card:hover .category-image img {transform:scale(1.1);}
        .category-image i {font-size:50px; color:white; z-index:2; animation: float 3s ease-in-out infinite;}
        .category-content {padding:18px; text-align:center; position:relative;}
        .category-content h3 {color:#ff6b81; font-size:1.4rem; margin-bottom:8px;}
        .category-content p {color:#555; font-size:.95rem; line-height:1.5; margin-bottom:8px;}
        .category-count {display:inline-block; background:linear-gradient(to right,#ff6b81,#ff9a76); color:white; padding:6px 14px; border-radius:25px; font-size:.85rem; margin-top:8px; font-weight:600; box-shadow:0 3px 6px rgba(255,105,135,0.3);}
        .emoji {position:absolute; top:10px; right:10px; font-size:24px; animation: bounce 2s infinite;}
        .empty-state {text-align:center; padding:40px 0;}
        .empty-state i {font-size:60px; color:#ff6b81; margin-bottom:15px; animation: float 3s ease-in-out infinite;}
        .empty-state p {color:#555; font-size:1.1rem;}
        @keyframes float {0%,100%{transform:translateY(0);}50%{transform:translateY(-8px);}}
        @keyframes bounce {0%,100%{transform:translateY(0);}50%{transform:translateY(-10px);}}
        @media(max-width:768px){.category-grid{grid-template-columns:repeat(auto-fill,minmax(220px,1fr)); gap:20px;} .header h1{font-size:2rem;}}
        @media(max-width:480px){.category-grid{grid-template-columns:1fr;} .header h1{font-size:1.8rem;} .breadcrumb{flex-direction: column; align-items: center;}}
    </style>
</head>
<body>
    <header class="header">
        <h1>Kategori Produk 🎉</h1>
        <p>Temukan koleksi terbaru dari Butik Elsabrin</p>
    </header>

    <div class="container">
        <div class="breadcrumb">
            <a href="{{ url('/') }}">Beranda</a>
            <span>/</span>
            <a href="{{ url('/kategori') }}">Kategori</a>
            <span>/</span>
            <a href="{{ url('/tentang') }}">Tentang</a>
            <span>/</span>
            <a href="{{ url('/kontak') }}">Kontak</a>
        </div>

        <div class="category-grid">
            @forelse($categories as $category)
                <div class="category-card" onclick="window.location.href='{{ route('user.categories.show', $category->id) }}'">
                    <div class="category-image">
                        @if($category->image)
                            <img src="{{ asset('storage/'.$category->image) }}" alt="{{ $category->name }}">
                        @else
                            @if(strtolower($category->name) == 'koko pria')
                                <!-- Elemen khusus Koko Pria -->
                                <i class="fas fa-mug-hot"></i>
                                <div class="emoji">💪</div>
                            @else
                                <i class="fas fa-tags"></i>
                                <div class="emoji">✨</div>
                            @endif
                        @endif
                    </div>

                    <div class="category-content">
                        @if(strtolower($category->name) == 'koko pria')
                            <h3>{{ $category->name }} 🔥</h3>
                        @else
                            <h3>{{ $category->name }} 🎀</h3>
                        @endif
                        <p>{{ $category->description ?? 'Tidak ada deskripsi' }}</p>
                        <div class="category-count">{{ $category->products_count }} Produk</div>
                    </div>
                </div>
            @empty
                <div class="empty-state">
                    <i class="fas fa-folder-open"></i>
                    <p>Belum ada kategori produk 😢</p>
                </div>
            @endforelse
        </div>
    </div>

    <script>
        document.querySelectorAll('.category-card').forEach(card => {
            card.addEventListener('click', function() {
                this.style.opacity = '0.7';
                this.style.pointerEvents = 'none';
            });
        });
    </script>
</body>
</html>