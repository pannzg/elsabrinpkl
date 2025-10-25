<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard | Butik Elsabrin</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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
    
    /* Theme Toggle - Pink */
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
    
    .nav-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }
    
    .nav-btn:hover::before {
        left: 100%;
    }
    
    .nav-btn:hover {
        transform: translateY(-3px);
        box-shadow: 
            0 8px 20px rgba(255, 182, 193, 0.6);
        background: linear-gradient(135deg, #FF69B4, #FF1493);
        border-color: rgba(255, 255, 255, 0.3);
    }
    
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }
    
    h2 {
        text-align: center;
        font-size: 2.2rem;
        background: linear-gradient(135deg, #FF69B4, #FF1493);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 35px;
        font-weight: 700;
        position: relative;
    }

    h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 3px;
        background: linear-gradient(90deg, transparent, #FF69B4, transparent);
        border-radius: 2px;
    }

    /* Ibu-Ibu Features Section */
    .ibu-features {
        background: 
            radial-gradient(circle at 20% 80%, rgba(255, 182, 193, 0.1) 0%, transparent 50%),
            linear-gradient(145deg, #FFF8FB, #FFF0F5);
        border-radius: 20px;
        padding: 30px;
        text-align: center;
        box-shadow: 
            0 8px 20px rgba(255, 182, 193, 0.2);
        margin-bottom: 40px;
        border: 2px solid #FFB6C1;
        position: relative;
        overflow: hidden;
    }

    .ibu-features::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, transparent, #FFB6C1, transparent);
    }

    .features-container {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
        margin: 20px 0;
    }

    .feature-btn {
        background: linear-gradient(135deg, #FFB6C1, #FF69B4);
        color: white;
        border: none;
        padding: 15px 25px;
        border-radius: 15px;
        cursor: pointer;
        font-size: 1.1rem;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 
            0 4px 12px rgba(255, 182, 193, 0.3);
        border: 2px solid rgba(255, 255, 255, 0.2);
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .feature-btn:hover {
        transform: translateY(-3px);
        box-shadow: 
            0 6px 15px rgba(255, 182, 193, 0.5);
        background: linear-gradient(135deg, #FF69B4, #FF1493);
    }

    .features-stats {
        display: flex;
        justify-content: center;
        gap: 30px;
        margin-top: 20px;
        font-size: 1.1rem;
        font-weight: 600;
    }

    .stat {
        background: 
            radial-gradient(circle at 50% 0%, rgba(255, 182, 193, 0.2) 0%, transparent 50%),
            linear-gradient(135deg, #FFF0F5, #FFE4EC);
        padding: 10px 20px;
        border-radius: 10px;
        border: 2px solid #FFB6C1;
        color: #6A3A4D;
        box-shadow: 0 4px 12px rgba(255, 182, 193, 0.15);
    }

    /* Typing Effect */
    .typing-text {
        font-size: 1.3rem;
        text-align: center;
        margin: 20px 0;
        min-height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #6A3A4D;
        font-weight: 600;
    }

    .typing-cursor {
        animation: blink 1s infinite;
        color: #FF69B4;
    }

    @keyframes blink {
        0%, 50% { opacity: 1; }
        51%, 100% { opacity: 0; }
    }

    /* Cards dengan warna pink yang diminta */
    .card {
        background: 
            radial-gradient(circle at 20% 80%, rgba(255, 182, 193, 0.2) 0%, transparent 50%),
            linear-gradient(145deg, #FFF8FB, #FFF0F5);
        border-radius: 20px;
        padding: 35px 25px;
        text-align: center;
        box-shadow: 
            0 8px 20px rgba(255, 182, 193, 0.2);
        transition: all 0.3s ease;
        cursor: pointer;
        position: relative;
        border: 2px solid #FFB6C1;
        overflow: hidden;
        color: #6A3A4D;
    }
    
    .card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(135deg, #FFB6C1, #FF69B4);
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }
    
    .card:hover::before {
        transform: scaleX(1);
    }
    
    .card:hover {
        transform: translateY(-8px);
        box-shadow: 
            0 12px 25px rgba(255, 182, 193, 0.4);
        border-color: #FFC0CB;
        background: 
            radial-gradient(circle at 20% 80%, rgba(255, 182, 193, 0.3) 0%, transparent 50%),
            linear-gradient(145deg, #FFF0F5, #FFE4EC);
    }
    
    .card i {
        font-size: 52px;
        background: linear-gradient(135deg, #FFC0CB, #FFB6C1, #FF69B4);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 20px;
        animation: float 3s ease-in-out infinite;
        display: inline-block;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    
    .card p {
        color: #6A3A4D;
        font-size: 1.05rem;
        line-height: 1.6;
        font-weight: 500;
    }
    
    .grid {
        display: grid;
        gap: 25px;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    }
    
    .btn-confetti {
        background: linear-gradient(135deg, #FFB6C1, #FF69B4);
        color: white;
        padding: 15px 35px;
        border-radius: 50px;
        font-weight: bold;
        display: inline-block;
        cursor: pointer;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 
            0 6px 15px rgba(255, 182, 193, 0.4);
        border: 2px solid rgba(255, 255, 255, 0.2);
        font-size: 1.1rem;
        position: relative;
        overflow: hidden;
    }
    
    .btn-confetti::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, rgba(255,255,255,0) 70%);
        transform: scale(0);
        transition: transform 0.3s;
    }
    
    .btn-confetti:hover::after {
        transform: scale(1);
    }
    
    .btn-confetti:hover {
        background: linear-gradient(135deg, #FF69B4, #FF1493);
        transform: translateY(-3px);
        box-shadow: 
            0 8px 20px rgba(255, 182, 193, 0.6);
        border-color: rgba(255, 255, 255, 0.3);
    }
    
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

    /* Floating elements - Pink Theme */
    .floating-dancer {
        position: fixed;
        font-size: 20px;
        pointer-events: none;
        z-index: 1;
        animation: dancerFloat linear forwards;
        opacity: 0.7;
    }

    @keyframes dancerFloat {
        0% {
            transform: translateY(100vh) rotate(0deg) scale(0.8);
            opacity: 0.7;
        }
        50% {
            transform: translateY(50vh) rotate(180deg) scale(1.1);
            opacity: 0.4;
        }
        100% {
            transform: translateY(-100px) rotate(360deg) scale(0.6);
            opacity: 0;
        }
    }

    /* Pink sparkle effect */
    .pink-sparkle {
        position: absolute;
        width: 70px;
        height: 70px;
        background: radial-gradient(circle, rgba(255, 182, 193, 0.4) 0%, rgba(255, 182, 193, 0) 70%);
        border-radius: 50%;
        pointer-events: none;
        filter: blur(6px);
    }

    /* Dark Theme untuk kontras */
    body.dark-theme {
        background: linear-gradient(135deg, #1a0f1c 0%, #2d1b2f 50%, #3d2740 100%);
        color: #FFC4D6;
    }

    body.dark-theme .card {
        background: linear-gradient(145deg, #2d1b2f, #1a0f1c);
        border-color: #FF5D8F;
        color: #FFC4D6;
    }

    body.dark-theme .card p {
        color: #FFC4D6;
    }

    body.dark-theme .ibu-features {
        background: linear-gradient(145deg, #2d1b2f, #1a0f1c);
        border-color: #FF5D8F;
    }

    body.dark-theme .stat {
        background: linear-gradient(135deg, #3d2740, #2d1b2f);
        border-color: #FF5D8F;
        color: #FFC4D6;
    }

    body.dark-theme .typing-text {
        color: #FFC4D6;
    }

    /* Animasi tambahan */
    @keyframes slideIn {
        from { transform: translateY(-30px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    /* Responsive Design */
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
        
        .theme-toggle {
            top: 10px;
            padding: 10px 15px;
            font-size: 0.9rem;
        }

        h2 {
            font-size: 1.8rem;
        }

        .features-container {
            flex-direction: column;
            align-items: center;
        }
    }

    @media (max-width: 480px) {
        header {
            padding: 40px 15px;
        }
        
        header h1 {
            font-size: 1.8rem;
        }
        
        .grid {
            grid-template-columns: 1fr;
        }
        
        .theme-toggle {
            padding: 8px 12px;
            font-size: 0.8rem;
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
    <h1>Selamat Datang di Butik Elsabrin! 💕</h1>
    <p>Penuh gaya dan interaktif, khusus untuk pengunjung Butik Elsabrin</p>
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
    <!-- Typing Effect -->
    <div class="typing-text" id="typingText"></div>

    <!-- Fitur Ibu-Ibu -->
    <div class="ibu-features">
        <h2>👗 Fitur Spesial untuk Ibu-Ibu</h2>
        <p>Nikmati fitur eksklusif yang dibuat khusus untuk kebutuhan ibu-ibu modern!</p>
        <div class="features-container">
            <button class="feature-btn" onclick="showTips()">
                <i class="fas fa-lightbulb"></i> Tips Harian
            </button>
        </div>
        <div class="features-stats">
        </div>
    </div>

    <!-- Halaman Interaktif dengan Warna Pink -->
    <h2>🎀 Halaman Interaktif</h2>
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

    <!-- Pesan dari Pelanggan dengan Warna Pink -->
    <h2>💝 Pesan dari Pelanggan</h2>
    <div class="grid">
        <div class="card">
            <i class="fas fa-heart"></i>
            <p>"Dashboard ini bikin aku tersenyum tiap kali login! 💖" – Dita, Ibu 2 anak</p>
        </div>
        <div class="card">
            <i class="fas fa-star"></i>
            <p>"Fitur tips parenting sangat membantu aktivitas sehari-hari 😍" – Raka, Working Mom</p>
        </div>
        <div class="card">
            <i class="fas fa-smile"></i>
            <p>"Komunitasnya supportive banget, bisa sharing pengalaman 🎁" – Fanny, Mompreneur</p>
        </div>
    </div>

    <!-- Fun Button -->
    <div style="text-align:center; margin-top:50px;">
        <a href="#" class="btn-confetti">
            <i class="fas fa-sparkles"></i> Tekan untuk Kejutan! 🎉
        </a>
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

<!-- Confetti Script -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
<script>
// ========== VARIABLES GLOBAL ==========
let isDarkTheme = false; // Default light theme (pink)
let clickCount = 0;

// ========== TYPING EFFECT ==========
const typingTexts = [
    "✨ Selamat datang di dunia fashion yang magical!",
    "💖 Fitur spesial untuk ibu-ibu modern!",
    "🎀 Temukan tips dan promo menarik setiap hari!",
    "🌟 Komunitas supportive untuk berbagi pengalaman!",
    "🦄 Belanja jadi lebih menyenangkan dengan fitur interaktif!"
];

let currentTextIndex = 0;
let currentCharIndex = 0;
let isDeleting = false;

function typeText() {
    const currentText = typingTexts[currentTextIndex];
    const typingElement = document.getElementById('typingText');
    
    if (isDeleting) {
        typingElement.innerHTML = currentText.substring(0, currentCharIndex - 1) + '<span class="typing-cursor">|</span>';
        currentCharIndex--;
    } else {
        typingElement.innerHTML = currentText.substring(0, currentCharIndex + 1) + '<span class="typing-cursor">|</span>';
        currentCharIndex++;
    }

    if (!isDeleting && currentCharIndex === currentText.length) {
        setTimeout(() => isDeleting = true, 2000);
    } else if (isDeleting && currentCharIndex === 0) {
        isDeleting = false;
        currentTextIndex = (currentTextIndex + 1) % typingTexts.length;
    }

    setTimeout(typeText, isDeleting ? 50 : 100);
}

// ========== FITUR IBU-IBU ==========
function showTips() {
    const tips = [

    "💡 Tips: Simpan baju favorit di lemari dengan hanger berwarna sama untuk memudahkan pencarian!",
    "👗 Ide: Mix and match 5 item pakaian bisa jadi 15 outfit berbeda!",
    "🧴 Tips Perawatan: Simpan parfum di tempat sejuk agar aroma tahan lama",
    "🛍️ Smart Shopping: Beli baju basic warna netral dulu, baru tambahkan item statement",
    "🪞 Fashion Hack: Gunakan sabuk kecil di pinggang untuk menonjolkan siluet tubuhmu!",
    "👚 Perawatan: Cuci pakaian berwarna dengan air dingin agar warnanya tidak cepat pudar",
    "👠 Style Note: Sepatu nude bisa membuat kaki terlihat lebih jenjang!",
    "💍 Aksesori: Jangan pakai terlalu banyak perhiasan, cukup satu yang standout!",
    "🧵 DIY: Gunakan pita sisa sebagai aksen lucu di tas atau rambutmu!",
    "👜 Closet Tip: Gantung tas dengan pengait agar bentuknya tetap terjaga",
    "👒 Gaya Musim: Gunakan topi lebar di musim panas untuk tampilan chic dan perlindungan UV!",
    "🧺 Laundry Tips: Pisahkan pakaian lembut seperti satin atau sutra saat mencuci",
    "👖 Fashion Trick: Gulung sedikit ujung celana jeans untuk tampilan kasual stylish!",
    "👕 Basic Wardrobe: Kaos putih berkualitas tinggi wajib ada di lemari setiap orang!",
    "🌸 Style Mood: Pilih warna pastel untuk tampilan lembut dan feminin",
    "🧥 Outfit Idea: Layer dengan cardigan atau blazer untuk tampilan profesional tapi santai",
    "👡 Summer Vibes: Sandal warna terang bikin kaki terlihat lebih segar dan cerah",
    "🧴 Care Tip: Setrika pakaian dengan suhu sesuai bahan untuk menghindari kerusakan",
    "🎀 Outfit Hack: Tambahkan bros kecil di kerah baju untuk sentuhan elegan",
    "🧤 Fashion Care: Simpan pakaian berbulu (seperti wol) di kantong kain, bukan plastik",
    "🕶️ Aksesori Wajib: Kacamata hitam bisa menyempurnakan tampilan apapun!",
    "👝 Style Secret: Gunakan clutch kecil untuk acara malam agar tampak lebih glamor",
    "👢 Gaya Musim: Boots hitam cocok dipadukan dengan rok mini atau dress panjang",
    "💅 Self-Care: Warna kuku netral membuat tangan terlihat bersih dan elegan",
    "👔 Fashion Fact: Garis vertikal membuat tubuh tampak lebih tinggi dan ramping!",
    "👖 Tips: Cuci jeans jarang-jarang saja agar warnanya tahan lama dan bentuknya pas",
    "🧴 Fabric Care: Hindari menggantung sweater, lipat saja agar tidak melar",
    "👗 Outfit Planner: Siapkan pakaianmu sehari sebelumnya untuk menghemat waktu di pagi hari",
    "🪡 Trik Jahit: Simpan jarum dan benang warna dasar untuk perbaikan cepat pakaian",
    "💫 Style Reminder: Percaya diri adalah aksesori terbaik yang bisa kamu pakai setiap hari!"

    ];
    
    const randomTip = tips[Math.floor(Math.random() * tips.length)];
    alert(randomTip);
    clickCount++;
    createSparkleBurst();
}

// ========== THEME TOGGLE ==========
function toggleTheme() {
    isDarkTheme = !isDarkTheme;
    document.body.classList.toggle('dark-theme', isDarkTheme);
    
    // Theme transition effect
    document.body.style.transition = 'all 0.5s ease';
    setTimeout(() => {
        document.body.style.transition = '';
    }, 500);
    
    // Confetti for theme change
    confetti({
        particleCount: 50,
        spread: 60,
        origin: { y: 0.6 },
        colors: isDarkTheme ? ['#FF5D8F', '#C71585', '#8B008B'] : ['#FFB6C1', '#FF69B4', '#FF1493']
    });
}

// ========== SOUND EFFECTS ==========
function playDancerSound() {
    const audioContext = new (window.AudioContext || window.webkitAudioContext)();
    const oscillator = audioContext.createOscillator();
    const gainNode = audioContext.createGain();
    
    oscillator.connect(gainNode);
    gainNode.connect(audioContext.destination);
    
    oscillator.frequency.setValueAtTime(700, audioContext.currentTime);
    oscillator.frequency.exponentialRampToValueAtTime(900, audioContext.currentTime + 0.1);
    oscillator.frequency.exponentialRampToValueAtTime(500, audioContext.currentTime + 0.3);
    
    gainNode.gain.setValueAtTime(0.1, audioContext.currentTime);
    gainNode.gain.exponentialRampToValueAtTime(0.01, audioContext.currentTime + 0.4);
    
    oscillator.start();
    oscillator.stop(audioContext.currentTime + 0.4);
}

// ========== CONFETTI EFFECT ==========
document.querySelectorAll('.btn-confetti').forEach(btn=>{
    btn.addEventListener('click',function(e){
        e.preventDefault();
        // Main confetti dengan palette pink
        confetti({
            particleCount: 130,
            spread: 75,
            origin: { y: 0.6 },
            colors: ['#FFB6C1', '#FF69B4', '#FF1493', '#FFC0CB', '#FFF0F5'],
            shapes: ['circle', 'square'],
            scalar: 1.1
        });

        // Additional side confetti
        setTimeout(() => {
            confetti({
                particleCount: 70,
                angle: 60,
                spread: 55,
                origin: { x: 0 },
                colors: ['#FFB6C1', '#FF69B4', '#FF1493']
            });
        }, 150);

        setTimeout(() => {
            confetti({
                particleCount: 70,
                angle: 120,
                spread: 55,
                origin: { x: 1 },
                colors: ['#FFB6C1', '#FF69B4', '#FF1493']
            });
        }, 300);

        createSparkleBurst();
        playDancerSound();
        clickCount++;
    });
});

// ========== SPARKLE EFFECTS ==========
function createSparkleBurst() {
    for (let i = 0; i < 15; i++) {
        setTimeout(() => {
            const sparkle = document.createElement('div');
            sparkle.className = 'pink-sparkle';
            sparkle.style.left = (window.innerWidth/2 - 35 + (Math.random() - 0.5) * 200) + 'px';
            sparkle.style.top = (window.innerHeight/2 - 35 + (Math.random() - 0.5) * 200) + 'px';
            sparkle.style.animation = 'sparklePop 1s forwards';
            document.body.appendChild(sparkle);

            setTimeout(() => {
                sparkle.remove();
            }, 1000);
        }, i * 50);
    }
}

// Pink sparkle mouse trail
document.addEventListener('mousemove', function(e) {
    if (Math.random() > 0.8) {
        const sparkle = document.createElement('div');
        sparkle.className = 'pink-sparkle';
        sparkle.style.left = (e.pageX - 35) + 'px';
        sparkle.style.top = (e.pageY - 35) + 'px';
        sparkle.style.animation = 'sparkleTrail 1s forwards';
        
        document.body.appendChild(sparkle);
        
        setTimeout(() => {
            sparkle.remove();
        }, 1000);
    }
});

// Add sparkle animations
const sparkleStyle = document.createElement('style');
sparkleStyle.textContent = `
    @keyframes sparklePop {
        0% { 
            transform: scale(0.5) rotate(0deg);
            opacity: 0.8;
        }
        50% { 
            transform: scale(1.3) rotate(180deg);
            opacity: 0.4;
        }
        100% { 
            transform: scale(1.5) rotate(360deg);
            opacity: 0;
        }
    }
    
    @keyframes sparkleTrail {
        0% { opacity: 0.7; transform: scale(0.8); }
        50% { opacity: 0.3; transform: scale(1.1); }
        100% { opacity: 0; transform: scale(1.3); }
    }
`;
document.head.appendChild(sparkleStyle);

// ========== FLOATING ELEMENTS ==========
function createFloatingDancer() {
    const symbols = ['💃', '🩰', '✨', '🌸', '🎀', '💖', '🌟', '🦄', '🌙'];
    const dancer = document.createElement('div');
    dancer.className = 'floating-dancer';
    dancer.innerHTML = symbols[Math.floor(Math.random() * symbols.length)];
    dancer.style.left = Math.random() * window.innerWidth + 'px';
    dancer.style.top = '100%';
    dancer.style.animationDuration = (4 + Math.random() * 3) + 's';
    dancer.style.fontSize = (18 + Math.random() * 15) + 'px';
    
    document.body.appendChild(dancer);
    
    setTimeout(() => {
        dancer.remove();
    }, 7000);
}

// Create occasional floating dancers
setInterval(createFloatingDancer, 2000);

// ========== INITIALIZE EVERYTHING ==========
document.addEventListener('DOMContentLoaded', function() {
    typeText(); // Start typing effect
    
    // Auto-start some effects
    setTimeout(() => {
        createSparkleBurst();
    }, 1000);

    // Pulse effect for header
    setInterval(() => {
        const header = document.querySelector('header');
        header.style.transform = 'scale(1.002)';
        setTimeout(() => {
            header.style.transform = 'scale(1)';
        }, 500);
    }, 3000);
});
</script>

</body>
</html>