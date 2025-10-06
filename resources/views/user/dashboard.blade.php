<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard | Butik Elsabrin</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<style>
    * {margin:0; padding:0; box-sizing:border-box; font-family:'Baloo 2', cursive, sans-serif;}
    body {background: linear-gradient(135deg,#ffd1dc,#ffe1b5); color:#333; min-height:100vh;}
    header {position:relative; text-align:center; padding:60px 20px; background:linear-gradient(135deg,#ff6b81,#ff9a76); border-radius:0 0 50px 50px; color:white; overflow:hidden;}
    header h1 {font-size:3rem; margin-bottom:15px; animation:slideIn 1s ease-out;}
    header p {font-size:1.2rem; opacity:0.9; animation:fadeIn 2s ease-out;}
    header img {position:absolute; width:50px;}
    header img.star1 {top:20px; left:20px; animation:bounce 4s infinite;}
    header img.star2 {top:60px; right:40px; animation:spin 20s linear infinite;}
    header img.logo {top:20px; right:20px; width:60px; animation:spin 15s linear infinite;}
    @keyframes bounce {0%,100%{transform:translateY(0);}50%{transform:translateY(-15px);}}
    @keyframes spin {0%{transform:rotate(0deg);}100%{transform:rotate(360deg);}}
    @keyframes slideIn {0%{opacity:0; transform:translateY(-20px);}100%{opacity:1; transform:translateY(0);}}
    @keyframes fadeIn {0%{opacity:0;}100%{opacity:1;}}
    .hamburger {max-width:1200px; margin:0 auto; padding:30px 20px;}
    .breadcrumb {display:flex; justify-content:center; margin-bottom:30px; flex-wrap: wrap;}
    .breadcrumb a {color:#ff6b81; text-decoration:none; font-weight:600; margin: 0 5px; transition:color .3s;}
    .breadcrumb a:hover {color:#ff3b63;}
    .breadcrumb span {margin:0 5px; color:#888;}
    .container {max-width:1200px; margin:0 auto; padding:40px 20px;}
    h2 {text-align:center; font-size:2rem; color:#ff6b81; margin-bottom:25px;}
    .card {background:white; border-radius:20px; padding:30px; text-align:center; box-shadow:0 10px 25px rgba(255,105,135,0.2); transition:0.4s; cursor:pointer; position:relative;}
    .card:hover {transform:translateY(-8px) scale(1.05); box-shadow:0 15px 35px rgba(255,105,135,0.4);}
    .card i {font-size:50px; color:#ff6b81; margin-bottom:15px; animation:float 3s ease-in-out infinite;}
    @keyframes float {0%,100%{transform:translateY(0);}50%{transform:translateY(-10px);}}
    .card p {color:#555; font-size:1rem; line-height:1.5;}
    .grid {display:grid; gap:20px; grid-template-columns:repeat(auto-fit,minmax(250px,1fr));}
    .btn-confetti {background:#ff6b81;color:white;padding:10px 18px;border-radius:25px;font-weight:bold;display:inline-block;cursor:pointer;text-decoration:none;transition:0.3s;}
    .btn-confetti:hover {background:#ff3b63; transform:scale(1.1);}
    footer {background:#ff9aa2; color:white; text-align:center; padding:25px 20px; margin-top:50px; border-radius:25px 25px 0 0;}
</style>
</head>
<body>

<header>
    <h1>Selamat Datang di Butik Elsabrin!</h1>
    <p>penuh gaya dan interaktif, khusus untuk pengunjung Butik Elsabrin 💖</p>
</header>

<div class="hamburger">
        <div class="breadcrumb">
            <a href="{{ url('/') }}">Beranda</a>
            <span>/</span>
            <a href="{{ url('/kategori') }}">Kategori</a>
            <span>/</span>
            <a href="{{ url('/tentang') }}">Tentang</a>
            <span>/</span>
            <a href="{{ url('/kontak') }}">Kontak</a>
        </div>

<div class="container">
    <!-- Fun Cards Section -->
    <h2>Halaman Interaktif</h2>
    <div class="grid">
        <div class="card">
            <i class="fas fa-magic"></i>
            <p>✨ Jelajahi fitur-fitur seru yang bikin belanja lebih menyenangkan!</p>
        </div>
        <div class="card">
            <i class="fas fa-smile-beam"></i>
            <p>😊 Nikmati pengalaman dashboard penuh warna dan animasi!</p>
        </div>
        <div class="card">
            <i class="fas fa-gift"></i>
            <p>🎁 Temukan kejutan dan hadiah kecil di beberapa tombol interaktif!</p>
        </div>
        <div class="card">
            <i class="fas fa-confetti"></i>
            <p>🎉 Coba tekan tombol confetti, lihat efek serunya!</p>
        </div>
    </div>

    <!-- Testimonial Playful -->
    <h2>Pesan Lucu dari Pelanggan</h2>
    <div class="grid">
        <div class="card">
            <i class="fas fa-heart"></i>
            <p>“Dashboard ini bikin aku tersenyum tiap kali login! 💖” – Dita</p>
        </div>
        <div class="card">
            <i class="fas fa-star"></i>
            <p>“Animasi dan warna-warni di halaman ini super catchy 😍” – Raka</p>
        </div>
        <div class="card">
            <i class="fas fa-smile"></i>
            <p>“Kejutan kecil di tombol bikin belanja makin fun! 🎁” – Fanny</p>
        </div>
    </div>

    <!-- Fun Button -->
    <div style="text-align:center; margin-top:40px;">
        <a href="#" class="btn-confetti">Tekan Aku 🎉</a>
    </div>
</div>

<footer>
    &copy; 2025 Butik Elsabrin. Semua Hak Dilindungi. <br>
    <i class="fab fa-facebook fa-lg"></i>
    <i class="fab fa-instagram fa-lg"></i>
    <i class="fab fa-tiktok fa-lg"></i>
</footer>

<!-- Confetti Script -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
<script>
document.querySelectorAll('.btn-confetti').forEach(btn=>{
    btn.addEventListener('click',function(){
        confetti({
            particleCount:100,
            spread:70,
            origin:{y:0.6},
            colors:['#ff6b81','#ffb6b9','#fcd5ce']
        });
    });
});
</script>

</body>
</html>
