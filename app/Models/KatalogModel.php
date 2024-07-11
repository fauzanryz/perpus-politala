<?php

namespace App\Models;

use CodeIgniter\Model;

class KatalogModel extends Model
{
    protected $table = 'collections';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'author', 'PublishLocation', 'publishyear', 'publisher', 'coverurl', 'callnumber'];

    public function getNewCollectionOpac()
    {
        $query = $this->db->query("CALL 20newCollectionOpac()");
        return $query->getResultArray();
    }
    public function getTopCollectionOpac()
    {
        $query = $this->db->query("CALL topCollectionOpac()");
        return $query->getResultArray();
    }
    public function getDetailCollectionOpac($id)
    {
        $query = $this->db->query("CALL detailCatalogOpac(" . $id . ")");
        return $query->getResultArray();
    }
    public function getShowCollectionOpac($id)
    {
        $query = $this->db->query("CALL showCollectionOpac(" . $id . ")");
        return $query->getResultArray();
    }
    
        public function searchOpac($key)
        {
            $query = $this->db->table('catalogs')
                ->like('Title', $key)
                ->orLike('Author', $key)
                ->orLike('Publikasi', $key)
                ->orLike('Languages', $key)
                ->limit(25)
                ->orderBy('Title', 'ASC')
                ->get();
            return $query->getResultArray();
        }
}
