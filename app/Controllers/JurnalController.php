<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class JurnalController extends BaseController
{
    public function show()
    {
        return view('jurnal/index');
    }
}
