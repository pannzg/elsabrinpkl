<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori | Admin Butik Elsabrin</title>
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

        /* Header */
        .admin-header {
            position: relative;
            text-align: center;
            padding: 40px 20px;
            background: 
                radial-gradient(circle at 30% 70%, rgba(255, 182, 193, 0.2) 0%, transparent 50%),
                radial-gradient(circle at 70% 30%, rgba(255, 105, 180, 0.15) 0%, transparent 50%),
                linear-gradient(135deg, #FFF0F5 0%, #FFB6C1 30%, #FF69B4 70%, #FF1493 100%);
            border-radius: 0 0 30px 30px;
            color: white;
            overflow: hidden;
            box-shadow: 
                0 8px 20px rgba(255, 182, 193, 0.3);
            margin-bottom: 30px;
        }
        
        .admin-header::before {
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
        
        .admin-header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            text-shadow: 
                2px 2px 4px rgba(0,0,0,0.1);
            font-weight: 700;
        }
        
        .admin-header p {
            font-size: 1.1rem;
            opacity: 0.95;
            font-weight: 500;
        }

        /* Container */
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Card */
        .admin-card {
            background: 
                radial-gradient(circle at 20% 80%, rgba(255, 182, 193, 0.1) 0%, transparent 50%),
                linear-gradient(145deg, #FFF8FB, #FFF0F5);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 
                0 8px 20px rgba(255, 182, 193, 0.2);
            border: 2px solid #FFB6C1;
            margin-bottom: 30px;
        }

        .page-title {
            font-size: 1.8rem;
            background: linear-gradient(135deg, #FF69B4, #FF1493);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 25px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #FF1493;
            font-size: 1rem;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #FFB6C1;
            border-radius: 12px;
            background: white;
            color: #6A3A4D;
            font-size: 1rem;
            transition: all 0.3s ease;
            font-family: 'Baloo 2', cursive;
        }

        .form-control:focus {
            outline: none;
            border-color: #FF69B4;
            box-shadow: 0 0 0 3px rgba(255, 182, 193, 0.3);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }

        .is-invalid {
            border-color: #FF4757 !important;
            box-shadow: 0 0 0 3px rgba(255, 71, 87, 0.2) !important;
        }

        .invalid-feedback {
            color: #FF4757;
            font-size: 0.9rem;
            margin-top: 5px;
            display: block;
        }

        /* Image Preview */
        .image-preview {
            margin-top: 15px;
            text-align: center;
        }

        .current-image {
            max-width: 200px;
            border-radius: 12px;
            border: 2px solid #FFB6C1;
            box-shadow: 0 4px 12px rgba(255, 182, 193, 0.3);
        }

        .image-label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: #FF1493;
        }

        /* Buttons */
        .btn {
            padding: 12px 25px;
            border-radius: 25px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.2);
            cursor: pointer;
            font-size: 1rem;
        }

        .btn-success {
            background: linear-gradient(135deg, #6BCF7F, #4CD964);
            color: white;
            box-shadow: 
                0 6px 15px rgba(107, 207, 127, 0.4);
        }

        .btn-success:hover {
            background: linear-gradient(135deg, #4CD964, #2ECC71);
            transform: translateY(-2px);
            box-shadow: 
                0 8px 20px rgba(107, 207, 127, 0.6);
            color: white;
        }

        .btn-secondary {
            background: linear-gradient(135deg, #CCCCCC, #999999);
            color: white;
            box-shadow: 
                0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .btn-secondary:hover {
            background: linear-gradient(135deg, #AAAAAA, #888888);
            transform: translateY(-2px);
            color: white;
        }

        /* Footer */
        footer {
            background: 
                radial-gradient(circle at 20% 80%, rgba(255, 182, 193, 0.2) 0%, transparent 50%),
                linear-gradient(135deg, #FF69B4, #FF1493);
            color: white;
            text-align: center;
            padding: 30px 20px;
            margin-top: 50px;
            border-radius: 30px 30px 0 0;
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

        /* Responsive */
        @media (max-width: 768px) {
            .admin-header h1 {
                font-size: 2rem;
            }
            
            .container {
                padding: 15px;
            }

            .admin-card {
                padding: 25px 20px;
            }

            .page-title {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .admin-header {
                padding: 30px 15px;
            }
            
            .admin-header h1 {
                font-size: 1.8rem;
            }

            .btn {
                width: 100%;
                justify-content: center;
                margin-bottom: 10px;
            }

            .current-image {
                max-width: 150px;
            }
        }
    </style>
</head>
<body>

<header class="admin-header">
    <h1>Admin Butik Elsabrin</h1>
    <p>Kelola kategori produk dengan mudah</p>
</header>

<div class="container">
    <div class="admin-card">
        <h2 class="page-title">
            <i class="fas fa-edit"></i>Edit Kategori
        </h2>

        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name" class="form-label">Nama Kategori</label>
                <input type="text" name="name" id="name" 
                       class="form-control @error('name') is-invalid @enderror" 
                       value="{{ old('name', $category->name) }}" required
                       placeholder="Masukkan nama kategori">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" id="description" rows="3" 
                          class="form-control @error('description') is-invalid @enderror"
                          placeholder="Masukkan deskripsi kategori">{{ old('description', $category->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image" class="form-label">Gambar Kategori</label>
                <input type="file" name="image" id="image" 
                       class="form-control @error('image') is-invalid @enderror"
                       accept="image/*">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="form-text">Format: JPG, PNG, JPEG. Maksimal 2MB</div>

                @if ($category->image)
                    <div class="image-preview">
                        <span class="image-label">Gambar Saat Ini:</span>
                        <img src="{{ asset('storage/' . $category->image) }}" 
                             alt="{{ $category->name }}" 
                             class="current-image">
                    </div>
                @endif
            </div>

            <div class="d-flex gap-3 flex-wrap">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Update Kategori
                </button>
                <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali ke Daftar
                </a>
            </div>
        </form>
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

</body>
</html>