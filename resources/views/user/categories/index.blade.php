<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori | Butik Elsabrin</title>
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

        /* Category Grid */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        
        .category-grid {
            display: grid;
            gap: 25px;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        }
        
        .category-card {
            background: 
                radial-gradient(circle at 20% 80%, rgba(255, 182, 193, 0.1) 0%, transparent 50%),
                linear-gradient(145deg, #FFF8FB, #FFF0F5);
            border-radius: 20px;
            padding: 0;
            text-align: center;
            box-shadow: 
                0 8px 20px rgba(255, 182, 193, 0.2);
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            border: 2px solid #FFB6C1;
            overflow: hidden;
        }
        
        .category-card::before {
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
        
        .category-card:hover::before {
            transform: scaleX(1);
        }
        
        .category-card:hover {
            transform: translateY(-8px);
            box-shadow: 
                0 12px 25px rgba(255, 182, 193, 0.4);
            border-color: #FFC0CB;
        }
        
        .category-image {
            height: 180px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #FFB6C1, #FF69B4);
        }
        
        .category-image i {
            font-size: 52px;
            color: white;
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        .category-content {
            padding: 25px 20px;
        }
        
        .category-content h3 {
            font-size: 1.4rem;
            background: linear-gradient(135deg, #FF69B4, #FF1493);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
            font-weight: 700;
        }
        
        .category-content p {
            color: #6A3A4D;
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 15px;
        }
        
        .category-count {
            display: inline-block;
            background: linear-gradient(135deg, #FFB6C1, #FF69B4);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(255, 182, 193, 0.3);
        }

        .emoji {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 24px;
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }

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
        
        .empty-state p {
            color: #6A3A4D;
            font-size: 1.2rem;
            font-weight: 600;
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

        body.dark-theme .category-card {
            background: linear-gradient(145deg, #2d1b2f, #1a0f1c);
            border-color: #FF5D8F;
            color: #FFC4D6;
        }

        body.dark-theme .category-content p {
            color: #FFC4D6;
        }

        body.dark-theme .typing-text {
            color: #FFC4D6;
        }

        body.dark-theme .empty-state p {
            color: #FFC4D6;
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
            
            .category-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 20px;
            }

            .theme-toggle {
                top: 10px;
                padding: 10px 15px;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {
            header {
                padding: 40px 15px;
            }
            
            header h1 {
                font-size: 1.8rem;
            }
            
            .category-grid {
                grid-template-columns: 1fr;
            }
            
            .nav-buttons {
                flex-direction: column;
                align-items: center;
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
    <h1>Kategori Produk Butik Elsabrin 🎀</h1>
    <p>Temukan koleksi eksklusif yang sesuai dengan gaya Anda</p>
</header>

<div class="nav-container">
    <div class="nav-buttons">
        <a href="{{ url('/') }}" class="nav-btn">
            <i class="fas fa-home"></i> Beranda
        </a>
        <a href="{{ url('/kategori') }}" class="nav-btn" style="background:linear-gradient(135deg, #FF69B4, #FF1493);">
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

    <div class="category-grid">
        @forelse($categories as $category)
            <div class="category-card" onclick="window.location.href='{{ route('user.categories.show', $category->id) }}'">
                <div class="category-image">
                    @if($category->image)
                        <img src="{{ asset('storage/'.$category->image) }}" alt="{{ $category->name }}" style="width:100%; height:100%; object-fit:cover;">
                    @else
                        @if(strtolower($category->name) == 'koko pria')
                            <i class="fas fa-tshirt"></i>
                            <div class="emoji">💪</div>
                        @elseif(strtolower($category->name) == 'dress')
                            <i class="fas fa-female"></i>
                            <div class="emoji">✨</div>
                        @elseif(strtolower($category->name) == 'aksesoris')
                            <i class="fas fa-gem"></i>
                            <div class="emoji">💎</div>
                        @else
                            <i class="fas fa-shopping-bag"></i>
                            <div class="emoji">🎀</div>
                        @endif
                    @endif
                </div>

                <div class="category-content">
                    @if(strtolower($category->name) == 'koko pria')
                        <h3>{{ $category->name }} 💪</h3>
                    @elseif(strtolower($category->name) == 'dress')
                        <h3>{{ $category->name }} 👗</h3>
                    @elseif(strtolower($category->name) == 'aksesoris')
                        <h3>{{ $category->name }} 💎</h3>
                    @else
                        <h3>{{ $category->name }} 🎀</h3>
                    @endif
                    
                    <p>{{ $category->description ?? 'Koleksi spesial untuk penampilan terbaikmu' }}</p>
                    <div class="category-count">{{ $category->products_count }} Produk</div>
                </div>
            </div>
        @empty
            <div class="empty-state">
                <i class="fas fa-folder-open"></i>
                <p>Belum ada kategori produk tersedia</p>
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

<!-- Confetti Script -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
<script>
// ========== VARIABLES GLOBAL ==========
let isDarkTheme = false; // Default light theme (pink)
let clickCount = 0;

// ========== TYPING EFFECT ==========
const typingTexts = [
    "✨ Jelajahi berbagai kategori fashion menarik!",
    "💖 Temukan gaya yang paling cocok untuk Anda!",
    "🎀 Setiap kategori punya keunikan tersendiri!",
    "🌟 Koleksi eksklusif hanya di Butik Elsabrin!",
    "🦄 Pilih kategori favorit dan temukan kejutan!"
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

// ========== CARD CLICK EFFECTS ==========
document.querySelectorAll('.category-card').forEach(card => {
    card.addEventListener('click', function() {
        this.style.transform = 'scale(0.95)';
        this.style.opacity = '0.8';
        createSparkleBurst();
        
        setTimeout(() => {
            window.location.href = this.getAttribute('onclick').match(/'([^']+)'/)[1];
        }, 300);
    });
});

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