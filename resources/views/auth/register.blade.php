<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Elsabrin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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

        .register-container {
            background: 
                radial-gradient(circle at 20% 80%, rgba(255, 182, 193, 0.1) 0%, transparent 50%),
                linear-gradient(145deg, #FFFFFF, #FFF8FB);
            padding: 50px 40px;
            border-radius: 25px;
            box-shadow: 
                0 20px 40px rgba(255, 182, 193, 0.3),
                0 8px 20px rgba(255, 105, 180, 0.2);
            width: 450px;
            max-width: 90vw;
            text-align: center;
            position: relative;
            border: 2px solid rgba(255, 182, 193, 0.3);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            margin: 20px 0;
        }

        .register-container:hover {
            transform: translateY(-5px);
            box-shadow: 
                0 25px 50px rgba(255, 182, 193, 0.4),
                0 12px 25px rgba(255, 105, 180, 0.3);
        }

        .register-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, #FFB6C1, #FF69B4, #FF1493);
            border-radius: 25px 25px 0 0;
        }

        .brand-header {
            margin-bottom: 35px;
            position: relative;
        }

        .brand-icon {
            font-size: 48px;
            background: linear-gradient(135deg, #FFB6C1, #FF69B4, #FF1493);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 15px;
            display: inline-block;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .register-container h3 {
            background: linear-gradient(135deg, #FF69B4, #FF1493);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .register-subtitle {
            color: #6A3A4D;
            font-size: 14px;
            opacity: 0.8;
            margin-bottom: 30px;
            font-weight: 500;
        }

        .form-group {
            margin-bottom: 25px;
            text-align: left;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #6A3A4D;
            font-weight: 600;
            font-size: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-group label i {
            color: #FF69B4;
            width: 20px;
            text-align: center;
        }

        .form-control {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #FFE4EC;
            border-radius: 12px;
            font-size: 15px;
            outline: none;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
            color: #6A3A4D;
            font-weight: 500;
        }

        .form-control:focus {
            border-color: #FF69B4;
            box-shadow: 0 0 0 3px rgba(255, 105, 180, 0.2);
            background: white;
            transform: translateY(-2px);
        }

        .form-control::placeholder {
            color: #D4A5B5;
            font-weight: 400;
        }

        .text-danger {
            color: #C2185B;
            font-size: 13px;
            margin-top: 5px;
            font-weight: 500;
            display: block;
        }

        .btn-register {
            width: 100%;
            background: linear-gradient(135deg, #FFB6C1, #FF69B4);
            color: white;
            padding: 16px;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 6px 15px rgba(255, 182, 193, 0.4);
            border: 2px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
        }

        .btn-register::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
        }

        .btn-register:hover::before {
            left: 100%;
        }

        .btn-register:hover {
            background: linear-gradient(135deg, #FF69B4, #FF1493);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(255, 182, 193, 0.5);
        }

        .btn-register:active {
            transform: translateY(-1px);
        }

        .register-footer {
            text-align: center;
            margin-top: 25px;
            color: #6A3A4D;
        }

        .register-footer a {
            color: #FF69B4;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .register-footer a:hover {
            color: #FF1493;
            text-decoration: underline;
            transform: translateY(-1px);
        }

        /* Perbaikan untuk scrolling */
        html, body {
            overflow-x: hidden;
            height: auto;
            min-height: 100vh;
        }

        @media (max-width: 480px) {
            .register-container {
                width: 90%;
                padding: 40px 25px;
                margin: 20px;
            }

            .brand-icon {
                font-size: 40px;
            }

            .register-container h3 {
                font-size: 24px;
            }
        }

        /* Untuk layar sangat kecil */
        @media (max-height: 600px) {
            body {
                align-items: flex-start;
                padding-top: 20px;
                padding-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="brand-header">
            <div class="brand-icon">
                <i class="fas fa-heart"></i>
            </div>
            <h3>Daftar Akun Baru</h3>
            <p class="register-subtitle">Bergabunglah dengan komunitas Elsabrin</p>
        </div>

        <form method="POST" action="{{ route('user.register') }}">
            @csrf
            <div class="form-group">
                <label for="name">
                    <i class="fas fa-user"></i>Nama Lengkap
                </label>
                <input type="text" class="form-control" name="name" required value="{{ old('name') }}" placeholder="Masukkan nama lengkap">
                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="form-group">
                <label for="email">
                    <i class="fas fa-envelope"></i>Alamat Email
                </label>
                <input type="email" class="form-control" name="email" required value="{{ old('email') }}" placeholder="contoh@email.com">
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="form-group">
                <label for="password">
                    <i class="fas fa-lock"></i>Kata Sandi
                </label>
                <input type="password" class="form-control" name="password" required placeholder="Buat kata sandi yang kuat">
                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">
                    <i class="fas fa-lock"></i>Konfirmasi Kata Sandi
                </label>
                <input type="password" class="form-control" name="password_confirmation" required placeholder="Ulangi kata sandi">
            </div>

            <button type="submit" class="btn-register">
                <i class="fas fa-user-plus"></i> Daftar Sekarang
            </button>
        </form>

        <div class="register-footer">
            <p>Sudah punya akun? <a href="{{ route('user.login') }}">Masuk di sini</a></p>
        </div>
    </div>

    <script>
        // Add interactive effects
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('focus', function() {
                this.style.borderColor = '#FF69B4';
                this.style.boxShadow = '0 0 0 3px rgba(255, 105, 180, 0.2)';
            });
            
            input.addEventListener('blur', function() {
                this.style.borderColor = '#FFE4EC';
                this.style.boxShadow = 'none';
            });
        });

        // Form submission loading effect
        document.querySelector('form').addEventListener('submit', function(e) {
            const btn = this.querySelector('.btn-register');
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mendaftarkan...';
            btn.disabled = true;
        });
    </script>
</body>
</html>