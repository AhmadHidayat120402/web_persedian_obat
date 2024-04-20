<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_user;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function process()
    {
        $muser = new User();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $cek = $muser->get_data($username, $password);

        if ($cek) {
            // Autentikasi berhasil, set sesi berdasarkan peran pengguna
            session()->set('username', $cek['username']);
            session()->set('id', $cek['id']);
            session()->set('role', $cek['role']);

            if ($cek['role'] == 'admin') {
                return redirect()->to(base_url('admin'));
            } else {
                return redirect()->to(base_url('pemilik'));
            }
        } else {
            session()->setFlashdata('gagal', 'Username / Password salah atau peran tidak valid');
            return redirect()->to(base_url('/'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}
