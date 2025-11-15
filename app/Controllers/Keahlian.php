<?php

namespace App\Controllers;

use App\Models\KeahlianModel;

class Keahlian extends BaseController
{
    public function index()
    {
        $keahlianModel = new KeahlianModel();

        $data = [
            'keahlian' => $keahlianModel->getKeahlian(),
            'title' => 'Daftar Keahlian | CV Salsabila'
        ];

        // Memuat view baru
        return view('keahlian_view', $data);
    }
}