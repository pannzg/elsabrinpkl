<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Elsabrin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Style sama seperti sebelumnya */
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background: linear-gradient(135deg, #ffd1dc 0%, #ffa07a 100%); min-height: 100vh; display: flex; justify-content: center; align-items: center; padding: 20px; }
        .container { display: flex; max-width: 900px; width: 100%; background: rgba(255, 255, 255, 0.9); border-radius: 20px; overflow: hidden; box-shadow: 0 15px 30px rgba(233, 150, 158, 0.3); }
        .illustration { flex: 1; background: linear-gradient(135deg, #ff8a9f 0%, #ffb6a8 100%); display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 40px; color: white; display: none; }
        .illustration-content { text-align: center; }
        .illustration i { font-size: 100px; margin-bottom: 20px; filter: drop-shadow(0 5px 10px rgba(0, 0, 0, 0.1)); }
        .illustration h2 { font-size: 28px; margin-bottom: 15px; }
        .illustration p { font-size: 16px; opacity: 0.9; }
        .auth-form { flex: 1; padding: 40px; }
        .logo { text-align: center; margin-bottom: 30px; }
        .logo h1 { color: #ff6b81; font-size: 32px; font-weight: 700; letter-spacing: 1px; }
        .logo span { color: #ff8c69; }
        .auth-form h2 { color: #ff6b81; font-size: 28px; margin-bottom: 30px; text-align: center; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; color: #555; font-weight: 500; }
        .input-with-icon { position: relative; }
        .input-with-icon i { position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: #ff8c69; }
        .input-with-icon input { width: 100%; padding: 15px 15px 15px 45px; border: 2px solid #ffe4e8; border-radius: 10px; font-size: 16px; transition: all 0.3s; }
        .input-with-icon input:focus { border-color: #ff8c69; outline: none; box-shadow: 0 0 0 3px rgba(255, 140, 105, 0.2); }
        .form-options { display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; }
        .remember-me { display: flex; align-items: center; }
        .remember-me input { margin-right: 8px; accent-color: #ff6b81; }
        .remember-me label { color: #555; }
        .forgot-password { color: #ff6b81; text-decoration: none; font-weight: 500; transition: color 0.3s; }
        .forgot-password:hover { color: #ff8c69; text-decoration: underline; }
        .btn { width: 100%; padding: 15px; background: linear-gradient(to right, #ff6b81, #ff8c69); border: none; border-radius: 10px; color: white; font-size: 16px; font-weight: 600; cursor: pointer; transition: all 0.3s; box-shadow: 0 5px 15px rgba(255, 107, 129, 0.3); }
        .btn:hover { background: linear-gradient(to right, #ff8c69, #ff6b81); transform: translateY(-2px); box-shadow: 0 8px 20px rgba(255, 107, 129, 0.4); }
        .btn:active { transform: translateY(0); }
        .auth-footer { text-align: center; margin-top: 25px; color: #555; }
        .auth-footer a { color: #ff6b81; text-decoration: none; font-weight: 500; transition: color 0.3s; }
        .auth-footer a:hover { color: #ff8c69; text-decoration: underline; }
        .divider { display: flex; align-items: center; margin: 25px 0; }
        .divider span { flex: 1; height: 1px; background: #ffe4e8; }
        .divider p { padding: 0 15px; color: #888; font-size: 14px; }
        .social-login { display: flex; justify-content: center; gap: 15px; margin-top: 20px; }
        .social-btn { width: 50px; height: 50px; border-radius: 50%; display: flex; justify-content: center; align-items: center; background: #f5f5f5; color: #555; border: 1px solid #eee; cursor: pointer; transition: all 0.3s; }
        .social-btn:hover { transform: translateY(-3px); box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1); }
        .facebook:hover { background: #3b5998; color: white; }
        .google:hover { background: #dd4b39; color: white; }
        .twitter:hover { background: #1da1f2; color: white; }
        @media (min-width: 768px) { .illustration { display: flex; } }
        @media (max-width: 767px) { .container { flex-direction: column; } .auth-form { padding: 30px 25px; } }
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
                    <div style="color:red; margin-bottom:15px;">
                        {{ $errors->first() }}
                    </div>
                @endif

                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-with-icon">
                        <i class="fas fa-user"></i>
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
                
                <button type="submit" class="btn">Masuk</button>
                
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
            
            <div class="auth-footer">
                <p>Belum punya akun? <a href="{{ route ('user.register')}}">Daftar disini</a></p>
            </div>
        </div>
    </div>
</body>
</html>
