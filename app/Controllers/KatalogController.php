<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\KatalogModel;

class KatalogController extends BaseController
{
    public function show()
    {
        $model = new KatalogModel();
        $data['collections_top'] = $model->getTopCollectionOpac();
        $data['collections_new'] = $model->getNewCollectionOpac();

        // dd($model->cariAuthor("hari"));
        // dd($data['collections_top']);

        return view('katalog/index', $data);
    }
    public function search(){
        $model = new KatalogModel();
        $key = $this->request->getVar('key');
        
        $data['search'] = $model->searchOpac($key);

        // dd($data['search']);
        return view('katalog/search', $data);
    }
    public function detail($id)
    {
        $model = new KatalogModel();
        $data['collections_detail'] = $model->getDetailCollectionOpac($id);
        $data['collections_show'] = $model->getShowCollectionOpac($id);

        // Debug data collections
        // dd($data['collections_show']);

        return view('katalog/detail', $data);
    }
}
