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
        // Load Models
        $biodataModel = new BiodataModel();
        $pendidikanModel = new PendidikanModel();
        $pengalamanModel = new PengalamanModel();
        $keahlianModel = new KeahlianModel();

        // Ambil data dari masing-masing model
        $data = [
            'biodata' => $biodataModel->getBiodata(),
            'pendidikan' => $pendidikanModel->getPendidikan(),
            'pengalaman' => $pengalamanModel->getPengalaman(),
            'keahlian' => $keahlianModel->getKeahlian(),
            'title' => 'Curriculum Vitae Salsabila Anggraina Putri'
        ];

        // Tampilkan view
        return view('cv_view', $data);
    }
}