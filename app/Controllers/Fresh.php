<?php

namespace App\Controllers;
use App\Controllers\BaseController;
class Fresh extends BaseController
    {
    public function index()
{
    echo view('Fresh/index');
}
    }