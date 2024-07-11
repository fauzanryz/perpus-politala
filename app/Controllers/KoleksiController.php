<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\KoleksiModel;

class KoleksiController extends BaseController
{
    public function show()
    {
        $model = new KoleksiModel();
        $keyword = $this->request->getVar('keyword');
        $data['collections'] = $model->getDigitalCollection($keyword);

        return view('koleksi/index', $data);
    }
    public function search()
    {
        $model = new KoleksiModel();
        $keyword = $this->request->getVar('keyword');
        $data['collections'] = $model->searchDigitalCollection($keyword);

        return view('koleksi/search', $data);
    }
    public function detail($id)
    {
        $model = new KoleksiModel();
        $data['collections_detail'] = $model->getDetailDigitalCollection($id);

        return view('koleksi/detail', $data);
    }
}
