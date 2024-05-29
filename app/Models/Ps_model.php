<?php
namespace App\Models;

use CodeIgniter\Model;

class Ps_model extends Model
{
    protected $table = 'ps';
    protected $primaryKey = 'ps_id';
    protected $allowedFields = ['ps_id','ps_nama', 'ps_waktu', 'ps_kondisi'];

    public function getPs($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->find($id);
        }
    }
}