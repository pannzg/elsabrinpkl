<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tentang Kami | Butik Elsabrin</title>
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

    /* About Section Styles */
    .about-section {
        margin: 40px 0;
        background: 
            radial-gradient(circle at 20% 80%, rgba(255, 182, 193, 0.1) 0%, transparent 50%),
            linear-gradient(145deg, #FFF8FB, #FFF0F5);
        border-radius: 25px;
        padding: 40px 30px;
        box-shadow: 
            0 8px 25px rgba(255, 182, 193, 0.2);
        border: 2px solid #FFB6C1;
        position: relative;
        overflow: hidden;
    }

    .about-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #FFB6C1, #FF69B4, #FF1493);
        border-radius: 25px 25px 0 0;
    }

    .about-content {
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
    }

    .about-title {
        font-size: 2.5rem;
        background: linear-gradient(135deg, #FF69B4, #FF1493);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 20px;
        font-weight: 700;
    }

    .about-icons {
        font-size: 2.5rem;
        margin-bottom: 30px;
        color: #FF69B4;
        animation: float 3s ease-in-out infinite;
    }

    .about-text {
        font-size: 1.15rem;
        line-height: 1.8;
        color: #6A3A4D;
        margin-bottom: 25px;
        text-align: left;
    }

    .about-highlight {
        color: #FF1493;
        font-weight: 700;
        font-family: 'Baloo 2', cursive;
    }

    .about-features {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin: 40px 0;
    }

    .feature-card {
        background: 
            radial-gradient(circle at 20% 80%, rgba(255, 182, 193, 0.15) 0%, transparent 50%),
            linear-gradient(145deg, #FFF8FB, #FFF0F5);
        border-radius: 20px;
        padding: 30px 25px;
        text-align: center;
        box-shadow: 
            0 6px 20px rgba(255, 182, 193, 0.2);
        transition: all 0.3s ease;
        border: 2px solid #FFB6C1;
        position: relative;
        overflow: hidden;
    }

    .feature-card:hover {
        transform: translateY(-8px);
        box-shadow: 
            0 12px 25px rgba(255, 182, 193, 0.3);
        border-color: #FF69B4;
    }

    .feature-icon {
        font-size: 3rem;
        margin-bottom: 20px;
        background: linear-gradient(135deg, #FFC0CB, #FFB6C1, #FF69B4);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: float 3s ease-in-out infinite;
    }

    .feature-title {
        font-size: 1.3rem;
        color: #FF1493;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .feature-desc {
        color: #6A3A4D;
        line-height: 1.6;
        font-size: 1rem;
    }

    .team-section {
        margin: 50px 0;
        text-align: center;
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 30px;
        margin-top: 30px;
    }

    .team-member {
        background: 
            radial-gradient(circle at 20% 80%, rgba(255, 182, 193, 0.15) 0%, transparent 50%),
            linear-gradient(145deg, #FFF8FB, #FFF0F5);
        border-radius: 20px;
        padding: 25px;
        box-shadow: 
            0 6px 20px rgba(255, 182, 193, 0.2);
        border: 2px solid #FFB6C1;
        transition: all 0.3s ease;
    }

    .team-member:hover {
        transform: translateY(-5px);
        box-shadow: 
            0 10px 25px rgba(255, 182, 193, 0.3);
    }

    .member-avatar {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: linear-gradient(135deg, #FFB6C1, #FF69B4);
        margin: 0 auto 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.5rem;
        color: white;
        box-shadow: 0 4px 15px rgba(255, 182, 193, 0.4);
    }

    .member-name {
        font-size: 1.2rem;
        color: #FF1493;
        margin-bottom: 5px;
        font-weight: 700;
    }

    .member-role {
        color: #6A3A4D;
        font-size: 0.95rem;
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
        z-index: 1;
    }

    /* Dark Theme untuk kontras */
    body.dark-theme {
        background: linear-gradient(135deg, #1a0f1c 0%, #2d1b2f 50%, #3d2740 100%);
        color: #FFC4D6;
    }

    body.dark-theme .about-section {
        background: linear-gradient(145deg, #2d1b2f, #1a0f1c);
        border-color: #FF5D8F;
    }

    body.dark-theme .about-text {
        color: #FFC4D6;
    }

    body.dark-theme .feature-card {
        background: linear-gradient(145deg, #2d1b2f, #1a0f1c);
        border-color: #FF5D8F;
    }

    body.dark-theme .feature-desc {
        color: #FFC4D6;
    }

    body.dark-theme .team-member {
        background: linear-gradient(145deg, #2d1b2f, #1a0f1c);
        border-color: #FF5D8F;
    }

    body.dark-theme .member-role {
        color: #FFC4D6;
    }

    body.dark-theme .typing-text {
        color: #FFC4D6;
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

    /* Animations */
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

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

        .about-title {
            font-size: 2rem;
        }

        .about-features {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        header {
            padding: 40px 15px;
        }
        
        header h1 {
            font-size: 1.8rem;
        }
        
        .theme-toggle {
            padding: 8px 12px;
            font-size: 0.8rem;
        }

        .about-section {
            padding: 30px 20px;
        }

        .about-title {
            font-size: 1.7rem;
        }

        .about-text {
            font-size: 1rem;
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
    <h1>Tentang Butik Elsabrin 💕</h1>
    <p>Mengenal lebih dekat dengan fashion pilihan wanita modern</p>
</header>

<div class="nav-container">
    <div class="nav-buttons">
        <a href="{{ url('/') }}" class="nav-btn">
            <i class="fas fa-home"></i> Beranda
        </a>
        <a href="{{ url('/kategori') }}" class="nav-btn">
            <i class="fas fa-th-large"></i> Kategori
        </a>
        <a href="{{ url('/tentang') }}" class="nav-btn" style="background:linear-gradient(135deg, #FF69B4, #FF1493);">
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

    <!-- About Section -->
    <div class="about-section">
        <div class="about-content">
            <div class="about-icons">
                👗 👜 👒 🧕
            </div>
            <h1 class="about-title">Tentang Elsabrin Butik</h1>
            
            <p class="about-text">
                <span class="about-highlight">Elsabrin Butik</span> adalah tempat fashion pilihan untuk wanita modern
                yang menginginkan gaya <b>elegan</b>, <b>anggun</b>, dan tetap nyaman.
                Kami menyediakan berbagai koleksi busana muslim, gamis,
                dress, hingga tunik dengan bahan berkualitas tinggi 👗.
            </p>

            <p class="about-text">
                Dengan mengutamakan <b>kualitas</b>, <b>pelayanan ramah</b>, dan
                <b>desain yang mengikuti tren</b>, 
                <span class="about-highlight">Elsabrin Butik</span> hadir
                untuk membuat setiap momen Anda lebih percaya diri 🌸✨.
            </p>

            <div class="about-icons" style="font-size: 2rem; margin-top: 20px;">
                🧥 👡 🧕 💄
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <h2>🌟 Keunggulan Kami</h2>
    <div class="about-features">
        <div class="feature-card">
            <div class="feature-icon">👗</div>
            <h3 class="feature-title">Koleksi Eksklusif</h3>
            <p class="feature-desc">Busana muslim, gamis, dan dress dengan desain terkini dan bahan premium</p>
        </div>
        
        <div class="feature-card">
            <div class="feature-icon">💝</div>
            <h3 class="feature-title">Pelayanan Ramah</h3>
            <p class="feature-desc">Tim kami siap membantu Anda menemukan gaya yang paling sesuai dengan kepribadian</p>
        </div>
        
        <div class="feature-card">
            <div class="feature-icon">🚀</div>
            <h3 class="feature-title">Pengiriman Cepat</h3>
            <p class="feature-desc">Pesanan diproses dengan cepat dan dikirim ke seluruh Indonesia</p>
        </div>
        
        <div class="feature-card">
            <div class="feature-icon">⭐</div>
            <h3 class="feature-title">Kualitas Terjamin</h3>
            <p class="feature-desc">Setiap produk melalui proses quality control untuk memastikan kepuasan pelanggan</p>
        </div>
    </div>

    <!-- Team Section -->
    <div class="team-section">
        <h2>👥 Tim Kami</h2>
        <div class="team-grid">
            <div class="team-member">
                <div class="member-avatar">👩</div>
                <h3 class="member-name">BU YANTI</h3>
                <p class="member-role">Founder & Creative Director of Butik Elsabrin</p>
            </div>
            
            <div class="team-member">
                <div class="member-avatar">👩</div>
                <h3 class="member-name">FANNY ASSYFA</h3>
                <p class="member-role">Full-Stack Developer</p>
            </div>
            
            <div class="team-member">
                <div class="member-avatar">👩</div>
                <h3 class="member-name">RATU AZZAHRA</h3>
                <p class="member-role">Full-Stack Developer</p>
            </div>
        </div>
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

// ========== TYPING EFFECT ==========
const typingTexts = [
    "✨ Mengenal lebih dekat dengan Butik Elsabrin!",
    "💖 Fashion pilihan untuk wanita modern dan elegan!",
    "🎀 Kualitas terbaik dengan pelayanan yang ramah!",
    "🌟 Tim profesional siap membantu gaya Anda!",
    "🦄 Percayakan fashion terbaik Anda pada kami!"
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

// ========== INITIALIZE EVERYTHING ==========
document.addEventListener('DOMContentLoaded', function() {
    typeText(); // Start typing effect
    
    // Auto-start some effects
    setTimeout(() => {
        createSparkleBurst();
    }, 1000);

    // Add hover effects to feature cards and team members
    document.querySelectorAll('.feature-card, .team-member').forEach(card => {
        card.addEventListener('mouseenter', function() {
            createSparkleBurst();
        });
    });

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