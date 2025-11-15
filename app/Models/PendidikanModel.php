<?php

namespace App\Models;

use CodeIgniter\Model;

class PendidikanModel extends Model
{
    protected $table = 'pendidikan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tingkat', 'institusi', 'jurusan', 'tahun_masuk', 'tahun_lulus'];
    
    /**
     * Mengambil semua riwayat pendidikan, diurutkan berdasarkan id terbaru (asumsi pendidikan terbaru di atas)
     */
    public function getPendidikan(int $limit = 0)
    {
        if ($limit > 0) {
            $this->limit($limit);
        }
        // Asumsi diurutkan berdasarkan id DESC (terbaru di atas)
        return $this->orderBy('id', 'DESC')->findAll(); 
    }
}