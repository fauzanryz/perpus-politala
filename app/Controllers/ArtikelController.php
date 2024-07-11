<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\KoleksiModel;

class ArtikelController extends BaseController
{
    public function show()
    {
        $model = new KoleksiModel();
        $keyword = $this->request->getVar('keyword');
        $data['collections'] = $model->getDigitalCollection($keyword);

        return view('artikel/index', $data);
    }
    public function search()
    {
        $model = new KoleksiModel();
        $keyword = $this->request->getVar('keyword');
        $data['collections'] = $model->searchDigitalCollection($keyword);

        return view('artikel/search', $data);
    }
    public function detail($id)
    {
        $model = new KoleksiModel();
        $data['collections_detail'] = $model->getDetailDigitalCollection($id);

        return view('artikel/detail', $data);
    }
}
