<?php

namespace App\Models;

use CodeIgniter\Model;

class KoleksiModel extends Model
{
    protected $table = 'collections';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'author', 'PublishLocation', 'publishyear', 'publisher', 'coverurl', 'callnumber'];

    public function getDigitalCollection($key)
    {
        $query = $this->db->query("CALL showKontenDigital(?)", [$key]);
        return $query->getResultArray();
    }
    public function searchDigitalCollection($key)
    {
        $query = $this->db->query("CALL showKontenDigital(?)", [$key]);
        return $query->getResultArray();
    }
    public function getDetailDigitalCollection($id)
    {
        $query = $this->db->query("CALL showKontenDigital(" . $id . ")");
        return $query->getResultArray();
    }
}
