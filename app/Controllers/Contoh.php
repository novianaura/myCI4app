<?php

namespace App\Controllers;
use App\Controllers\BaseController;
class Contoh extends BaseController
    {
    public function index()
{
    $data['nama'] = "Novia Naura";
    $data['tlp'] = '085791273554';
    /*$data = [
        'nama' => 'Novia Naura',
        'tlp' => '085791273554'
    ];*/
    echo view ('belajar/index', $data);
}
    }

/*hidupkan 'php spark serve' di terminal untuk menampilkan
'php spark migrate' untuk mengubah struktur database*/ 