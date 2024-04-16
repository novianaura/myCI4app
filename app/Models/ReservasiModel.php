<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservasiModel extends Model
{
    protected $table ="reservasi";
    protected $primaryKey ="id";
    protected $returnType ="object";
    protected $useTimestamps =true;
    protected $allowedFields =['id', 'nama', 'no_telp', 'jumblah_orang', 'tgl_reservasi'];
}