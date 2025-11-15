<h1 class="section-title mb-4">Daftar Keahlian (Skills)</h1>
<a href="<?= base_url('/') ?>" class="btn btn-sm mb-3" style="background-color: var(--bs-text-dark); color: var(--bs-text-light);">← Kembali ke Beranda</a>

<div class="row">
    <?php foreach ($keahlian_lengkap as $k): ?>
    <div class="col-md-6 mb-4">
        <div class="card p-3 card-custom h-100">
            <h5 class="fw-bold mb-1" style="color: var(--bs-heading-color);"><?= $k['nama_keahlian'] ?></h5>
            <div class="progress" style="height: 25px;">
                <div class="progress-bar progress-bar-custom" role="progressbar" style="width: <?= $k['level'] ?>%;" aria-valuenow="<?= $k['level'] ?>" aria-valuemin="0" aria-valuemax="100">
                    <span class="fw-bold text-white"><?= $k['level'] ?>%</span>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>