<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin - Elsabrin</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: linear-gradient(135deg, #FFE4EC 0%, #FFD6E7 25%, #FFC0CB 50%, #FFB6C1 75%, #FF69B4 100%);
      overflow: hidden;
      position: relative;
    }

    /* Background Hearts */
    .hearts {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    .heart {
      position: absolute;
      color: #FF69B4;
      animation: floatHearts 8s infinite;
    }

    @keyframes floatHearts {
      0%, 100% { 
        transform: translateY(100vh) rotate(0deg);
        opacity: 0;
      }
      10% { opacity: 0.7; }
      50% { opacity: 0.4; }
      90% { opacity: 0; }
      100% { 
        transform: translateY(-100px) rotate(360deg);
        opacity: 0;
      }
    }

    /* Pink Glow Effect */
    .pink-glow {
      position: absolute;
      width: 300px;
      height: 300px;
      border-radius: 50%;
      filter: blur(60px);
      opacity: 0.4;
      z-index: -1;
    }

    .glow-1 {
      background: radial-gradient(circle, #FF69B4, transparent);
      top: 10%;
      left: 10%;
      animation: float 15s infinite ease-in-out;
    }

    .glow-2 {
      background: radial-gradient(circle, #FFB6C1, transparent);
      bottom: 10%;
      right: 10%;
      animation: float 18s infinite ease-in-out reverse;
    }

    .glow-3 {
      background: radial-gradient(circle, #FF1493, transparent);
      top: 50%;
      right: 20%;
      animation: float 12s infinite ease-in-out;
    }

    @keyframes float {
      0%, 100% { transform: translate(0, 0) scale(1); }
      25% { transform: translate(20px, -20px) scale(1.1); }
      50% { transform: translate(-15px, 15px) scale(0.9); }
      75% { transform: translate(-20px, -15px) scale(1.05); }
    }

    .login-container {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      padding: 40px 30px;
      border-radius: 20px;
      box-shadow: 
        0 10px 30px rgba(255, 182, 193, 0.3),
        0 0 0 1px rgba(255, 105, 180, 0.2),
        0 0 20px rgba(255, 105, 180, 0.1);
      width: 380px;
      text-align: center;
      position: relative;
      z-index: 1;
      border: 1px solid rgba(255, 182, 193, 0.3);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .login-container:hover {
      transform: translateY(-5px);
      box-shadow: 
        0 15px 35px rgba(255, 182, 193, 0.4),
        0 0 0 1px rgba(255, 105, 180, 0.3),
        0 0 30px rgba(255, 105, 180, 0.2);
    }

    .logo {
      margin-bottom: 20px;
    }

    .logo i {
      font-size: 50px;
      color: #FF69B4;
      margin-bottom: 10px;
      text-shadow: 0 0 15px rgba(255, 105, 180, 0.7);
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.05); }
    }

    .login-container h2 {
      margin-bottom: 25px;
      color: #6A3A4D;
      font-size: 28px;
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    .login-container h2 span {
      color: #FF69B4;
      text-shadow: 0 0 10px rgba(255, 105, 180, 0.5);
    }

    .form-group {
      margin-bottom: 20px;
      text-align: left;
      position: relative;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      color: #8B5E83;
      font-weight: 500;
      font-size: 14px;
    }

    .form-group input {
      width: 100%;
      padding: 12px 15px;
      background: rgba(255, 248, 251, 0.8);
      border: 2px solid rgba(255, 182, 193, 0.3);
      border-radius: 10px;
      font-size: 15px;
      outline: none;
      transition: all 0.3s;
      color: #6A3A4D;
    }

    .form-group input::placeholder {
      color: #C895B5;
    }

    .form-group input:focus {
      border-color: #FF69B4;
      box-shadow: 0 0 10px rgba(255, 105, 180, 0.5);
      background: rgba(255, 248, 251, 0.95);
    }

    .password-container {
      position: relative;
    }

    .toggle-password {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      background: none;
      border: none;
      color: #C895B5;
      cursor: pointer;
      font-size: 16px;
      transition: color 0.3s;
    }

    .toggle-password:hover {
      color: #FF69B4;
    }

    .remember-forgot {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
      font-size: 14px;
    }

    .remember-me {
      display: flex;
      align-items: center;
      color: #8B5E83;
    }

    .remember-me input {
      margin-right: 8px;
      accent-color: #FF69B4;
    }

    .forgot-password {
      color: #C895B5;
      text-decoration: none;
      transition: color 0.3s;
    }

    .forgot-password:hover {
      color: #FF69B4;
      text-decoration: underline;
    }

    .btn-login {
      width: 100%;
      background: linear-gradient(135deg, #FF69B4, #FF1493);
      color: #fff;
      padding: 14px;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s;
      position: relative;
      overflow: hidden;
      letter-spacing: 0.5px;
    }

    .btn-login::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: left 0.5s;
    }

    .btn-login:hover::before {
      left: 100%;
    }

    .btn-login:hover {
      background: linear-gradient(135deg, #FF1493, #FF69B4);
      box-shadow: 0 5px 15px rgba(255, 105, 180, 0.4);
      transform: translateY(-2px);
    }

    .btn-login:active {
      transform: translateY(0);
    }

    .login-container p {
      margin-top: 20px;
      font-size: 14px;
      color: #8B5E83;
    }

    .login-container a {
      color: #FF69B4;
      text-decoration: none;
      font-weight: 500;
      transition: all 0.3s;
    }

    .login-container a:hover {
      color: #FF1493;
      text-decoration: underline;
    }

    .security-notice {
      margin-top: 15px;
      padding: 10px;
      background: rgba(255, 248, 251, 0.8);
      border-radius: 8px;
      font-size: 12px;
      color: #8B5E83;
      border-left: 3px solid #FF69B4;
    }

    .security-notice i {
      margin-right: 5px;
      color: #FF69B4;
    }

    .alert {
      padding: 12px;
      border-radius: 8px;
      margin-bottom: 20px;
      font-size: 14px;
      text-align: left;
    }

    .alert-danger {
      background-color: rgba(255, 105, 180, 0.1);
      color: #FF1493;
      border: 1px solid rgba(255, 105, 180, 0.3);
    }

    .alert-success {
      background-color: rgba(152, 251, 152, 0.2);
      color: #32CD32;
      border: 1px solid rgba(152, 251, 152, 0.3);
    }

    /* Theme Toggle */
    .theme-toggle {
      position: absolute;
      top: 20px;
      right: 20px;
      background: rgba(255, 248, 251, 0.8);
      color: #FF69B4;
      border: none;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s;
    }

    .theme-toggle:hover {
      background: rgba(255, 105, 180, 0.2);
      color: #FF1493;
    }

    /* Loading Animation */
    .loading {
      display: none;
      width: 20px;
      height: 20px;
      border: 2px solid rgba(255,255,255,0.3);
      border-radius: 50%;
      border-top-color: #fff;
      animation: spin 1s ease-in-out infinite;
      margin: 0 auto;
    }

    @keyframes spin {
      to { transform: rotate(360deg); }
    }

    /* Pink Sparkle Effect */
    .pink-sparkle {
      position: absolute;
      width: 70px;
      height: 70px;
      background: radial-gradient(circle, rgba(255, 182, 193, 0.4) 0%, rgba(255, 182, 193, 0) 70%);
      border-radius: 50%;
      pointer-events: none;
      filter: blur(6px);
      animation: sparklePop 1s forwards;
    }

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

    /* Responsive */
    @media (max-width: 480px) {
      .login-container {
        width: 90%;
        padding: 30px 20px;
      }
      
      .login-container h2 {
        font-size: 24px;
      }
    }
  </style>
</head>
<body>
  <!-- Background Elements -->
  <div class="hearts" id="hearts"></div>
  <div class="pink-glow glow-1"></div>
  <div class="pink-glow glow-2"></div>
  <div class="pink-glow glow-3"></div>

  <div class="login-container">
    <button class="theme-toggle" id="themeToggle">
      <i class="fas fa-palette"></i>
    </button>

    <div class="logo">
      <i class="fas fa-crown"></i>
    </div>
    
    <h2>Login <span>Admin</span> Elsabrin</h2>
    
    <!-- Tampilkan error messages -->
    @if($errors->any())
      <div class="alert alert-danger">
        @foreach($errors->all() as $error)
          <p><i class="fas fa-exclamation-circle"></i> {{ $error }}</p>
        @endforeach
      </div>
    @endif

    @if(session('success'))
      <div class="alert alert-success">
        <i class="fas fa-check-circle"></i> {{ session('success') }}
      </div>
    @endif

    <form action="{{ route('admin.login') }}" method="POST" id="loginForm">
      @csrf
      <div class="form-group">
        <label for="email"><i class="fas fa-envelope"></i> Email</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email admin" value="{{ old('email') }}" required autofocus>
      </div>
      
      <div class="form-group">
        <label for="password"><i class="fas fa-lock"></i> Kata Sandi</label>
        <div class="password-container">
          <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required>
          <button type="button" class="toggle-password" id="togglePassword">
            <i class="fas fa-eye"></i>
          </button>
        </div>
      </div>

      <div class="remember-forgot">
        <label class="remember-me">
          <input type="checkbox" name="remember"> Ingat Saya
        </label>
        <a href="#" class="forgot-password">Lupa Password?</a>
      </div>

      <button type="submit" class="btn-login" id="loginButton">
        <span id="buttonText">Masuk ke Dashboard</span>
        <div class="loading" id="loadingSpinner"></div>
      </button>
    </form>

    <div class="security-notice">
      <i class="fas fa-shield-alt"></i> Area terbatas untuk administrator terauthorisasi
    </div>

    <p>Kembali ke <a href="{{ url('/') }}"><i class="fas fa-home"></i> halaman utama</a></p>
  </div>

  <script>
    // Create hearts background
    function createHearts() {
      const heartsContainer = document.getElementById('hearts');
      const heartsCount = 20;
      
      for (let i = 0; i < heartsCount; i++) {
        const heart = document.createElement('div');
        heart.classList.add('heart');
        heart.innerHTML = '💖';
        
        // Random position and delay
        const posX = Math.random() * 100;
        const delay = Math.random() * 8;
        const duration = 6 + Math.random() * 4;
        
        heart.style.left = `${posX}%`;
        heart.style.animationDelay = `${delay}s`;
        heart.style.animationDuration = `${duration}s`;
        heart.style.fontSize = `${15 + Math.random() * 20}px`;
        
        heartsContainer.appendChild(heart);
      }
    }

    // Create pink sparkle effect
    function createSparkleBurst() {
      for (let i = 0; i < 10; i++) {
        setTimeout(() => {
          const sparkle = document.createElement('div');
          sparkle.className = 'pink-sparkle';
          sparkle.style.left = (window.innerWidth/2 - 35 + (Math.random() - 0.5) * 200) + 'px';
          sparkle.style.top = (window.innerHeight/2 - 35 + (Math.random() - 0.5) * 200) + 'px';
          
          document.body.appendChild(sparkle);
          
          setTimeout(() => {
            sparkle.remove();
          }, 1000);
        }, i * 100);
      }
    }

    // Toggle password visibility
    document.getElementById('togglePassword').addEventListener('click', function() {
      const passwordInput = document.getElementById('password');
      const icon = this.querySelector('i');
      
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
      } else {
        passwordInput.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
      }
    });

    // Form submission with loading animation
    document.getElementById('loginForm').addEventListener('submit', function(e) {
      const button = document.getElementById('loginButton');
      const buttonText = document.getElementById('buttonText');
      const spinner = document.getElementById('loadingSpinner');
      
      // Show loading state
      buttonText.style.display = 'none';
      spinner.style.display = 'block';
      button.disabled = true;
      
      // Add sparkle effect on submit
      createSparkleBurst();
      
      // Simulate loading for demo (remove in production)
      setTimeout(() => {
        buttonText.style.display = 'block';
        spinner.style.display = 'none';
        button.disabled = false;
      }, 2000);
    });

    // Theme toggle functionality
    document.getElementById('themeToggle').addEventListener('click', function() {
      const icon = this.querySelector('i');
      const body = document.body;
      
      if (body.style.background.includes('#0f1b33')) {
        // Switch to pink theme
        body.style.background = 'linear-gradient(135deg, #FFE4EC 0%, #FFD6E7 25%, #FFC0CB 50%, #FFB6C1 75%, #FF69B4 100%)';
        document.querySelector('.login-container').style.background = 'rgba(255, 255, 255, 0.9)';
        document.querySelector('.login-container').style.color = '#6A3A4D';
      } else {
        // Switch to dark theme
        body.style.background = 'linear-gradient(135deg, #1a0f1c 0%, #2d1b2f 50%, #3d2740 100%)';
        document.querySelector('.login-container').style.background = 'rgba(45, 27, 47, 0.9)';
        document.querySelector('.login-container').style.color = '#FFC4D6';
      }
      
      // Add confetti effect
      if (typeof confetti !== 'undefined') {
        confetti({
          particleCount: 30,
          spread: 60,
          origin: { y: 0.6 },
          colors: ['#FF69B4', '#FFB6C1', '#FF1493']
        });
      }
    });

    // Input focus effects
    const inputs = document.querySelectorAll('input');
    inputs.forEach(input => {
      input.addEventListener('focus', function() {
        this.parentElement.classList.add('focused');
        createSparkleBurst();
      });
      
      input.addEventListener('blur', function() {
        this.parentElement.classList.remove('focused');
      });
    });

    // Pink sparkle mouse trail
    document.addEventListener('mousemove', function(e) {
      if (Math.random() > 0.95) {
        const sparkle = document.createElement('div');
        sparkle.className = 'pink-sparkle';
        sparkle.style.left = (e.pageX - 35) + 'px';
        sparkle.style.top = (e.pageY - 35) + 'px';
        sparkle.style.animation = 'sparklePop 1s forwards';
        
        document.body.appendChild(sparkle);
        
        setTimeout(() => {
          sparkle.remove();
        }, 1000);
      }
    });

    // Initialize hearts on load
    window.addEventListener('load', function() {
      createHearts();
      createSparkleBurst(); // Initial sparkle burst
    });
  </script>
</body>
</html>