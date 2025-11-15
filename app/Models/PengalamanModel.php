<?php

namespace App\Models;

use CodeIgniter\Model;

class PengalamanModel extends Model
{
    protected $table = 'pengalaman';
    protected $primaryKey = 'id';
    protected $allowedFields = ['jenis', 'nama_peran', 'organisasi', 'deskripsi', 'tahun_mulai', 'tahun_selesai'];
    
    /**
     * Mengambil semua riwayat pengalaman, diurutkan berdasarkan id terbaru.
     */
    public function getPengalaman()
    {
        return $this->orderBy('id', 'DESC')->findAll();
    }
}