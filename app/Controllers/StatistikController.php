<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class StatistikController extends BaseController
{
    public function show()
    {
        return view('statistik/index');
    }
}
