<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table      = 'book';
    protected $primaryKey = 'idBuku';
    protected $allowedFields = [];

    public function saveBook($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function getBook($idBuku = false)
    {
        if ($idBuku === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['idBuku' => $idBuku]);
        }
    }

    public function updateBook($data, $idBuku)
    {
        $query = $this->db->table($this->table)->update($data, array('idBuku' => $idBuku));
        return $query;
    }

    public function hitungBook()
    {
        $builder = $this->db->table('book');
        $query = $builder->countAllResults();
        return $query;
    }

}
