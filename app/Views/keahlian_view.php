<?= $this->extend('layout/main_layout') ?>

<?= $this->section('content') ?>

<section id="keahlian" class="mb-5">
    <h2 class="section-title text-start">Soft & Hard Skills</h2>
    
    <div class="custom-card p-4">
        
        <?php
        // 1. Definisikan Soft Skills yang akan dipisahkan
        $soft_skills_list = [
            'Kepemimpinan', 
            'Kerja Tim',
            'Manajemen Waktu & Multitasking',
            'Kreativitas',
            'Customer Service',
            'Komunikasi Publik', 
            'Koordinasi Proyek', 
            'Manajemen Organisasi', 
            'Kolaborasi Antar Divisi', 
            'Pengambilan Keputusan Strategis'
        ];
        
        // 2. Inisialisasi array untuk memisahkan data
        $soft_skills = [];
        $technical_skills = [];

        // 3. Loop data untuk membagi ke dalam dua grup
        foreach ($keahlian as $skill) {
            if (in_array($skill['nama_keahlian'], $soft_skills_list)) {
                $soft_skills[] = $skill;
            } else {
                $technical_skills[] = $skill;
            }
        }
        ?>

        <div class="row g-4">
            
            <div class="col-12 col-lg-6 border-start border-lg-0">
                
                <h3 class="fs-5 fw-bold mb-3 accent-text" style="color: var(--bs-text-dark) !important;">Soft Skills</h3>

                <?php foreach ($soft_skills as $skill): ?>
                <div class="mb-3">
                    <small class="d-block mb-1 fw-semibold"><?= $skill['nama_keahlian']; ?> (<?= $skill['level']; ?>%)</small>
                    <div class="progress progress-bg-custom" style="height: 10px;">
                        <div class="progress-bar progress-bar-custom" role="progressbar" style="width: <?= $skill['level']; ?>%;" aria-valuenow="<?= $skill['level']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="badge rounded-pill mt-1" style="background-color: var(--bs-heading-color) !important; color: var(--bs-text-light) !important; font-size: 0.65rem;">Soft Skill</span>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="col-12 col-lg-6">
                <h3 class="fs-5 fw-bold mb-3 accent-text" style="color: var(--bs-text-dark) !important;">Hard Skills</h3>
                
                <?php foreach ($technical_skills as $skill): ?>
                <div class="mb-3">
                    <small class="d-block mb-1 fw-semibold"><?= $skill['nama_keahlian']; ?> (<?= $skill['level']; ?>%)</small>
                    <div class="progress progress-bg-custom" style="height: 10px;">
                        <div class="progress-bar progress-bar-custom" role="progressbar" style="width: <?= $skill['level']; ?>%;" aria-valuenow="<?= $skill['level']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="badge rounded-pill mt-1" style="background-color: var(--bs-accent-color) !important; color: var(--bs-text-light) !important; font-size: 0.65rem;">Technical Skill</span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>