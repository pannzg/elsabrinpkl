<!-- File: login.html -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Elsabrin</title>
    <!-- Same head content as index.html -->
     <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- Same header as index.html -->

    <!-- Login Section -->
    <section class="auth-section">
        <div class="container">
            <div class="auth-form">
                <h1>Masuk ke Akun Anda</h1>
                
                <form id="login-form">
                    <div class="form-group">
                        <label for="username">Username atau Email</label>
                        <input type="text" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" required>
                    </div>
                    <div class="form-options">
                        <label>
                            <input type="checkbox" id="remember-me">
                            Ingat saya
                        </label>
                        <a href="forgot-password.html">Lupa password?</a>
                    </div>
                    <button type="submit" class="btn">Masuk</button>
                </form>
                
                <div class="auth-footer">
                    <p>Belum punya akun? <a href="register.html">Daftar disini</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Same footer as index.html -->

    <script src="js/auth.js"></script>
</body>
</html>