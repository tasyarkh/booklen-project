<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Validation\Validation;



class Regist extends BaseController
{
    protected $usermodel;
    public function __construct()
    {
        $this->usermodel = new UserModel();
    }

    public function index()
    {
        return view('register/regist');
    }

    public function create()
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

            return redirect()->to(base_url('login'))->withInput();
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
        return redirect()->to(base_url('login'));
    }
    
}
