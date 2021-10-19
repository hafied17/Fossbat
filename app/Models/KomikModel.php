<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table = 'komik';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul', 'ttl', 'ssb', 'ayah', 'ibu', 'administrasi', 'goldar', 'kelamin', 'bBadan', 'tBadan', 'kota', 'sd', 'smp', 'akademi', 'prestasi'];

    public function getKomik($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
    public function alldata($id = false)
    {
        return $this->db->table('komik')->get()->getResultArray();
    }
    public function search($keyword)
    {
        return $this->table('komik')->like('judul', $keyword);
    }
}
