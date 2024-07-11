<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class KatalogController extends BaseController
{
    public function index()
    {
        return view('admin/kelola-katalog/index');
    }
}
