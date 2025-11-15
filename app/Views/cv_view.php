<?= $this->extend('layout/main_layout') ?>

<?= $this->section('content') ?>

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

<div class="row g-4">
    
    <div class="col-12"> 
        
        <section class="mb-5">
            <h2 class="section-title">Pendidikan</h2>
            <div class="row g-3">
                <?php if (empty($pendidikan)): ?>
                    <p class="text-muted fst-italic ms-3">Tidak ada riwayat pendidikan yang sedang berjalan.</p>
                <?php else: ?>
                    <?php foreach ($pendidikan as $item): ?>
                    <div class="col-12 col-md-6"> 
                        <div class="custom-card p-3 h-100">
                            <h3 class="fs-6 fw-bold mb-1 accent-text"><?= $item['institusi']; ?></h3>
                            <p class="mb-1 small"><?= $item['jurusan']; ?></p>
                            <span class="badge" style="background-color: var(--bs-accent-color); color: var(--bs-text-light); font-size: 0.7rem;"><?= $item['tahun_masuk']; ?> - <?= $item['tahun_lulus']; ?></span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                <div class="col-12 text-end">
                    <a href="<?= base_url('pendidikan'); ?>" class="btn btn-sm btn-cta mt-2">Lihat Semua Pendidikan</a>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <h2 class="section-title">Pengalaman</h2>
            <div class="row g-3">
                <?php if (empty($pengalaman)): ?>
                    <p class="text-muted fst-italic ms-3">Tidak ada pengalaman aktif saat ini.</p>
                <?php else: ?>
                    <?php foreach ($pengalaman as $item): ?>
                    <div class="col-12 col-md-6">
                        <div class="custom-card p-3 h-100">
                            <h3 class="fs-6 fw-bold mb-1 accent-text"><?= $item['nama_peran']; ?></h3>
                            <p class="mb-1 small"><?= $item['organisasi']; ?></p>
                            <span class="badge" style="background-color: var(--bs-heading-color); color: var(--bs-text-light); font-size: 0.7rem;"><?= $item['jenis']; ?> - <?= $item['tahun_mulai']; ?></span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                <div class="col-12 text-end">
                    <a href="<?= base_url('pengalaman'); ?>" class="btn btn-sm btn-cta mt-2">Lihat Semua Pengalaman</a>
                </div>
            </div>
        </section>
        
        <section class="mb-5">
            <h2 class="section-title">Keahlian</h2>
            <div class="custom-card p-4">
                <div class="row">
                    <?php foreach ($keahlian as $skill):  
                        $is_soft_skill = in_array($skill['nama_keahlian'], ['Kepemimpinan & Koordinasi Tim', 'Komunikasi Publik', 'Koordinasi Proyek', 'Manajemen Organisasi', 'Kolaborasi Antar Divisi', 'Pengambilan Keputusan Strategis']);
                    ?>
                    <div class="col-12 col-md-6">
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
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="text-end">
                    <a href="<?= base_url('keahlian'); ?>" class="btn btn-sm btn-cta mt-2">Lihat Semua Keahlian</a>
                </div>
            </div>
        </section>
        
    </div>
    
    </div>

<?= $this->endSection() ?>