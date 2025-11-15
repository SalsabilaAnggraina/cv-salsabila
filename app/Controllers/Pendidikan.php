<?php

namespace App\Controllers;

use App\Models\PendidikanModel;

class Pendidikan extends BaseController
{
    public function index()
    {
        $pendidikanModel = new PendidikanModel();
        
        $data = [
            'pendidikan' => $pendidikanModel->getPendidikan(),
            'title' => 'Riwayat Pendidikan | CV Salsabila'
        ];

        // Memuat view baru
        return view('pendidikan_view', $data);
    }
}