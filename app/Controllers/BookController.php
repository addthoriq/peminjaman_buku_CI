<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookModel;

class BookController extends BaseController
{
    public function index()
    {
      
    }

    public function store()
    {
      $buku = new BookModel();
      $validasi = \Config\Services::validation();
      $validasi->setRules([
        'nm_buku' => 'required',
      ]);
      $isDataValid = $validasi->withRequest($this->request)->run();

      if ($isDataValid) {
        $buku->insert([
          'genre_id' => $this->request->getPost('id_genre'),
          'judul_buku' => $this->request->getPost('jdl_buku'),
          'penulis' => $this->request->getPost('pengarang'),
          'kode_isbn' => $this->request->getPost('isbn'),
          'deskripsi_buku' =>
        $this->request->getPost('deskripsi'),
          'gambar' =>
        $this->request->getPost('gbr_buku'),

        ]);
        return redirect('admin/buku');
      }

      echo view('admin/buku/tambah_buku');
    }
}
