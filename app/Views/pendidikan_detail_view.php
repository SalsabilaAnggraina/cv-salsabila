<h1 class="section-title mb-4">Riwayat Pendidikan Lengkap</h1>
<a href="<?= base_url('/') ?>" class="btn btn-sm mb-3" style="background-color: var(--bs-text-dark); color: var(--bs-text-light);">← Kembali ke Beranda</a>

<div class="row">
    <?php foreach ($pendidikan_lengkap as $p): ?>
    <div class="col-12 mb-4">
        <div class="card p-4 card-custom">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h4 class="fw-bold mb-0" style="color: var(--bs-heading-color);"><?= $p['institusi'] ?></h4>
                    <p class="lead mb-1 text-muted"><?= $p['jurusan'] ?> (<?= $p['tingkat'] ?>)</p>
                </div>
                <span class="badge rounded-pill fs-6" style="background-color: var(--bs-accent-color); color: var(--bs-text-light);">
                    <?= $p['tahun_masuk'] ?> - <?= $p['tahun_lulus'] ?>
                </span>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>