<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Sertifikasi Profesional</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        .hero-section {
            padding: 80px 0;
        }
        .feature-card {
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="/">
                <i class="bi  me-2"></i>Sistem Sertifikasi
            </a>
    </nav>

   
    <div class="container hero-section">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-8 text-center">
                <span class="badge bg-primary-subtle text-primary mb-3 px-3 py-2 rounded-pill fw-semibold">
                    <i class="bi bi-star-fill me-1"></i> Platform Sertifikasi Resmi
                </span>
                <h1 class="display-5 fw-bold mb-3 text-dark">
                    Selamat Datang di Sistem Sertifikasi Kompetensi
                </h1>
                <p class="text-muted lead mb-4">
                    Sistem informasi terintegrasi untuk memudahkan peserta dalam mendaftar, mengelola, serta memantau status sertifikasi secara online dengan cepat dan transparan.
                </p>
                
                <!-- btn -->
                <div class="d-flex justify-content-center gap-3 mb-5">
                    <a href="/admin/login" class="btn btn-primary btn-lg px-4 shadow-sm">
                        <i class="bi bi-box-arrow-in-right me-2"></i> Login
                    </a>
                    <a href="/admin/register" class="btn btn-outline-dark btn-lg px-4">
                        <i class="bi bi-person-plus me-2"></i> Daftar
                    </a>
                </div>
            </div>
        </div>

        <!-- 3 card -->
        <div class="row g-4 mt-2 justify-content-center">
            <div class="col-md-4">
                <div class="card feature-card p-4 h-100 shadow-sm rounded-4">
                    <div class="text-primary mb-3 fs-2">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h5 class="fw-bold">Aman & Terstruktur</h5>
                    <p class="text-muted small mb-0">
                        Dilengkapi sistem manajemen hak akses peran (Role-Based Access Control) untuk keamanan data yang optimal.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card feature-card p-4 h-100 shadow-sm rounded-4">
                    <div class="text-primary mb-3 fs-2">
                        <i class="bi bi-speedometer2"></i>
                    </div>
                    <h5 class="fw-bold">Proses Cepat</h5>
                    <p class="text-muted small mb-0">
                        Pendaftaran skema sertifikasi dan validasi data NIK dilakukan secara instan dan mudah diakses kapan saja.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card feature-card p-4 h-100 shadow-sm rounded-4">
                    <div class="text-primary mb-3 fs-2">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>
                    <h5 class="fw-bold">Transparan</h5>
                    <p class="text-muted small mb-0">
                        Peserta dapat memantau riwayat serta status kelulusan sertifikasi langsung melalui dashboard pribadi.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="text-center py-4 text-muted small border-top mt-5 bg-white">
        <div class="container">
            &copy; 2026 Sistem Sertifikasi. All rights reserved.
        </div>
    </footer>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>