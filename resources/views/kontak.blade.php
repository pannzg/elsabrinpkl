<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kontak Kami | Butik Elsabrin</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap');

.oval-text-waglownya {
  display: inline-block;
  padding: 10px 26px;
  border-radius: 999px;
  background: linear-gradient(90deg, #ff5fa2, #ff4f93, #ff2e84);
  color: #fff8fb; /* putih lembut dengan hint pink */
  font-family: 'Poppins', sans-serif;
  font-weight: 600;
  font-size: 15px;
  text-align: center;
  letter-spacing: 0.4px;
  box-shadow: 0 4px 20px rgba(255, 51, 153, 0.5),
              0 0 15px rgba(255, 102, 178, 0.4);
  border: none;
  transition: all 0.3s ease-in-out;
}

/* Hover efek glow lembut */
.oval-text-waglownya:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 25px rgba(255, 102, 178, 0.7),
              0 0 25px rgba(255, 153, 204, 0.6);
  text-shadow: 0 0 8px rgba(255, 255, 255, 1);
}

/* Responsif */
@media (max-width: 480px) {
  .oval-text-waglownya {
    padding: 8px 18px;
    font-size: 13.5px;
  }
}

    .oval-text-pinkdarkglow {
  display: inline-block;
  padding: 10px 26px;
  border-radius: 999px;
  background: linear-gradient(135deg, #b30059 0%, #d63384 40%, #ff4da6 100%);
  color: #fffafc; /* putih lembut agak krem agar kontras tapi tidak keras */
  font-weight: 600;
  font-size: 14px;
  letter-spacing: 0.3px;
  text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
  box-shadow: 0 0 20px rgba(255, 51, 153, 0.7),
              0 4px 16px rgba(255, 102, 178, 0.5);
  border: 1px solid rgba(255, 255, 255, 0.15);
  transition: all 0.3s ease-in-out;
}

/* Hover efek glowing */
.oval-text-pinkdarkglow:hover {
  transform: translateY(-2px);
  box-shadow: 0 0 30px rgba(255, 102, 178, 0.9),
              0 8px 22px rgba(255, 0, 128, 0.6);
}

/* Responsif */
@media (max-width: 480px) {
  .oval-text-pinkdarkglow {
    padding: 8px 18px;
    font-size: 13px;
  }
}


    .oval-text-pinkglow {
  display: inline-block;
  padding: 10px 24px;
  border-radius: 999px;
  background: linear-gradient(135deg, #ffd1dc 0%, #ffb6c1 40%, #ff8fab 100%);
  color: #ffffff;
  font-weight: 500;
  font-size: 14px;
  box-shadow: 0 0 18px rgba(255, 182, 193, 0.6),
              0 4px 12px rgba(255, 105, 180, 0.3);
  border: 1px solid rgba(255, 255, 255, 0.3);
  text-shadow: 0 1px 2px rgba(255, 255, 255, 0.15);
  transition: all 0.3s ease;
}

/* Efek hover lembut */
.oval

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
        max-width: 1000px;
        margin: 0 auto;
        padding: 30px 20px;
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

    /* Contact Section Styles */
    .contact-section {
        margin: 30px 0;
        background: 
            radial-gradient(circle at 20% 80%, rgba(255, 182, 193, 0.1) 0%, transparent 50%),
            linear-gradient(145deg, #FFF8FB, #FFF0F5);
        border-radius: 25px;
        padding: 35px 25px;
        box-shadow: 
            0 6px 18px rgba(255, 182, 193, 0.25);
        border: 3px dashed #FFB6C1;
        position: relative;
        overflow: hidden;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
    }

    .contact-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #FFB6C1, #FF69B4, #FF1493);
        border-radius: 25px 25px 0 0;
    }

    .contact-title {
        font-size: 2.2rem;
        background: linear-gradient(135deg, #FF69B4, #FF1493);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 8px;
        font-weight: 700;
        text-align: center;
    }

    .contact-subtitle {
        text-align: center;
        color: #6A3A4D;
        margin-bottom: 30px;
        font-size: 1rem;
    }

    /* Form Styles */
    .contact-form {
        max-width: 700px;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        display: block;
        margin-bottom: 6px;
        font-weight: 600;
        color: #FF1493;
        font-size: 1rem;
    }

    .input-group {
        display: flex;
        align-items: center;
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 3px 12px rgba(255, 182, 193, 0.15);
        border: 2px dashed #FFB6C1;
        transition: all 0.3s ease;
    }

    .input-group:focus-within {
        border-color: #FF69B4;
        box-shadow: 0 4px 15px rgba(255, 182, 193, 0.25);
        transform: translateY(-2px);
    }

    .input-icon {
        padding: 12px 16px;
        background: linear-gradient(135deg, #FFB6C1, #FF69B4);
        color: white;
        font-size: 1.1rem;
        min-width: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-control {
        flex: 1;
        border: none;
        padding: 12px 16px;
        font-size: 0.95rem;
        background: transparent;
        color: #6A3A4D;
        outline: none;
        font-family: 'Baloo 2', cursive;
    }

    .form-control::placeholder {
        color: #CC9AA6;
    }

    textarea.form-control {
        resize: vertical;
        min-height: 100px;
    }

    select.form-control {
        cursor: pointer;
    }

    /* Submit Button */
    .submit-btn {
        background: linear-gradient(135deg, #FFB6C1, #FF69B4);
        color: white;
        border: none;
        padding: 15px 35px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 1.1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 
            0 5px 15px rgba(255, 182, 193, 0.35);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 100%;
        margin-top: 25px;
        position: relative;
        overflow: hidden;
    }

    .submit-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.5s;
    }

    .submit-btn:hover::before {
        left: 100%;
    }

    .submit-btn:hover {
        background: linear-gradient(135deg, #FF69B4, #FF1493);
        transform: translateY(-2px);
        box-shadow: 
            0 8px 20px rgba(255, 182, 193, 0.5);
    }

    /* Contact Info */
    .contact-info {
        text-align: center;
        margin-top: 40px;
        padding-top: 25px;
        border-top: 2px dashed #FFB6C1;
    }

    .contact-info h5 {
        color: #FF1493;
        margin-bottom: 12px;
        font-weight: 700;
        font-size: 1.2rem;
    }

    .contact-details {
        color: #6A3A4D;
        margin-bottom: 20px;
        font-size: 1rem;
    }
    .contact-details-wa {
        color: #ffffffff;
        margin-bottom: 20px;
        font-size: 1rem;
    }

    .direct-wa-btn {
        background: linear-gradient(135deg, #25D366, #128C7E);
        color: white;
        text-decoration: none;
        padding: 12px 25px;
        border-radius: 50px;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(37, 211, 102, 0.35);
        border: 2px solid rgba(255, 255, 255, 0.2);
        font-size: 0.95rem;
    }

    .direct-wa-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 7px 20px rgba(37, 211, 102, 0.5);
        color: white;
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

    body.dark-theme .contact-section {
        background: linear-gradient(145deg, #2d1b2f, #1a0f1c);
        border-color: #FF5D8F;
    }

    body.dark-theme .contact-subtitle {
        color: #FFC4D6;
    }

    body.dark-theme .form-label {
        color: #FF5D8F;
    }

    body.dark-theme .input-group {
        background: #2d1b2f;
        border-color: #FF5D8F;
    }

    body.dark-theme .form-control {
        color: #FFC4D6;
        background: #2d1b2f;
    }

    body.dark-theme .form-control::placeholder {
        color: #CC9AA6;
    }

    body.dark-theme .contact-details {
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
        padding: 30px 20px;
        margin-top: 50px;
        border-radius: 35px 35px 0 0;
        box-shadow: 
            0 -4px 12px rgba(255, 182, 193, 0.35);
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
        margin: 0 12px;
        font-size: 1.3rem;
        cursor: pointer;
        transition: all 0.3s ease;
        opacity: 0.9;
    }
    
    footer i:hover {
        transform: scale(1.15) translateY(-2px);
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

        .contact-title {
            font-size: 1.8rem;
        }

        .contact-section {
            padding: 25px 20px;
            margin: 20px 15px;
        }

        .input-group {
            flex-direction: column;
            align-items: stretch;
        }

        .input-icon {
            min-width: auto;
            padding: 10px 15px;
        }

        .form-control {
            padding: 10px 15px;
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

        .contact-title {
            font-size: 1.6rem;
        }

        .submit-btn {
            padding: 12px 25px;
            font-size: 1rem;
        }

        .contact-section {
            padding: 20px 15px;
            margin: 15px 10px;
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
    <h1>Hubungi Kami 💕</h1>
    <p>Kami siap membantu Anda dengan senang hati</p>
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
        <a href="{{ url('/kontak') }}" class="nav-btn" style="background:linear-gradient(135deg, #FF69B4, #FF1493);">
            <i class="fas fa-envelope"></i> Kontak
        </a>
    </div>
</div>

<div class="container">
    <!-- Typing Effect -->
    <div class="typing-text" id="typingText"></div>

    <!-- Contact Section dengan border dashed -->
    <div class="contact-section">
        <h1 class="contact-title">Hubungi Kami 💌</h1>
        <p class="contact-subtitle">Pesanmu akan langsung terkirim via WhatsApp 📲</p>

        <form id="waForm" class="contact-form">
            <div class="form-group">
                <label class="form-label">Nama</label>
                <div class="input-group">
                    <div class="input-icon">👤</div>
                    <input type="text" id="nama" class="form-control" placeholder="Nama kamu" required>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Ukuran</label>
                <div class="input-group">
                    <div class="input-icon">📏</div>
                    <select id="ukuran" class="form-control" required>
                        <option value="">Pilih Ukuran</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="XXXL">XXXL</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Pesan</label>
                <div class="input-group">
                    <div class="input-icon">💬</div>
                    <textarea id="pesan" class="form-control" rows="4" placeholder="Tulis pesanmu disini..." required></textarea>
                </div>
            </div>

            <button type="submit" class="submit-btn">
                <i class="fab fa-whatsapp"></i> Kirim via WhatsApp 💖
            </button>
        </form>

        <!-- Info Kontak -->
        <div class="contact-info">
            <h5>Atau hubungi kami langsung:</h5>
            <p class="contact-details">📞 Telepon: 0812-3456-7890</p>
<p class="contact-details-wa oval-text-waglownya">
  Belum yakin mau beli? Gak apa-apa, tanya dulu aja ya lewat WhatsApp 😊
</p>

            <a href="https://wa.me/628119410388" target="_blank" class="direct-wa-btn">
                <i class="fab fa-whatsapp"></i> Chat via WhatsApp
            </a>
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
    "✨ Hubungi kami untuk konsultasi fashion terbaik!",
    "💖 Kami siap membantu Anda dengan senang hati!",
    "🎀 Pesan langsung terkirim via WhatsApp!",
    "🌟 Tim kami akan merespons dengan cepat!",
    "🦄 Butik Elsabrin - Partner fashion terpercaya!"
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

// ========== WHATSAPP FORM ==========
document.getElementById("waForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let nama = document.getElementById("nama").value;
    let ukuran = document.getElementById("ukuran").value;
    let pesan = document.getElementById("pesan").value;

    let nomor = "628119410388"; // Nomor WA Owner
    let text = `Halo, saya mau tanya/order.%0A%0A👤 Nama: ${nama}%0A📏 Ukuran: ${ukuran}%0A💬 Pesan: ${pesan}`;
    let url = `https://wa.me/${nomor}?text=${text}`;

    // Sparkle effect saat submit
    createSparkleBurst();
    
    // Confetti effect
    confetti({
        particleCount: 100,
        spread: 70,
        origin: { y: 0.6 },
        colors: ['#FFB6C1', '#FF69B4', '#FF1493']
    });

    window.open(url, "_blank");
});

// ========== FORM VALIDATION ANIMATION ==========
document.querySelectorAll('.form-control').forEach(input => {
    input.addEventListener('focus', function() {
        this.parentElement.style.transform = 'translateY(-2px)';
        this.parentElement.style.boxShadow = '0 4px 15px rgba(255, 182, 193, 0.25)';
        createSparkleBurst();
    });
    
    input.addEventListener('blur', function() {
        this.parentElement.style.transform = 'translateY(0)';
        this.parentElement.style.boxShadow = '0 3px 12px rgba(255, 182, 193, 0.15)';
    });
});

// ========== INITIALIZE EVERYTHING ==========
document.addEventListener('DOMContentLoaded', function() {
    typeText(); // Start typing effect
    
    // Auto-start some effects
    setTimeout(() => {
        createSparkleBurst();
    }, 1000);

    // Add hover effects to form elements
    document.querySelectorAll('.input-group, .submit-btn, .direct-wa-btn').forEach(element => {
        element.addEventListener('mouseenter', function() {
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