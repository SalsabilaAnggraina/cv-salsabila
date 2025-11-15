<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <style>
        /* Definisi Palet Warna Kustom (Black, Cream, Deep Burgundy, White) */
        :root {
            --bs-main-bg: #0A0A0A; /* Background utama: Deep Black */
            --bs-card-bg: #FFFDD0; /* Card / container: Cream/Beige (hangat) */
            --bs-accent-color: #6B001F; /* Accent color: Deep Burgundy */
            --bs-heading-color: #6B001F; /* Heading: Deep Burgundy */
            --bs-text-dark: #333333; /* Text pada kartu terang: Dark Gray/Near Black */
            --bs-text-light: #FFFFFF; /* Text pada background gelap: White */
            --bs-cta-color: #6B001F; /* Button CTA: Deep Burgundy */
            --bs-cta-hover: #9D002C; /* Button CTA Hover: Lighter Burgundy */
            --bs-font-family: 'Inter', sans-serif;
        }

        body {
            background-color: var(--bs-main-bg) !important;
            color: var(--bs-text-light) !important;
            font-family: var(--bs-font-family);
            min-height: 100vh;
        }

        .custom-card {
            background-color: var(--bs-card-bg);
            color: var(--bs-text-dark);
            border-radius: 1rem;
            box-shadow: 0 5px 20px rgba(255, 255, 255, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .custom-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.1);
        }

        h1, h2, h3 {
            color: var(--bs-heading-color) !important;
            font-weight: 400;
        }

        .section-title {
            color: var(--bs-text-light) !important; 
            border-bottom: 4px solid var(--bs-accent-color);
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
            font-weight: 600;
            font-size: 1.5rem;
        }
        
        .accent-text {
            color: var(--bs-accent-color) !important;
            font-weight: 600;
        }

        .accent-border-left {
            border-left: 4px solid var(--bs-accent-color);
            padding-left: 1rem;
        }

        /* Gaya Khusus Button CTA */
        .btn-cta {
            background-color: var(--bs-cta-color);
            border-color: var(--bs-cta-color);
            color: var(--bs-text-light);
            font-weight: 600;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .btn-cta:hover {
            background-color: var(--bs-cta-hover);
            border-color: var(--bs-cta-hover);
            color: var(--bs-text-light);
            box-shadow: 0 0 15px rgba(107, 0, 31, 0.8);
        }

        /* Navbar Styling dan Hover Animation */
        .navbar {
            background-color: var(--bs-main-bg) !important;
            border-bottom: 1px solid var(--bs-accent-color);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }
        .navbar-brand {
             color: var(--bs-text-light) !important;
             font-weight: 700;
             font-size: 1.5rem;
        }
        .nav-link {
            position: relative;
            color: var(--bs-text-light) !important;
            transition: color 0.3s ease;
            padding-bottom: 0.5rem;
        }
        /* Membuat garis bawah yang tidak terlihat */
        .nav-link::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 3px;
            left: 0;
            bottom: 0;
            background-color: var(--bs-accent-color); 
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.3s ease-out;
        }
        /* Efek hover */
        .nav-link:hover, .nav-link.active { /* Tambahkan .active di sini */
            color: var(--bs-accent-color) !important;
            font-weight: 600;
        }
        /* Animasi garis bawah muncul dari kiri ke kanan */
        .nav-link:hover::after, .nav-link.active::after { /* Tambahkan .active di sini */
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        /* Placeholder foto */
        .profile-placeholder {
            border-color: var(--bs-accent-color) !important;
            background-color: var(--bs-heading-color);
        }

        /* Progress Bar Styling */
        .progress-bar-custom {
            background-color: var(--bs-accent-color);
        }
        .progress-bg-custom {
            background-color: rgba(107, 0, 31, 0.2);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid container-xl">
            <a class="navbar-brand" href="<?= base_url(); ?>">Curriculum Vitae</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link <?= current_url(true)->getPath() == '/' ? 'active' : '' ?>" href="<?= base_url(); ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?= current_url(true)->getPath() == '/pendidikan' ? 'active' : '' ?>" href="<?= base_url('pendidikan'); ?>">Pendidikan</a></li>
                    <li class="nav-item"><a class="nav-link <?= current_url(true)->getPath() == '/pengalaman' ? 'active' : '' ?>" href="<?= base_url('pengalaman'); ?>">Pengalaman</a></li>
                    <li class="nav-item"><a class="nav-link <?= current_url(true)->getPath() == '/keahlian' ? 'active' : '' ?>" href="<?= base_url('keahlian'); ?>">Keahlian</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container-xl py-5">
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="text-center py-4" style="background-color: var(--bs-main-bg); color: var(--bs-text-light); border-top: 1px solid var(--bs-accent-color);">
        <div class="container">
            <p class="mb-0 small">
                &copy; 2025 Salsabila Anggraina Putri. 
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>