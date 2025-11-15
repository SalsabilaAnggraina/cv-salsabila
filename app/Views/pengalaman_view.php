<?= $this->extend('layout/main_layout') ?>

<?= $this->section('content') ?>

<section id="pengalaman" class="mb-5">
    
    <h3 class="section-title fs-4" style="color: var(--bs-text-light) !important; border-bottom: 2px solid var(--bs-accent-color);">Magang</h3>
    <div class="space-y-4">
        <?= $magang_html; ?>
    </div>
    
    <h3 class="section-title mt-5 fs-4" style="color: var(--bs-text-light) !important; border-bottom: 2px solid var(--bs-accent-color);">Organisasi</h3>
    <div class="space-y-4">
        <?= $organisasi_html; ?>
    </div>

    <h3 class="section-title mt-5 fs-4" style="color: var(--bs-text-light) !important; border-bottom: 2px solid var(--bs-accent-color);">Komunitas</h3>
    <div class="space-y-4">
        <?= $komunitas_html; ?>
    </div>
    
</section>

<?= $this->endSection() ?>