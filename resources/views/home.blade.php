<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Inventaris Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body { font-family: 'Segoe UI', sans-serif; }
        .hero { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 100px 0; }
        .feature-box { padding: 20px; border-radius: 10px; background: #f8f9fa; text-align: center; }
        .feature-box i { font-size: 40px; color: #667eea; margin-bottom: 10px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/"><i class="bi bi-box-seam"></i> Inventaris</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#fitur">Fitur</a></li>
                    <li class="nav-item"><a class="nav-link" href="#teknologi">Teknologi</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}" class="btn btn-primary btn-sm ms-2">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero">
        <div class="container text-center">
            <h1 class="display-4 mb-3"><i class="bi bi-box2-heart"></i> Sistem Informasi Inventaris Barang</h1>
            <p class="lead mb-4">Kelola barang dan kategori dengan mudah, cepat, dan efisien</p>
            <a href="{{ route('login') }}" class="btn btn-light btn-lg">Masuk ke Aplikasi</a>
        </div>
    </div>

    <div id="fitur" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Fitur Utama</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="feature-box">
                        <i class="bi bi-shield-lock"></i>
                        <h5>Keamanan Login</h5>
                        <p>Autentikasi admin dengan password yang aman dan terenkripsi</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box">
                        <i class="bi bi-bar-chart"></i>
                        <h5>Dashboard Statistik</h5>
                        <p>Lihat ringkasan data barang, kategori, dan stok dalam satu tempat</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box">
                        <i class="bi bi-boxes"></i>
                        <h5>Manajemen Barang</h5>
                        <p>CRUD lengkap untuk mengelola barang dengan pencarian dan filter</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box">
                        <i class="bi bi-file-pdf"></i>
                        <h5>Export Laporan</h5>
                        <p>Ekspor data inventaris ke format PDF dengan mudah</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="teknologi" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Teknologi yang Digunakan</h2>
            <div class="row text-center">
                <div class="col-md-2"><h6>Laravel 11</h6></div>
                <div class="col-md-2"><h6>PHP 8.2</h6></div>
                <div class="col-md-2"><h6>MySQL</h6></div>
                <div class="col-md-2"><h6>Bootstrap 5</h6></div>
                <div class="col-md-2"><h6>Blade Template</h6></div>
                <div class="col-md-2"><h6>DOMPDF</h6></div>
            </div>
        </div>
    </div>

    <div class="py-5 text-center bg-dark text-white">
        <p>&copy; 2026 Sistem Informasi Inventaris Barang. Untuk Uji Kompetensi Pemrogram Muda.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
