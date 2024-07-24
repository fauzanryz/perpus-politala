<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'collections';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'author', 'PublishLocation', 'publishyear', 'publisher', 'coverurl', 'callnumber'];

    public function getArticle($key)
    {
        $query = $this->db->query("CALL facedArticle(?)", [$key]);
        return $query->getResultArray();
    }
    public function searchArticle($key)
    {
        $query = $this->db->query("CALL facedArticle(?)", [$key]);
        return $query->getResultArray();
    }
    public function getDetailArticle($id)
    {
        $query = $this->db->query("CALL facedArticle(" . $id . ")");
        return $query->getResultArray();
    }
}
