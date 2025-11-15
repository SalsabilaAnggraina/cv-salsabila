<?= $this->extend('layout/main_layout') ?>

<?= $this->section('content') ?>

<section id="pendidikan" class="mb-5">
    <h2 class="section-title text-start">Riwayat Pendidikan</h2>
    
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

<?= $this->endSection() ?>