<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class JurnalController extends BaseController
{
    public function index()
    {
        return view('jurnal/index');
    }
}
