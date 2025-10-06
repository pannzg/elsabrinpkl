<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Butik Elsabrin')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom right, #ffe0e9, #ffd6c2);
            color: #333;
            position: relative;
            overflow-x: hidden;
        }

        /* Bubbles lucu di background */
        body::before, body::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            opacity: 0.2;
            z-index: -1;
        }
        body::before {
            width: 250px;
            height: 250px;
            background: #ff9aa2;
            top: -80px;
            left: -80px;
        }
        body::after {
            width: 300px;
            height: 300px;
            background: #ffb199;
            bottom: -100px;
            right: -100px;
        }

        /* Judul & heading */
        h1, h2, h3, .navbar-brand {
            font-family: 'Baloo 2', cursive;
            font-weight: 700;
            color: #ff6b81;
        }

        /* Navbar */
        .navbar {
            background: #ff9aa2;
            border-radius: 0 0 25px 25px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            font-size: 1.8rem;
            color: white !important;
        }
        .navbar-nav .nav-link {
            color: white !important;
            font-weight: 500;
            margin: 0 10px;
            transition: 0.3s;
            border-radius: 20px;
            padding: 8px 14px;
        }
        .navbar-nav .nav-link:hover {
            background: rgba(255,255,255,0.25);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #ff9aa2, #ffb199);
            padding: 70px 20px;
            text-align: center;
            border-radius: 30px;
            color: white;
            margin-top: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .hero p {
            font-size: 1.2rem;
            font-weight: 500;
        }

        /* Card produk */
        .product-card {
            border: none;
            border-radius: 25px;
            overflow: hidden;
            transition: 0.3s;
            background: white;
            box-shadow: 0 6px 15px rgba(0,0,0,0.08);
        }
        .product-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        .product-card img {
            height: 220px;
            object-fit: cover;
            border-bottom: 5px solid #ff9aa2;
        }
        .product-card .card-body {
            text-align: center;
        }
        .product-card .card-body h5 {
            font-family: 'Baloo 2', cursive;
            font-weight: 600;
            color: #ff6b81;
        }

        /* Tombol */
        .btn-pink {
            background: linear-gradient(45deg, #ff9aa2, #ffb199);
            border: none;
            color: white;
            font-weight: 600;
            font-family: 'Baloo 2', cursive;
            border-radius: 30px;
            padding: 10px 22px;
            transition: 0.3s;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        .btn-pink:hover {
            background: linear-gradient(45deg, #ff6b81, #ff9aa2);
        }

        /* Footer */
        footer {
            background: #ff9aa2;
            color: white;
            padding: 40px 0;
            text-align: center;
            margin-top: 60px;
            border-radius: 30px 30px 0 0;
        }
        footer p {
            font-family: 'Baloo 2', cursive;
        }
        footer a {
            color: white;
            text-decoration: none;
            margin: 0 12px;
            transition: 0.3s;
            font-size: 1.3rem;
        }
        footer a:hover {
            color: #ffe3e3;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/">Elsabrin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon text-white"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/kategori">Kategori</a></li>
                    <li class="nav-item"><a class="nav-link" href="/produk">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="/tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="/kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="container py-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} Elsabrin Butik | All Rights Reserved</p>
            <div class="mt-3">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
