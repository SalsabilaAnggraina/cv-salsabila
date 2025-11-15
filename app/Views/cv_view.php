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
            font-weight: 700;
        }

        .section-title {
            color: var(--bs-text-light) !important; 
            border-bottom: 4px solid var(--bs-accent-color);
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
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
        .nav-link:hover {
            color: var(--bs-accent-color) !important;
            font-weight: 600;
        }
        /* Animasi garis bawah muncul dari kiri ke kanan */
        .nav-link:hover::after {
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
            <a class="navbar-brand" href="#"><?= 'Curriculum Vitae' ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pendidikan">Pendidikan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pengalaman">Pengalaman</a></li>
                    <li class="nav-item"><a class="nav-link" href="#keahlian">Keahlian</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container-xl py-5">
        
        <section id="home" class="custom-card p-4 p-md-5 mb-5">
            <div class="row g-4 align-items-center">
                
                <div class="col-12 col-md-4 text-center">
                    <div class="rounded-circle mx-auto mb-4 border border-5 profile-placeholder overflow-hidden" style="width: 250px; height: 250px;">
                        <img 
                            src="<?= base_url('assets/img/sabil.png'); ?>" 
                            alt="Foto Profil Salsabila" 
                            class="img-fluid" 
                            style="width: 100%; height: 100%; object-fit: cover;"
                        >
                    </div>

                    <div class="d-grid gap-2 mx-auto" style="max-width: 250px;">
                        <a href="mailto:<?= $biodata['email']; ?>" class="btn btn-sm btn-cta"><i class="bi bi-envelope-fill me-2"></i> Email</a>
                        <a href="<?= $biodata['linkedin']; ?>" target="_blank" class="btn btn-sm btn-cta"><i class="bi bi-linkedin me-2"></i> LinkedIn</a>
                        <a href="<?= $biodata['github']; ?>" target="_blank" class="btn btn-sm btn-cta"><i class="bi bi-github me-2"></i> GitHub</a>
                        <a href="<?= $biodata['instagram']; ?>" target="_blank" class="btn btn-sm btn-cta"><i class="bi bi-instagram me-2"></i> Instagram</a>
                        <a href="https://wa.me/<?= $biodata['whatsapp']; ?>" target="_blank" class="btn btn-sm btn-cta"><i class="bi bi-whatsapp me-2"></i> WhatsApp</a>
                    </div>
                </div>

                <div class="col-12 col-md-8 text-center text-md-start">
                    <h1 class="display-5 fw-bold mb-2"><?= $biodata['nama']; ?></h1>
                    <p class="fs-4 accent-text mb-4">Mahasiswa Teknik Informatika | Wakil Gubernur BEM FSAINTEK</p>
                    <p class="lead accent-border-left">
                        <?= $biodata['bio']; ?>
                    </p>
                </div>
            </div>
        </section>

        <div class="row g-5">
            
            <div class="col-lg-8">
                
                <section id="pendidikan" class="mb-5">
                    <h2 class="section-title">Riwayat Pendidikan</h2>
                    
                    <div class="space-y-4">
                        <?php foreach ($pendidikan as $item): ?>
                        <div class="custom-card p-4 mb-4">
                            <div class="d-flex justify-content-between align-items-start">
                                <h3 class="fs-5 fw-bold"><?= $item['institusi']; ?></h3>
                                <span class="badge py-2 px-3 fw-semibold" style="background-color: var(--bs-accent-color) !important; color: var(--bs-text-light) !important;"><?= $item['tahun_masuk']; ?> - <?= $item['tahun_lulus']; ?></span>
                            </div>
                            <p class="mb-1 fw-semibold"><?= $item['jurusan']; ?></p>
                            <p class="text-muted small fst-italic">Tingkat: <?= $item['tingkat']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </section>
                
                <section id="pengalaman" class="mb-5">
                    <h2 class="section-title">Pengalaman</h2>
                    
                    <div class="space-y-4">
                        <?php foreach ($pengalaman as $item): ?>
                        <div class="custom-card p-4 mb-4">
                            <div class="d-flex justify-content-between align-items-start">
                                <h3 class="fs-5 fw-bold"><?= $item['nama_peran']; ?></h3>
                                <span class="badge py-2 px-3 fw-semibold" style="background-color: var(--bs-accent-color) !important; color: var(--bs-text-light) !important;"><?= $item['tahun_mulai']; ?> - <?= $item['tahun_selesai']; ?></span>
                            </div>
                            <p class="mb-2 fw-semibold"><?= $item['organisasi']; ?></p>
                            <ul class="list-unstyled mb-0">
                                <?php 
                                // Memisahkan deskripsi menjadi poin-poin (jika menggunakan baris baru atau tanda hubung dalam DB)
                                $deskripsi_poin = explode('.', $item['deskripsi']);
                                foreach ($deskripsi_poin as $poin) {
                                    $poin = trim($poin);
                                    if (!empty($poin)) {
                                        echo "<li class='mb-1'><i class='bi bi-check-circle-fill me-2 accent-text'></i>{$poin}.</li>";
                                    }
                                }
                                ?>
                            </ul>
                            <p class="small mt-2 fst-italic">Jenis: <?= $item['jenis']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </section>
                
            </div>
            
            <div class="col-lg-4">
                
                <section id="keahlian" class="mb-5">
                    <h2 class="section-title">Keahlian</h2>
                    
                    <div class="custom-card p-4">
                        <div>
                            
                            <?php foreach ($keahlian as $skill): 
                                $is_soft_skill = in_array($skill['nama_keahlian'], ['Kepemimpinan & Koordinasi Tim', 'Komunikasi Publik', 'Koordinasi Proyek', 'Manajemen Organisasi', 'Kolaborasi Antar Divisi', 'Pengambilan Keputusan Strategis']);
                            ?>
                            <div class="mb-3">
                                <small class="d-block mb-1 fw-semibold"><?= $skill['nama_keahlian']; ?> (<?= $skill['level']; ?>%)</small>
                                <div class="progress progress-bg-custom" style="height: 10px;">
                                    <div class="progress-bar progress-bar-custom" role="progressbar" style="width: <?= $skill['level']; ?>%;" aria-valuenow="<?= $skill['level']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <?php if ($is_soft_skill): ?>
                                    <span class="badge rounded-pill mt-1" style="background-color: var(--bs-heading-color) !important; color: var(--bs-text-light) !important; font-size: 0.65rem;">Soft Skill</span>
                                <?php else: ?>
                                    <span class="badge rounded-pill mt-1" style="background-color: var(--bs-accent-color) !important; color: var(--bs-text-light) !important; font-size: 0.65rem;">Technical Skill</span>
                                <?php endif; ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
                
            </div>
            
        </div>

    </main>

    <footer class="text-center py-4" style="background-color: var(--bs-main-bg); color: var(--bs-text-light); border-top: 1px solid var(--bs-accent-color);">
        <div class="container">
            <p class="mb-0 small">
                &copy; 2025 <?= $biodata['nama']; ?>. 
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>