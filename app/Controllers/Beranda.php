<?php

namespace App\Controllers;
use App\Controllers\BaseController;
class Beranda extends BaseController
    {
    public function index()
{
    echo view('resto/beranda');
}
    }