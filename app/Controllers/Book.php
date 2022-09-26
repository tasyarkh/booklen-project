<?php

namespace App\Controllers;

use App\Models\BookModel;
use CodeIgniter\Validation\Validation;

class Book extends BaseController
{
    protected $bookmodel;
    public function __construct()
    {
        $this->bookmodel = new BookModel();
    }

    public function index()
    {
        $buku = $this->bookmodel->findAll();
        $data = [
            'title' => 'Book | Booklen',
            'buku' => $buku,
            'validation' => \Config\Services::validation(),
        ];

        return view('admin/book/index', $data);
    }
    
    public function save()
    {
        if (!$this->validate(
            [
                'namaBuku' => [
                    'rules' => 'required|is_unique[book.namaBuku]',
                    'errors' => [
                        'required' => '{field} harus diisi',
                        'is_unique' => '{field} sudah terdaftar'
                    ]
                ]
            ]
        )) {

            return redirect()->to(base_url('book'))->withInput();
        }
        $today = date("Y-m-d H:i:s");
        // masuk database
        $data = array(

            'idBuku'       => $this->request->getVar('idBuku'),
            'namaBuku'     => $this->request->getVar('namaBuku'),
            'genre'        => $this->request->getVar('genre'),
            'author'       => $this->request->getVar('author'),
            'pinjam'       => $today,
            'kembali'      => $today,
        );
        $this->bookmodel->saveBook($data);
        session()->setFlashdata('userSimpan', 'Data buku Berhasil Disimpan');
        return redirect()->to(base_url('book'));
    }

    public function delete($idBuku)
    {
        $this->bookmodel->delete($idBuku);
        session()->setFlashdata('userHapus', 'Buku buku telah dihapus');
        return redirect()->to(base_url('book'));
    }

    public function edit()
    {

        $idBuku = $this->request->getPost('idBuku');
        $data = array(
            'namaBuku' => $this->request->getPost('namaBuku'),
            'genre'    => $this->request->getPost('genre'),
            'author'   => $this->request->getPost('author'),

        );
        $this->bookmodel->updateBook($data, $idBuku);
        session()->setFlashdata('userEdit', 'Data buku berhasil diubah');
        return redirect()->to(base_url('book'));
    }
}
