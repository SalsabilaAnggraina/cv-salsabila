<?php

namespace App\Controllers;

use App\Models\BiodataModel;
use App\Models\PendidikanModel;
use App\Models\PengalamanModel;
use App\Models\KeahlianModel;

class Home extends BaseController
{
    public function index()
    {
        // ... (Model loading tetap sama)
        $biodataModel = new BiodataModel();
        $pendidikanModel = new PendidikanModel();
        $pengalamanModel = new PengalamanModel();
        $keahlianModel = new KeahlianModel();

        // --------------------------------------------------------
        // LOGIKA PENGAMBILAN & FILTERING DATA KHUSUS HOME PAGE
        // --------------------------------------------------------

        // 1. Pendidikan: Filter hanya yang TAHUN LULUS = 'Sekarang' atau 'Present'
        $allPendidikan = $pendidikanModel->getPendidikan();
        $pendidikanAktif = [];
        $currentIndicator = ['sekarang', 'present', 'saat ini'];

        foreach ($allPendidikan as $p) {
            if (in_array(strtolower($p['tahun_lulus']), $currentIndicator)) {
                $pendidikanAktif[] = $p;
            }
        }
        $pendidikan = $pendidikanAktif; // Ambil semua yang aktif

        // 2. Pengalaman: (Logika tetap sama: Ambil 2 yang aktif)
        $allPengalaman = $pengalamanModel->getPengalaman();
        $magangAktif = [];
        $komunitasAktif = [];
        $organisasiAktif = [];
        
        // ... (Logika filtering pengalaman yang aktif tetap sama)
        foreach ($allPengalaman as $item) {
            $jenis = strtolower($item['jenis']);
            $selesai = strtolower($item['tahun_selesai']);
            $isAktif = in_array($selesai, $currentIndicator);
            
            if ($isAktif) {
                if (strpos($jenis, 'magang') !== false || strpos($jenis, 'internship') !== false) {
                    $magangAktif[] = $item;
                } elseif (strpos($jenis, 'komunitas') !== false) {
                    $komunitasAktif[] = $item;
                } elseif (strpos($jenis, 'organisasi') !== false) {
                    $organisasiAktif[] = $item;
                }
            }
        }
        
        $filteredPengalaman = array_merge($magangAktif, $organisasiAktif, $komunitasAktif);
        $pengalaman = array_slice($filteredPengalaman, 0, 2); 

        // 3. Keahlian: (Logika tetap sama: Ambil 2 Soft Skill dan 2 Technical Skill terbaik)
        $allKeahlian = $keahlianModel->getKeahlian(); 
        $soft_skills = [];
        $technical_skills = [];
        
        // ... (Logika filtering 4 keahlian terbaik tetap sama)
        $soft_skills_list = [ /* ... */ ];
        foreach ($allKeahlian as $skill) {
            if (in_array($skill['nama_keahlian'], $soft_skills_list) && count($soft_skills) < 2) {
                $soft_skills[] = $skill;
            } elseif (!in_array($skill['nama_keahlian'], $soft_skills_list) && count($technical_skills) < 2) {
                $technical_skills[] = $skill;
            }
            if (count($soft_skills) >= 2 && count($technical_skills) >= 2) break;
        }


        // --------------------------------------------------------

        $data = [
            'biodata' => $biodataModel->getBiodata(),
            'pendidikan' => $pendidikan,
            'pengalaman' => $pengalaman,
            'keahlian' => array_merge($technical_skills, $soft_skills),
            'title' => 'Curriculum Vitae Salsabila Anggraina Putri'
        ];

        return view('cv_view', $data);
    }
}