<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class EBookController extends BaseController
{
    public function index()
    {
        return view('e-book/index');
    }
}
