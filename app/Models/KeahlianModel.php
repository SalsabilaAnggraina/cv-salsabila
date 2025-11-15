<?php

namespace App\Models;

use CodeIgniter\Model;

class KeahlianModel extends Model
{
    protected $table = 'keahlian';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_keahlian', 'level'];
    
    /**
     * Mengambil semua keahlian, diurutkan berdasarkan level tertinggi.
     */
    public function getKeahlian()
    {
        return $this->orderBy('level', 'DESC')->findAll();
    }
}