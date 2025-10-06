<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin - Elsabrin</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: linear-gradient(135deg, #fcbad3, #ffdde1);
    }

    .login-container {
      background: #fff;
      padding: 40px 30px;
      border-radius: 20px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      width: 350px;
      text-align: center;
    }

    .login-container h2 {
      margin-bottom: 20px;
      color: #d46a8d;
      font-size: 26px;
    }

    .form-group {
      margin-bottom: 18px;
      text-align: left;
    }

    .form-group label {
      display: block;
      margin-bottom: 6px;
      color: #c44569;
      font-weight: 600;
      font-size: 14px;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 2px solid #fcbad3;
      border-radius: 10px;
      font-size: 14px;
      outline: none;
      transition: 0.3s;
    }

    .form-group input:focus {
      border-color: #d46a8d;
      box-shadow: 0 0 5px rgba(212,106,141,0.4);
    }

    .btn-login {
      width: 100%;
      background: #d46a8d;
      color: #fff;
      padding: 12px;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    .btn-login:hover {
      background: #c44569;
    }

    .login-container p {
      margin-top: 15px;
      font-size: 13px;
      color: #666;
    }

    .login-container a {
      color: #d46a8d;
      text-decoration: none;
      font-weight: 600;
    }

    .login-container a:hover {
      text-decoration: underline;
    }

    .alert {
      padding: 10px;
      border-radius: 8px;
      margin-bottom: 15px;
      font-size: 14px;
    }

    .alert-danger {
      background-color: #ffebee;
      color: #c62828;
      border: 1px solid #ffcdd2;
    }

    .alert-success {
      background-color: #e8f5e9;
      color: #2e7d32;
      border: 1px solid #c8e6c9;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login Admin Elsabrin</h2>
    
    <!-- Tampilkan error messages -->
    @if($errors->any())
      <div class="alert alert-danger">
        @foreach($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach
      </div>
    @endif

    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <form action="{{ route('admin.login') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email" value="{{ old('email') }}" required autofocus>
      </div>
      <div class="form-group">
        <label for="password">Kata Sandi</label>
        <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required>
      </div>
      <button type="submit" class="btn-login">Masuk</button>
    </form>

    <p>Lupa kata sandi? <a href="#">Reset di sini</a></p>
    <p>Kembali ke <a href="{{ url('/') }}">halaman utama</a></p>
  </div>
</body>
</html>