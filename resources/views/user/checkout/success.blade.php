<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Berhasil | Butik Elsabrin</title>
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

        /* Success Section */
        .success-section {
            text-align: center;
            padding: 80px 20px;
            max-width: 600px;
            margin: 0 auto;
        }

        .success-icon {
            font-size: 100px;
            background: linear-gradient(135deg, #FFB6C1, #FF69B4, #FF1493);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 30px;
            animation: bounce 2s ease-in-out infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        .success-title {
            font-size: 2.5rem;
            background: linear-gradient(135deg, #FF69B4, #FF1493);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .success-message {
            font-size: 1.2rem;
            color: #6A3A4D;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .btn-primary {
            background: linear-gradient(135deg, #FFB6C1, #FF69B4);
            color: white;
            border: none;
            padding: 15px 40px;
            border-radius: 25px;
            font-weight: 700;
            font-size: 1.1rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 
                0 6px 15px rgba(255, 182, 193, 0.4);
            border: 2px solid rgba(255, 255, 255, 0.2);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #FF69B4, #FF1493);
            transform: translateY(-3px);
            box-shadow: 
                0 8px 20px rgba(255, 182, 193, 0.6);
            color: white;
            text-decoration: none;
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
            .success-section {
                padding: 60px 20px;
            }

            .success-icon {
                font-size: 80px;
            }

            .success-title {
                font-size: 2rem;
            }

            .success-message {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 480px) {
            .success-section {
                padding: 40px 15px;
            }

            .success-icon {
                font-size: 60px;
            }

            .success-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>

<div class="success-section">
    <div class="success-icon">
        🎉
    </div>
    <h1 class="success-title">Checkout Berhasil!</h1>
    <p class="success-message">
        Terima kasih sudah berbelanja di Butik Elsabrin! 💕<br>
        Pesanan Anda sedang diproses dan akan segera dikirim.
    </p>
    <a href="{{ route('user.dashboard') }}" class="btn-primary">
        <i class="fas fa-home"></i> Kembali ke Beranda
    </a>
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

</body>
</html>