<?php

namespace App\Models;

use CodeIgniter\Model;

class InoutModel extends Model
{
    protected $table      = 'kelmas';
    protected $primaryKey = 'idPinjam';
    protected $allowedFields = [];

    public function savePinjam($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function getPinjam($idPinjam = false)
    {
        if ($idPinjam === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['idPinjam' => $idPinjam]);
        }
    }

    public function updateInout($data, $idPinjam)
    {
        $query = $this->db->table($this->table)->update($data, array('idPinjam' => $idPinjam));
        return $query;
    }

    public function hitungInout()
    {
        $builder = $this->db->table('kelmas');
        $query = $builder->countAllResults();
        return $query;
    }

}
