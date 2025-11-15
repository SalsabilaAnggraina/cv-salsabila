<?php

namespace App\Controllers;

use App\Models\PengalamanModel;
use CodeIgniter\Controller; // Pastikan menggunakan use CodeIgniter\Controller jika menggunakan class Controller

class Pengalaman extends BaseController
{
    public function index()
    {
        $pengalamanModel = new PengalamanModel();
        $allPengalaman = $pengalamanModel->getPengalaman();

        // 1. Inisialisasi array untuk setiap kategori
        $organisasi = [];
        $komunitas = [];
        $magang = [];

        // 2. Loop data untuk mengelompokkan berdasarkan kolom 'jenis'
        foreach ($allPengalaman as $item) {
            $jenis = strtolower($item['jenis']);
            if (strpos($jenis, 'organisasi') !== false) {
                $organisasi[] = $item;
            } elseif (strpos($jenis, 'komunitas') !== false) {
                $komunitas[] = $item;
            } elseif (strpos($jenis, 'magang') !== false || strpos($jenis, 'internship') !== false) {
                $magang[] = $item;
            }
        }
        
        // 3. Render list HTML untuk setiap kategori di Controller
        $data = [
            'magang_html' => $this->render_experience_list($magang),
            'organisasi_html' => $this->render_experience_list($organisasi),
            'komunitas_html' => $this->render_experience_list($komunitas), // KOREKSI DI SINI!
            'title' => 'Riwayat Pengalaman | CV Salsabila'
        ];

        // Memuat view baru
        return view('pengalaman_view', $data);
    }

    /**
     * Helper untuk merender daftar pengalaman.
     * @param array $items Daftar pengalaman.
     * @return string HTML yang dirender.
     */
    private function render_experience_list(array $items): string
    {
        if (empty($items)) {
            return "<p class='text-muted fst-italic'>Belum ada data di kategori ini.</p>";
        }

        $html = '';
        foreach ($items as $item) {
            
            // Logika deskripsi poin
            $deskripsi_poin = explode('.', $item['deskripsi']);
            $ul_content = '';
            foreach ($deskripsi_poin as $poin) {
                $poin = trim($poin);
                if (!empty($poin)) {
                    // Gunakan string literal untuk HTML
                    $ul_content .= "<li class='mb-1'><i class='bi bi-check-circle-fill me-2 accent-text'></i>{$poin}.</li>";
                }
            }
            
            // Render kartu HTML
            $html .= <<<EOT
            <div class="custom-card p-4 mb-4">
                <div class="d-flex justify-content-between align-items-start">
                    <h3 class="fs-5 fw-bold">{$item['nama_peran']}</h3>
                    <span class="badge py-2 px-3 fw-semibold" style="background-color: var(--bs-accent-color) !important; color: var(--bs-text-light) !important;">{$item['tahun_mulai']} - {$item['tahun_selesai']}</span>
                </div>
                <p class="mb-2 fw-semibold">{$item['organisasi']}</p>
                <ul class="list-unstyled mb-0">{$ul_content}</ul>
                <p class="small mt-2 fst-italic">Jenis: {$item['jenis']}</p>
            </div>
            EOT;
        }
        return $html;
    }
}