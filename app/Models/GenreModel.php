<?php

namespace App\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'genres';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
}
