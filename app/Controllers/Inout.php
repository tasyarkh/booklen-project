<?php

namespace App\Controllers;

use App\Models\InoutModel;
use CodeIgniter\Validation\Validation;

class Inout extends BaseController
{
    protected $inoutmodel;
    public function __construct()
    {
        $this->inoutmodel = new InoutModel();
    }

    public function index()
    {
        $inout = $this->inoutmodel->findAll();
        $data = [
            'title' => 'Data Peminjaman dan Pengembalian | Booklen',
            'inout' => $inout,
            'status' => "dipinjam",
            'validation' => \Config\Services::validation(),
        ];

        return view('admin/inout/index', $data);
    }
    
    public function save()
    {
        if (!$this->validate(
            [
                'namaUser' => [
                    'rules' => 'required|is_unique[kelmas.namaUser]',
                    'errors' => [
                        'required' => '{field} harus diisi',
                        'is_unique' => '{field} sudah terdaftar'
                    ]
                ]
            ]
        )) {

            return redirect()->to(base_url('inout'))->withInput();
        }
        $today = date("Y-m-d H:i:s");
        // masuk database
        $data = array(

            'idPinjam'       => $this->request->getVar('idPinjam'),
            'namaBuku'     => $this->request->getVar('namaBuku'),
            'namaUser'        => $this->request->getVar('namaUser'),
            'status' => "dipinjam",
            'tgl_pinjam'       => $today,
            'tgl_kembali'      => $today,
        );
        $this->inoutmodel->saveInout($data);
        session()->setFlashdata('userSimpan', 'Data Peminjama Berhasil Disimpan');
        return redirect()->to(base_url('pikel'));
    }

    public function edit()
    {
        $idPinjam = $this->request->getPost('idPinjam');
        $data = array(
            'namaUser'        => $this->request->getPost('namaUser'),
            'namaBuku' => $this->request->getPost('namaBuku'),
            'status' => $this->request->getPost('status'),
            'tgl_pinjam' => $this->request->getPost('tgl_pinjam'),
            'tgl_kembali' => $this->request->getPost('tgl_kembali'),

        );
        $this->inoutmodel->updateInout($data, $idPinjam);
        session()->setFlashdata('userEdit', 'Transaksi berhasil diubah');
        return redirect()->to(base_url('pikel'));
    }

    public function update($idPinjam)
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
            $inoutmodel = new InoutModel();

            //render view with error validation message
            return view('pikel', [
                'edit' => $inoutmodel->find($idPinjam),
                'validation' => $this->validator
            ]);

        } else {

            //model initialize
            $inoutmodel = new InoutModel();
            
            //insert data into database
            $inoutmodel->update($idPinjam, [
                'idPinjam'   => $this->request->getPost('idPinjam'),
                'namaUser' => $this->request->getPost('namaUser'),
                'namaBuku' => $this->request->getPost('namaBuku'),
                'status' => $this->request->getPost('status'),
                'tgl_pinjam' => $this->request->getPost('tgl_pinjam'),
                'tgl_kembali' => $this->request->getPost('tgl_kembali')
            ]);

            return redirect()->to(base_url('pikel'));
                      }
        }

    public function delete($idPinjam)
    {

        $this->inoutmodel->delete($idPinjam);
        session()->setFlashdata('userHapus', 'Data buku telah dihapus');
        return redirect()->to(base_url('pikel'));
    }

    public function pikel()
    {
    
      $inout = $this->inoutmodel->findAll();
      $data = [
        'title' => 'Peminjaman dan Pengembalian | Booklen',
        'inout' => $inout,
        'validation' => \Config\Services::validation(),
    ];

      return view('user/pikel/index', $data);
    }
}
