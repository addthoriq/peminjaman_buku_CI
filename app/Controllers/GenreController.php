<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GenreModel;

class GenreController extends BaseController
{
    public function index()
    {
      
      
      echo view('admin/genre/beranda_genre');
    }

    public function store()
    {
      $genre = new GenreModel();
      $validasi = \Config\Services::validation();
      $validasi->setRules([
        'nm_genre' => 'required',
      ]);
      $isDataValid = $validasi->withRequest($this->request)->run();

      if ($isDataValid) {
        $genre->insert([
          'nama_genre' => $this->request->getPost('nm_genre')
        ]);
        return redirect('admin/genre');
      }

      echo view('admin/genre/tambah_genre');
    }
}
