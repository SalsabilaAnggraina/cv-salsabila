<h1 class="section-title mb-4">Riwayat Pengalaman & Organisasi Lengkap</h1>
<a href="<?= base_url('/') ?>" class="btn btn-sm mb-3" style="background-color: var(--bs-text-dark); color: var(--bs-text-light);">← Kembali ke Beranda</a>

<div class="row">
    <?php foreach ($pengalaman_lengkap as $pe): ?>
    <div class="col-12 mb-4">
        <div class="card p-4 card-custom">
            <div class="d-flex justify-content-between align-items-start mb-2">
                <div>
                    <h4 class="fw-bold mb-0" style="color: var(--bs-heading-color);"><?= $pe['nama_peran'] ?></h4>
                    <p class="lead mb-1 text-muted"><?= $pe['organisasi'] ?> | [<?= $pe['jenis'] ?>]</p>
                </div>
                <span class="badge rounded-pill fs-6" style="background-color: var(--bs-accent-color); color: var(--bs-text-light);">
                    <?= $pe['tahun_mulai'] ?> - <?= $pe['tahun_selesai'] ?>
                </span>
            </div>
            <p><?= nl2br(esc($pe['deskripsi'])) ?></p>
        </div>
    </div>
    <?php endforeach; ?>
</div>