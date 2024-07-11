<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $UserModel;
    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function login()
    {
        return view('auth/login');
    }

    public function auth()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required|max_length[50]',
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|max_length[255]',
            ],
        ])) {
            // Jika Data Valid
            $identity = esc($this->request->getVar('username'));
            $password = $this->request->getPost('password');
            $check = $this->UserModel->login($identity, $password);
            if ($check) {
                // Jika Datanya Ada
                session()->set('log', true);
                session()->set('username', $check['username']);

                return redirect()->to(base_url('/dashboard-admin'));
            } else {
                // Jika Datanya Tidak Ada
                session()->setFlashdata('pesan', 'Email/Username atau Password Tidak Cocok!');
                return redirect()->to(base_url('/login'));
            }
        } else {
            // Jika Data Tidak Valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('/login'));
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('username');
        session()->setFlashdata('pesan', 'Berhasil keluar!');
        return redirect()->to(base_url('/login'));
    }
}
