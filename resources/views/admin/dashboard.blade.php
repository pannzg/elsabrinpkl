<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Elsabrin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-pink: #ff8fab;
            --dark-pink: #ff5c8a;
            --light-pink: #ffc1cc;
            --very-light-pink: #ffd6e0;
            --peach: #ffe5b4;
            --text-dark: #4a3c3c;
        }
        
        body {
            background: linear-gradient(135deg, var(--very-light-pink), var(--peach));
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            color: var(--text-dark);
        }
        
        .navbar {
            background: var(--primary-pink);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            color: white !important;
            font-weight: bold;
            font-size: 1.5rem;
        }
        
        .sidebar {
            background: white;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            height: calc(100vh - 80px);
            position: sticky;
            top: 20px;
            padding: 0;
        }
        
        .sidebar-sticky {
            position: relative;
            height: 100%;
            padding: 20px 0;
        }
        
        .sidebar .nav-link {
            color: var(--text-dark);
            padding: 12px 20px;
            margin: 5px 10px;
            border-radius: 10px;
            transition: all 0.3s;
        }
        
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background-color: var(--light-pink);
            color: var(--dark-pink);
        }
        
        .sidebar .nav-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        
        .main-content {
            background: white;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            padding: 25px;
            margin-bottom: 20px;
        }
        
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            border: none;
            transition: transform 0.3s;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .card-header {
            background: var(--light-pink);
            font-weight: bold;
            border-radius: 15px 15px 0 0 !important;
            border: none;
            color: var(--text-dark);
            padding: 15px 20px;
        }
        
        .btn-pink {
            background-color: var(--primary-pink);
            border: none;
            color: white;
            border-radius: 30px;
            padding: 10px 20px;
            transition: all 0.3s;
        }
        
        .btn-pink:hover {
            background-color: var(--dark-pink);
            color: white;
        }
        
        .btn-outline-pink {
            border: 1px solid var(--primary-pink);
            color: var(--primary-pink);
            border-radius: 30px;
            padding: 10px 20px;
            transition: all 0.3s;
        }
        
        .btn-outline-pink:hover {
            background-color: var(--primary-pink);
            color: white;
        }
        
        .table th {
            background-color: var(--light-pink);
            color: var(--text-dark);
        }
        
        .badge-pink {
            background-color: var(--primary-pink);
            color: white;
        }
        
        .stats-card {
            text-align: center;
            padding: 20px;
        }
        
        .stats-number {
            font-size: 2rem;
            font-weight: bold;
            color: var(--dark-pink);
        }
        
        .stats-text {
            color: var(--text-dark);
            font-size: 0.9rem;
        }
        
        .modal-content {
            border-radius: 15px;
            border: none;
        }
        
        .modal-header {
            background-color: var(--light-pink);
            color: var(--text-dark);
            border-radius: 15px 15px 0 0;
        }
        
        .form-control, .form-select {
            border-radius: 10px;
            padding: 10px 15px;
            border: 1px solid var(--light-pink);
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-pink);
            box-shadow: 0 0 0 0.25rem rgba(255, 143, 171, 0.25);
        }
        
        .dashboard-section {
            display: none;
        }
        
        .dashboard-section.active {
            display: block;
        }
        
        .welcome-banner {
            background: linear-gradient(135deg, var(--primary-pink), var(--dark-pink));
            border-radius: 15px;
            color: white;
            padding: 30px;
            margin-bottom: 25px;
        }
        
        .pagination .page-link {
            color: var(--primary-pink);
        }
        
        .pagination .page-item.active .page-link {
            background-color: var(--primary-pink);
            border-color: var(--primary-pink);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fas fa-crown me-2"></i>Admin Elsabrin</a>
            <div class="d-flex">
                <button class="btn btn-pink me-2"><i class="fas fa-user me-1"></i> Profil</button>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-outline-light"><i class="fas fa-sign-out-alt me-1"></i> Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container-fluid my-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-2">
                <div class="sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-section="dashboard">
                                    <i class="fas fa-home"></i> Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-section="products">
                                    <i class="fas fa-tshirt"></i> Produk
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-section="users">
                                    <i class="fas fa-users"></i> Pengguna
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-section="settings">
                                    <i class="fas fa-cog"></i> Pengaturan
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Content Area -->
            <div class="col-lg-10">
                <!-- Dashboard Section -->
                <div class="dashboard-section active" id="dashboard-section">
                    <div class="welcome-banner">
                        <h2>Selamat Datang di Dashboard Admin</h2>
                        <p class="mb-0">Kelola toko butik Elsabrin dengan mudah dan efisien</p>
                    </div>
                    
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card stats-card">
                                <div class="stats-number">152</div>
                                <div class="stats-text">Total Produk</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card stats-card">
                                <div class="stats-number">86</div>
                                <div class="stats-text">Total Pengguna</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card stats-card">
                                <div class="stats-number">24</div>
                                <div class="stats-text">Pesanan Baru</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card stats-card">
                                <div class="stats-number">IDR 8.5jt</div>
                                <div class="stats-text">Pendapatan Bulan Ini</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-header">Produk</div>
                                <div class="card-body text-center">
                                    <p>Kelola daftar produk butik</p>
                                    <a href="#" class="btn btn-pink go-to-section" data-section="products">Kelola Produk</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-header">Pengguna</div>
                                <div class="card-body text-center">
                                    <p>Kelola data user/admin</p>
                                    <a href="#" class="btn btn-pink go-to-section" data-section="users">Kelola Pengguna</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-header">Pengaturan</div>
                                <div class="card-body text-center">
                                    <p>Atur preferensi website</p>
                                    <a href="#" class="btn btn-pink go-to-section" data-section="settings">Pengaturan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Products Section -->
                <div class="dashboard-section" id="products-section">
                    <div class="main-content">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3><i class="fas fa-tshirt me-2"></i>Manajemen Produk</h3>
                            <button class="btn btn-pink" data-bs-toggle="modal" data-bs-target="#addProductModal">
                                <i class="fas fa-plus me-1"></i> Tambah Produk
                            </button>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Produk</th>
                                        <th>Kategori</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dress Floral Pink</td>
                                        <td>Dress</td>
                                        <td>IDR 299.000</td>
                                        <td>15</td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-pink me-1"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Blouse Silk Peach</td>
                                        <td>Blouse</td>
                                        <td>IDR 189.000</td>
                                        <td>8</td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-pink me-1"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Skirt A-line White</td>
                                        <td>Skirt</td>
                                        <td>IDR 229.000</td>
                                        <td>0</td>
                                        <td><span class="badge bg-danger">Habis</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-pink me-1"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                
                <!-- Users Section -->
                <div class="dashboard-section" id="users-section">
                    <div class="main-content">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3><i class="fas fa-users me-2"></i>Manajemen Pengguna</h3>
                            <button class="btn btn-pink" data-bs-toggle="modal" data-bs-target="#addUserModal">
                                <i class="fas fa-plus me-1"></i> Tambah Pengguna
                            </button>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Peran</th>
                                        <th>Tanggal Daftar</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Admin Elsabrin</td>
                                        <td>admin@elsabrin.com</td>
                                        <td><span class="badge badge-pink">Admin</span></td>
                                        <td>10 Jan 2023</td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-pink me-1"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sarah Johnson</td>
                                        <td>sarah@example.com</td>
                                        <td><span class="badge bg-secondary">User</span></td>
                                        <td>15 Mar 2023</td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-pink me-1"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Michael Brown</td>
                                        <td>michael@example.com</td>
                                        <td><span class="badge bg-secondary">User</span></td>
                                        <td>22 Apr 2023</td>
                                        <td><span class="badge bg-warning text-dark">Non-aktif</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-pink me-1"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                
                <!-- Settings Section -->
                <div class="dashboard-section" id="settings-section">
                    <div class="main-content">
                        <h3 class="mb-4"><i class="fas fa-cog me-2"></i>Pengaturan Website</h3>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">Informasi Umum</div>
                                    <div class="card-body">
                                        <form>
                                            <div class="mb-3">
                                                <label class="form-label">Nama Website</label>
                                                <input type="text" class="form-control" value="Elsabrin Boutique">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Deskripsi Website</label>
                                                <textarea class="form-control" rows="3">Butik fashion modern dengan koleksi terkini untuk wanita Indonesia</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Email Admin</label>
                                                <input type="email" class="form-control" value="admin@elsabrin.com">
                                            </div>
                                            <button type="submit" class="btn btn-pink">Simpan Perubahan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-header">Tampilan</div>
                                    <div class="card-body">
                                        <form>
                                            <div class="mb-3">
                                                <label class="form-label">Warna Tema</label>
                                                <select class="form-select">
                                                    <option selected>Pink Peach</option>
                                                    <option>Soft Blue</option>
                                                    <option>Lavender</option>
                                                    <option>Mint Green</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Logo Website</label>
                                                <input type="file" class="form-control">
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="notifications" checked>
                                                <label class="form-check-label" for="notifications">Aktifkan Notifikasi</label>
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="maintenance">
                                                <label class="form-check-label" for="maintenance">Mode Maintenance</label>
                                            </div>
                                            <button type="submit" class="btn btn-pink">Simpan Pengaturan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Product Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Produk Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select class="form-select" required>
                                <option value="">Pilih Kategori</option>
                                <option value="dress">Dress</option>
                                <option value="blouse">Blouse</option>
                                <option value="skirt">Skirt</option>
                                <option value="pants">Celana</option>
                                <option value="accessories">Aksesoris</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Harga (IDR)</label>
                                <input type="number" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Stok</label>
                                <input type="number" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gambar Produk</label>
                            <input type="file" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-pink">Simpan Produk</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add User Modal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Pengguna Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nama Depan</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nama Belakang</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Peran</label>
                            <select class="form-select" required>
                                <option value="">Pilih Peran</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-pink">Simpan Pengguna</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Navigation between sections
            const navLinks = document.querySelectorAll('.nav-link');
            const goToSectionLinks = document.querySelectorAll('.go-to-section');
            const sections = document.querySelectorAll('.dashboard-section');
            
            function activateSection(sectionId) {
                sections.forEach(section => {
                    section.classList.remove('active');
                });
                document.getElementById(sectionId).classList.add('active');
                
                // Update active nav link
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('data-section') === sectionId.replace('-section', '')) {
                        link.classList.add('active');
                    }
                });
            }
            
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const section = this.getAttribute('data-section');
                    activateSection(section + '-section');
                });
            });
            
            goToSectionLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const section = this.getAttribute('data-section');
                    activateSection(section + '-section');
                    
                    // Also activate the corresponding nav link
                    navLinks.forEach(navLink => {
                        navLink.classList.remove('active');
                        if (navLink.getAttribute('data-section') === section) {
                            navLink.classList.add('active');
                        }
                    });
                });
            });
            
            // Simulate form submissions
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Perubahan berhasil disimpan!');
                });
            });
        });
    </script>
</body>
</html>