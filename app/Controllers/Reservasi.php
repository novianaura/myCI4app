<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ReservasiModel;
class Reservasi extends BaseController
    {
    public function index()
{
    $data['resto'] = $this->reservasi->findAll();
    return view('resto/index', $data);

}

public function create()
{
    return view('resto/reservasi');
}

public function store()
{
    if(!$this->validate([
        'nama'  => [
            'rules' => 'required',
            'errors' => [
                'required'  => '{field} harus diisi'
            ]
        ],
        'no_telp'   => [
            'rules' => 'required',
            'errors' => [
                'required'  => '{field} harus diisi'
            ]
        ],
        'jumblah_orang'   => [
            'rules' => 'required|valid_email',
            'errors' => [
                'required'  => '{field} harus diisi',
                'valid_email'   => 'Email harus valid'
            ]
        ],
        'tgl_reservasi'   => [
            'rules' => 'required',
            'errors' => [
                'required'  => '{field} harus diisi'
            ]
        ],
    ])){
        session()->getFlashdata('error', $this->validator->listErrors());
        return redirect()->back()->withInput();
    }
    $this->reservasi->insert([
        'nama'  => $this->request->getVar('nama'),
        'no_telp'  => $this->request->getVar('no_telp'),
        'jumblah_orang' => $this->request->getVar('jumblah_orang'),
        'tgl_reservasi' => $this->request->getVar('tgl_reservasi')
    ]);
    session()->setFlashdata('message', 'Tambah Data Pegawai Berhasil');
    return redirect()->to('/resto');
}



    }