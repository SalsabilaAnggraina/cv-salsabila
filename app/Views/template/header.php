<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV | <?= $biodata['nama'] ?? 'Pribadi' ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Kustom (Tema Dark Burgundy) -->
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
</head>
<body>

<div class="fixed-top">
    <nav class="navbar navbar-expand-lg" style="background-color: var(--bs-card-bg); border-bottom: 1px solid #ddd;">
        <div class="container-fluid cv-container-sm">
            <a class="navbar-brand fw-bold" href="<?= base_url('/') ?>" style="color: var(--bs-heading-color);">CV UTS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= $active_menu == 'beranda' ? 'active-nav' : '' ?>" href="<?= base_url('/') ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $active_menu == 'pendidikan' ? 'active-nav' : '' ?>" href="<?= base_url('pendidikan') ?>">Pendidikan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $active_menu == 'pengalaman' ? 'active-nav' : '' ?>" href="<?= base_url('pengalaman') ?>">Pengalaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $active_menu == 'keahlian' ? 'active-nav' : '' ?>" href="<?= base_url('keahlian') ?>">Keahlian</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<main class="pt-5 mt-5">
    <div class="cv-container">