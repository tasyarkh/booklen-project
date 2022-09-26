<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\BookModel;
use CodeIgniter\Validation\Validation;

class User extends BaseController
{

    protected $usermodel;
    public function __construct()
    {
        $this->usermodel = new UserModel();
        $this->bookmodel = new BookModel();
    }

    public function index()
    {
        if (session('level') != '2') {
            session()->setFlashdata('belum', "Anda Belum Login");
            return redirect()->to(base_url('login'));
        }

        $akun = $this->usermodel->hitungUser();
        $book = $this->bookmodel->hitungBook();
        $data = [
            'title' => 'Dashboard | Booklen',
            'active' => 'admin',
            'akun' => $akun,
            'book' => $book,
        ];

        return view('user/index');
    }

    public function user()
    {
        $user = $this->usermodel->findAll();
        $data = [
            'title' => 'Users | Booklen',
            'active' => 'user',
            'user' => $user,
            'validation' => \Config\Services::validation(),

        ];
        return view('admin/user/index', $data);
    }
    
    public function save()
    {
        if (!$this->validate(
            [
                'username' => [
                    'rules' => 'required|is_unique[user.username]',
                    'errors' => [
                        'required' => '{field} harus diisi',
                        'is_unique' => '{field} sudah terdaftar'
                    ]
                ]
            ]
        )) {

            return redirect()->to(base_url('user'))->withInput();
        }
        $today = date("Y-m-d H:i:s");
        // masuk database
        $data = array(

            'id' => $this->request->getVar('id'),
            'namaUser'        => $this->request->getVar('namaUser'),
            'username'        => $this->request->getVar('username'),
            'password'                => sha1($this->request->getVar('password')),
            'level' => $this->request->getVar('level'),
            'status' => "Aktif",
            'created_at' => $today,


        );
        $this->usermodel->saveUser($data);
        session()->setFlashdata('userSimpan', 'Data Berhasil Disimpan');
        return redirect()->to(base_url('user'));
    }

    public function delete($id)
    {

        $this->usermodel->delete($id);
        session()->setFlashdata('userHapus', 'Data telah dihapus');
        return redirect()->to(base_url('user'));
    }

    public function edit()
    {

        $id = $this->request->getPost('id');
        $data = array(
            'namaUser'        => $this->request->getPost('namaUser'),
            'level' => $this->request->getPost('level'),
            'status' => $this->request->getPost('status'),

        );
        $this->usermodel->updateUser($data, $id);
        session()->setFlashdata('userEdit', 'Data berhasil diubah');
        return redirect()->to(base_url('user'));
    }
    public function ubahPassword()
    {

        $id = $this->request->getPost('id');
        $data = array(

            'password' => sha1($this->request->getPost('password')),

        );
        $this->usermodel->updateUser($data, $id);
        session()->setFlashdata('userPass', 'Data berhasil diubah');
        return redirect()->to(base_url('user'));
    }
}
