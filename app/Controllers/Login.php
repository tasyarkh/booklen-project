<?php

namespace App\Controllers;

use App\Models\loginModel;
use CodeIgniter\HTTP\Request;

$request = \Config\Services::request();


class Login extends BaseController
{
    protected $loginModel;
    public function __construct()
    {
        $this->loginModel = new loginModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Login | Booklen'
        ];
        return view('login', $data);
    }

    public function cekLogin()
    {
        $username = $this->request->getPost('username');
        $password = sha1($this->request->getPost('password'));

        $row = $this->loginModel->cekLogin($username, $password);
        if (isset($row['username'], $row['password'])) {
            if (($row['username'] == $username) && ($row['password'] == $password)) {
                if (($row['status'] == "Aktif") && ($row['level'] == "1")) {
                    session()->set('username', $row['username']);
                    session()->set('namaUser', $row['namaUser']);
                    session()->set('level', $row['level']);
                    session()->setFlashdata('berhasil', 'Selamat Anda Berhasil Login');
                    return redirect()->to(base_url('admin'));
                } else
                if (($row['status'] == "Aktif") && ($row['level'] == "2")) {
                    session()->set('username', $row['username']);
                    session()->set('namaUser', $row['namaUser']);
                    session()->set('level', $row['level']);
                    session()->setFlashdata('berhasil', 'Selamat Anda Berhasil Login');
                    return redirect()->to(base_url('user'));
                } else {
                    session()->setFlashdata('tidakAktif', 'Akun anda belum aktif');
                    return redirect()->to(base_url('login'))->withInput();
                }
            }
        } else {
            session()->setFlashdata('gagal', 'Username atau Password salah !!');
            return redirect()->to(base_url('login'))->withInput();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
