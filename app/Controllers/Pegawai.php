<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\PegawaiModel;
class Pegawai extends BaseController
{
    protected $pegawai;
    function __construct()
    {
        $this->pegawai=new PegawaiModel();
    }
    public function index()
    {
        $data['pegawai'] = $this->pegawai->findAll();
        return view('pegawai/index', $data);
    }
    public function create()
    {
        return view('pegawai/create');
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
            'jenis_kelamin' => [
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
            'email'   => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required'  => '{field} harus diisi',
                    'valid_email'   => 'Email harus valid'
                ]
            ],
            'alamat'   => [
                'rules' => 'required',
                'errors' => [
                    'required'  => '{field} harus diisi'
                ]
            ],
        ])){
            session()->getFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $this->pegawai->insert([
            'nama'  => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'no_telp'  => $this->request->getVar('no_telp'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat')
        ]);
        session()->setFlashdata('message', 'Tambah Data Pegawai Berhasil');
        return redirect()->to('/pegawai');
    }

    function edit($id)
    {
        $dataPegawai = $this->pegawai->find($id);
        if(empty($dataPegawai)){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Pegawai Tidak Ditemukan');
        }
        $data['pegawai'] = $dataPegawai;
        return view('pegawai/edit', $data);
    }
    function update($id)
    {
        if(!$this->validate([
            'nama'  => [
                'rules' => 'required',
                'errors' => [
                    'required'  => '{field} harus diisi'
                ]
            ],
            'jenis_kelamin' => [
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
            'email'   => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required'  => '{field} harus diisi',
                    'valid_email'   => 'Email harus valid'
                ]
            ],
            'alamat'   => [
                'rules' => 'required',
                'errors' => [
                    'required'  => '{field} harus diisi'
                ]
            ],
        ])){
            session()->getFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }
        $this->pegawai->update($id, [
            'nama'  => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'no_telp'  => $this->request->getVar('no_telp'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat')
        ]); 
        session()->setFlashdata('message', 'Update Data Pegawai Berhasil');
        return redirect()->to('/pegawai');
    }
    function delete($id)
    {
        $dataPegawai = $this->pegawai->find($id);
        if (empty($dataPegawai)) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Pegawai Tidak Ditemukan.');
        }
        $this->pegawai->delete($id);
        session()->setFlashdata('message', 'Delete Data Pegawai Berhasil');
        return redirect()->to('/pegawai');
    }
}