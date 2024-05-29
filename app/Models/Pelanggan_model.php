<?php
namespace App\Models;

use CodeIgniter\Model;

class Pelanggan_model extends Model
{
    protected $table = 'ps_pelanggan';
    protected $primaryKey = 'PSPelanggan_id';
    protected $allowedFields = ['PSPelanggan_Nama', 'PSPelanggan_Alamat', 'PSPelanggan_Tgl'];

    public function getPelanggan($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->find($id);
        }
    }

    public function insertPelanggan($data)
    {
        return $this->insert($data);
    }

    public function updatePelanggan($id, $data)
    {
        $row = $this->find($id);

        if ($row) {
            $updated = $this->where('PSPelanggan_id', $id)->set($data)->update();

            if ($updated) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function deletePelanggans($id)
    {
        return $this->db->table($this->table)->delete(['PSPelanggan_id' => $id]);
    }
}
?>