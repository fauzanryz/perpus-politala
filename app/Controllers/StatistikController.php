<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class StatistikController extends BaseController
{
    public function index()
    {
        return view('statistik/index');
    }
}
