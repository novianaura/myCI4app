<?php

namespace App\Controllers;
use App\Controllers\BaseController;
class Galeri extends BaseController
    {
    public function index()
{
    echo view('resto/galeri');
}
    }