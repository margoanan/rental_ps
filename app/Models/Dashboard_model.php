<?php

namespace App\Models;

use CodeIgniter\Model;

class Dashboard_model extends Model
{
    protected $table = 'ps_pelanggan';

    public function getCountPel()
    {
        return $this->countAll();
    }

    public function getCountPs()
    {
        $psModel = new \App\Models\Ps_model();
        return $psModel->countAll();
    }
}
