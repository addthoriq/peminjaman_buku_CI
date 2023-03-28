<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookModel;
use App\Models\GenreModel;

class BookController extends BaseController
{
    public function index()
    {
      $buku = new BookModel();
      $data['books'] = $buku->getGenre();
      echo view('admin/buku/beranda_buku', $data);
    }

    public function viewtambah()
    {
      $genre = new GenreModel();
      $dataGenres['genres'] = $genre->findAll();
      echo view('admin/buku/tambah_buku', $dataGenres);
    }

    public function store()
    {
      $buku = new BookModel();
      $validasi = \Config\Services::validation();
      $validasi->setRules([
        'jdl_buku' => 'required',
        'pengarang' => 'required',
        'isbn' => 'required',
        'nm_genre' => 'required',
        'deskripsi' => 'required'
      ]);
      $isDataValid = $validasi->withRequest($this->request)->run();

      $imageFile = $this->request->getFile('gbr_buku');
      $imageFileName = $imageFile->getRandomName();
      $imageFile->move(ROOTPATH . 'public/images/', $imageFileName);
      
      if ($isDataValid) {
        $buku->insert([
          'genre_id' => (int) $this->request->getPost('nm_genre'),
          'judul_buku' => $this->request->getPost('jdl_buku'),
          'penulis' => $this->request->getPost('pengarang'),
          'kode_isbn' => (int) $this->request->getPost('isbn'),
          'deskripsi_buku' => $this->request->getPost('deskripsi'),
          'gambar' => "images/" . $imageFileName,
        ]);
      }
      
      return redirect()->back();
      
    }
}
