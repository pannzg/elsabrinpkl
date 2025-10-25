<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Elsabrin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { 
            margin: 0; 
            padding: 0; 
            box-sizing: border-box; 
            font-family: 'Baloo 2', cursive, sans-serif; 
        }
        
        body { 
            background: 
                radial-gradient(circle at 20% 80%, rgba(255, 182, 193, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 105, 180, 0.1) 0%, transparent 50%),
                linear-gradient(135deg, #FFF0F5 0%, #FFE4EC 25%, #FFD6E7 50%, #FFC0CB 75%, #FFB6C1 100%); 
            min-height: 100vh; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            padding: 20px; 
            position: relative;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 10% 20%, rgba(255, 182, 193, 0.1) 0%, transparent 25%),
                radial-gradient(circle at 90% 80%, rgba(255, 105, 180, 0.08) 0%, transparent 25%);
            pointer-events: none;
            z-index: -1;
        }

        .container { 
            display: flex; 
            max-width: 1000px; 
            width: 100%; 
            background: rgba(255, 255, 255, 0.95); 
            border-radius: 25px; 
            box-shadow: 
                0 20px 40px rgba(255, 182, 193, 0.3),
                0 8px 20px rgba(255, 105, 180, 0.2);
            border: 2px solid rgba(255, 182, 193, 0.3);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            min-height: 600px;
        }

        .container:hover {
            transform: translateY(-5px);
            box-shadow: 
                0 25px 50px rgba(255, 182, 193, 0.4),
                0 12px 25px rgba(255, 105, 180, 0.3);
        }

        .illustration { 
            flex: 1; 
            background: 
                radial-gradient(circle at 30% 70%, rgba(255, 182, 193, 0.4) 0%, transparent 50%),
                linear-gradient(135deg, #FFB6C1 0%, #FF69B4 50%, #FF1493 100%); 
            display: flex; 
            flex-direction: column; 
            justify-content: center; 
            align-items: center; 
            padding: 40px; 
            color: white; 
            position: relative;
            border-radius: 25px 0 0 25px;
        }

        .illustration::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                linear-gradient(45deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 50%);
            pointer-events: none;
            border-radius: 25px 0 0 25px;
        }

        .illustration-content { 
            text-align: center; 
            z-index: 1;
            position: relative;
        }
        
        .illustration i { 
            font-size: 100px; 
            margin-bottom: 25px; 
            filter: drop-shadow(0 8px 15px rgba(0, 0, 0, 0.2));
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }
        
        .illustration h2 { 
            font-size: 32px; 
            margin-bottom: 20px; 
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }
        
        .illustration p { 
            font-size: 16px; 
            opacity: 0.95; 
            line-height: 1.6;
            font-weight: 500;
        }
        
        .auth-form { 
            flex: 1; 
            padding: 50px 40px; 
            background: 
                radial-gradient(circle at 80% 20%, rgba(255, 182, 193, 0.1) 0%, transparent 50%),
                linear-gradient(145deg, #FFFFFF, #FFF8FB);
            border-radius: 0 25px 25px 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .logo { 
            text-align: center; 
            margin-bottom: 35px; 
        }
        
        .logo h1 { 
            background: linear-gradient(135deg, #FF69B4, #FF1493);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 36px; 
            font-weight: 700; 
            letter-spacing: 1px; 
        }
        
        .logo span { 
            color: #FFB6C1; 
        }
        
        .auth-form h2 { 
            background: linear-gradient(135deg, #FF69B4, #FF1493);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 28px; 
            margin-bottom: 35px; 
            text-align: center; 
            font-weight: 700;
        }
        
        .form-group { 
            margin-bottom: 25px; 
        }
        
        .form-group label { 
            display: block; 
            margin-bottom: 10px; 
            color: #6A3A4D; 
            font-weight: 600; 
            font-size: 15px;
        }
        
        .input-with-icon { 
            position: relative; 
        }
        
        .input-with-icon i { 
            position: absolute; 
            left: 18px; 
            top: 50%; 
            transform: translateY(-50%); 
            color: #FF69B4; 
            font-size: 16px;
        }
        
        .input-with-icon input { 
            width: 100%; 
            padding: 16px 18px 16px 50px; 
            border: 2px solid #FFE4EC; 
            border-radius: 12px; 
            font-size: 16px; 
            transition: all 0.3s; 
            background: rgba(255, 255, 255, 0.9);
            color: #6A3A4D;
            font-weight: 500;
        }
        
        .input-with-icon input:focus { 
            border-color: #FF69B4; 
            outline: none; 
            box-shadow: 0 0 0 3px rgba(255, 105, 180, 0.2); 
            background: white;
            transform: translateY(-2px);
        }

        .input-with-icon input::placeholder {
            color: #D4A5B5;
            font-weight: 400;
        }
        
        .form-options { 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            margin-bottom: 30px; 
        }
        
        .remember-me { 
            display: flex; 
            align-items: center; 
        }
        
        .remember-me input { 
            margin-right: 10px; 
            accent-color: #FF69B4; 
            transform: scale(1.1);
        }
        
        .remember-me label { 
            color: #6A3A4D; 
            font-weight: 500;
        }
        
        .forgot-password { 
            color: #FF69B4; 
            text-decoration: none; 
            font-weight: 600; 
            transition: all 0.3s; 
            font-size: 14px;
        }
        
        .forgot-password:hover { 
            color: #FF1493; 
            text-decoration: underline; 
            transform: translateY(-1px);
        }
        
        .btn { 
            width: 100%; 
            padding: 16px; 
            background: linear-gradient(135deg, #FFB6C1, #FF69B4); 
            border: none; 
            border-radius: 12px; 
            color: white; 
            font-size: 16px; 
            font-weight: 700; 
            cursor: pointer; 
            transition: all 0.3s; 
            box-shadow: 0 6px 15px rgba(255, 182, 193, 0.4);
            border: 2px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
        }
        
        .btn:hover::before {
            left: 100%;
        }

        .btn:hover { 
            background: linear-gradient(135deg, #FF69B4, #FF1493); 
            transform: translateY(-3px); 
            box-shadow: 0 10px 25px rgba(255, 182, 193, 0.5); 
        }
        
        .btn:active { 
            transform: translateY(-1px); 
        }
        
        .auth-footer { 
            text-align: center; 
            margin-top: 30px; 
            color: #6A3A4D; 
        }
        
        .auth-footer a { 
            color: #FF69B4; 
            text-decoration: none; 
            font-weight: 600; 
            transition: all 0.3s; 
        }
        
        .auth-footer a:hover { 
            color: #FF1493; 
            text-decoration: underline; 
        }
        
        .divider { 
            display: flex; 
            align-items: center; 
            margin: 30px 0; 
        }
        
        .divider span { 
            flex: 1; 
            height: 1px; 
            background: #FFE4EC; 
        }
        
        .divider p { 
            padding: 0 15px; 
            color: #D4A5B5; 
            font-size: 14px; 
            font-weight: 500;
        }
        
        .social-login { 
            display: flex; 
            justify-content: center; 
            gap: 20px; 
            margin-top: 25px; 
        }
        
        .social-btn { 
            width: 55px; 
            height: 55px; 
            border-radius: 50%; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            background: #FFF8FB; 
            color: #6A3A4D; 
            border: 2px solid #FFE4EC; 
            cursor: pointer; 
            transition: all 0.3s; 
            font-size: 18px;
        }
        
        .social-btn:hover { 
            transform: translateY(-5px); 
            box-shadow: 0 8px 20px rgba(255, 182, 193, 0.3); 
        }
        
        .facebook:hover { 
            background: #3b5998; 
            color: white; 
            border-color: #3b5998;
        }
        
        .google:hover { 
            background: #dd4b39; 
            color: white; 
            border-color: #dd4b39;
        }
        
        .twitter:hover { 
            background: #1da1f2; 
            color: white; 
            border-color: #1da1f2;
        }

        .alert {
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 25px;
            font-size: 14px;
            font-weight: 500;
            border: 2px solid;
            animation: slideDown 0.5s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .alert-danger {
            background: linear-gradient(135deg, #FFE4EC, #FFF0F5);
            color: #C2185B;
            border-color: #FFB6C1;
        }

        /* STYLE BARU UNTUK HIGHLIGHT OVAL PADA DAFTAR */
        .register-link {
            position: relative;
            display: inline-block;
            padding: 8px 20px;
            background: linear-gradient(135deg, #FFB6C1, #FF69B4);
            color: white !important;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 700;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(255, 182, 193, 0.4);
            border: 2px solid rgba(255, 255, 255, 0.3);
            margin-left: 8px;
        }

        .register-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
            border-radius: 25px;
        }

        .register-link:hover::before {
            left: 100%;
        }

        .register-link:hover {
            background: linear-gradient(135deg, #FF69B4, #FF1493);
            transform: translateY(-2px) scale(1.05);
            box-shadow: 0 6px 18px rgba(255, 182, 193, 0.6);
            color: white !important;
            text-decoration: none;
        }

        .auth-footer {
            position: relative;
        }

        .auth-footer p {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 8px;
        }

        .highlight-text {
            font-weight: 600;
            color: #6A3A4D;
        }

        .sparkle {
            position: absolute;
            font-size: 12px;
            opacity: 0;
            animation: sparklePop 1s ease-out;
            pointer-events: none;
        }

        @keyframes sparklePop {
            0% { opacity: 0; transform: scale(0) rotate(0deg); }
            50% { opacity: 1; transform: scale(1.2) rotate(180deg); }
            100% { opacity: 0; transform: scale(1) rotate(360deg); }
        }

        @media (min-width: 768px) { 
            .illustration { 
                display: flex; 
            } 
        }
        
        @media (max-width: 767px) { 
            .container { 
                flex-direction: column; 
                min-height: auto;
            } 
            .auth-form { 
                padding: 40px 30px; 
                border-radius: 0 0 25px 25px;
            } 
            .illustration {
                padding: 30px 20px;
                border-radius: 25px 25px 0 0;
            }
            .illustration i {
                font-size: 80px;
            }
            .illustration h2 {
                font-size: 26px;
            }
        }

        /* Perbaikan untuk scrolling dan tinggi */
        html, body {
            overflow-x: hidden;
            height: auto;
        }
        
        .container {
            max-height: 90vh;
            overflow-y: auto;
        }
        
        @media (max-height: 700px) {
            .container {
                margin: 20px 0;
            }
        }

        /* Pastikan illustration selalu penuh tinggi */
        .illustration {
            min-height: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="illustration">
            <div class="illustration-content">
                <i class="fas fa-heart"></i>
                <h2>Selamat Datang Kembali!</h2>
                <p>Masuk untuk melanjutkan petualanganmu bersama Elsabrin</p>
            </div>
        </div>                  
        
        <div class="auth-form">
            <div class="logo">
                <h1>Elsa<span>brin</span></h1>
            </div>
            
            <h2>Masuk ke Akun Anda</h2>

            <!-- Form login ke Laravel -->
            <form method="POST" action="{{ route('user.login') }}">
                @csrf <!-- Token wajib Laravel -->

                @if($errors->any())
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-circle"></i> {{ $errors->first() }}
                    </div>
                @endif

                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-with-icon">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="email" name="email" placeholder="Masukkan email" required value="{{ old('email') }}">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                    </div>
                </div>
                
                <div class="form-options">
                    <div class="remember-me">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Ingat saya</label>
                    </div>
                    <a href="#" class="forgot-password">Lupa password?</a>
                </div>
                
                <button type="submit" class="btn">
                    <i class="fas fa-sign-in-alt"></i> Masuk
                </button>
                
                <div class="divider">
                    <span></span>
                    <p>atau</p>
                    <span></span>
                </div>
                
                <div class="social-login">
                    <div class="social-btn facebook">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <div class="social-btn google">
                        <i class="fab fa-google"></i>
                    </div>
                    <div class="social-btn twitter">
                        <i class="fab fa-twitter"></i>
                    </div>
                </div>
            </form>
            
            <!-- BAGIAN DAFTAR DENGAN HIGHLIGHT OVAL -->
            <div class="auth-footer">
                <p>
                    <span class="highlight-text">Belum punya akun?</span>
                    <a href="{{ route('user.register')}}" class="register-link" id="registerLink">
                        <i class="fas fa-user-plus"></i> Daftar Disini
                    </a>
                </p>
            </div>
        </div>
    </div>

    <script>
        // Add some interactive effects
        document.querySelectorAll('.input-with-icon input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.querySelector('i').style.color = '#FF1493';
                this.parentElement.querySelector('i').style.transform = 'translateY(-50%) scale(1.1)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.querySelector('i').style.color = '#FF69B4';
                this.parentElement.querySelector('i').style.transform = 'translateY(-50%) scale(1)';
            });
        });

        // Social button hover effects
        document.querySelectorAll('.social-btn').forEach(btn => {
            btn.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px) scale(1.1)';
            });
            
            btn.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Sparkle effect untuk link daftar
        const registerLink = document.getElementById('registerLink');
        
        registerLink.addEventListener('mouseenter', function() {
            createSparkles(this);
        });

        function createSparkles(element) {
            for (let i = 0; i < 6; i++) {
                setTimeout(() => {
                    const sparkle = document.createElement('div');
                    sparkle.className = 'sparkle';
                    sparkle.innerHTML = '✨';
                    sparkle.style.left = Math.random() * 100 + '%';
                    sparkle.style.top = Math.random() * 100 + '%';
                    sparkle.style.animationDelay = (i * 0.1) + 's';
                    element.appendChild(sparkle);

                    setTimeout(() => {
                        sparkle.remove();
                    }, 1000);
                }, i * 100);
            }
        }

        // Pastikan illustration selalu sama tinggi dengan container
        function adjustIllustrationHeight() {
            const container = document.querySelector('.container');
            const illustration = document.querySelector('.illustration');
            if (container && illustration) {
                illustration.style.minHeight = container.scrollHeight + 'px';
            }
        }

        // Panggil fungsi saat halaman dimuat dan di-resize
        window.addEventListener('load', adjustIllustrationHeight);
        window.addEventListener('resize', adjustIllustrationHeight);
    </script>
</body>
</html>