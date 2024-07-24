<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ArtikelModel;

class ArtikelController extends BaseController
{
    public function show()
    {
        $model = new ArtikelModel();
        $keyword = $this->request->getVar('keyword');
        $data['collections'] = $model->getArticle($keyword);

        return view('artikel/index', $data);
    }
    public function search()
    {
        $model = new ArtikelModel();
        $keyword = $this->request->getVar('keyword');
        $data['collections'] = $model->searchArticle($keyword);

        return view('artikel/search', $data);
    }
    public function detail($id)
    {
        $model = new ArtikelModel();
        $data['collections_detail'] = $model->getDetailArticle($id);

        return view('artikel/detail', $data);
    }
}
