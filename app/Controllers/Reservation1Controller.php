<?php

namespace App\Controllers;
use App\Models\Reservation1Model;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Reservation1Controller extends BaseController
{
    public function index()
    {
        //
        $data['resto'] = $this->reservation1s->findAll();
        return view('resto/index', $data);
    
    }
}
