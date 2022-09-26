<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\BookModel;
use App\Models\InoutModel;
use CodeIgniter\Validation\Validation;

class Admin extends BaseController
{
    protected $usermodel;
    public function __construct()
    {
        $this->usermodel = new UserModel();
        $this->bookmodel = new BookModel();
        $this->inoutmodel = new InoutModel();
    }
    public function index()
    {
        if (session('level') != '1') {
            session()->setFlashdata('belum', "Anda Belum Login");
            return redirect()->to(base_url('login'));
        }

        $akun = $this->usermodel->hitungUser();
        $book = $this->bookmodel->hitungBook();
        $inout = $this->inoutmodel->hitungInout();
        $data = [
            'title' => 'Dashboard | Booklen',
            'active' => 'admin',
            'akun' => $akun,
            'book' => $book,
            'inout' => $inout,
        ];
        return view('admin/index', $data);
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

            return redirect()->to(base_url('datusr'))->withInput();
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
        session()->setFlashdata('userSimpan', 'User Berhasil Disimpan');
        return redirect()->to(base_url('datusr'));
    }

    public function delete($id)
    {
        $this->usermodel->delete($id);
        session()->setFlashdata('userHapus', 'User telah dihapus');
        return redirect()->to(base_url('datusr'));
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
        session()->setFlashdata('userEdit', 'User berhasil diubah');
        return redirect()->to(base_url('datusr'));
    }

    public function update($id)
    {
        helper(['form', 'url']);

        $validation = $this->validate([
            'title' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Judul Post.'
                ]
            ],
            'content'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan konten Post.'
                ]
            ],
        ]);

        if(!$validation) {

            //model initialize
            $usermodel = new UserModel();

            //render view with error validation message
            return view('datusr', [
                'edit' => $usermodel->find($id),
                'validation' => $this->validator
            ]);

        } else {

            //model initialize
            $usermodel = new UserModel();
            
            //insert data into database
            $usermodel->update($id, [
                'id'   => $this->request->getPost('id'),
                'namaUser' => $this->request->getPost('namaUser'),
                'username' => $this->request->getPost('username'),
                'level' => $this->request->getPost('level'),
                'status' => $this->request->getPost('status')
            ]);

            //flash message
            session()->setFlashdata('userEdit', 'User Berhasil Diupdate');

            return redirect()->to(base_url('datusr'));
                      }
        }

    public function inout()
    {
        return view('admin/inout/index');
    }
}
