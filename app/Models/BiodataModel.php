<?php namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model
{
    protected $table      = 'biodata';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'email', 'github', 'instagram', 'linkedin', 'bio']; 

    public function getBiodata()
    {
        // Karena hanya ada satu baris data, kita ambil yang pertama (first())
        return $this->first();
    }
}