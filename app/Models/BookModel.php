<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'books';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
    'genre_id',
    'judul_buku',
    'penulis',
    'kode_isbn',
    'deskripsi_buku',
    'gambar'];

    public function getGenre()
    {

      // SELECT * FROM books JOIN genres ON books.id = genres.id;

      return $this->db->table('books')->join('genres', 'books.id = genres.id')->get()->getResultArray();
    }
}
