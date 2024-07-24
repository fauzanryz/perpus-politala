<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class EBookController extends BaseController
{
    public function show()
    {
        return view('e-book/index');
    }
}
