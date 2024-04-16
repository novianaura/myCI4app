<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time; //untuk mengambil waktu

class PegawaiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'              => 'Anton',
                'jenis_kelamin'     => 'pria',
                'no_telp'           => '081234555678',
                'email'             => 'anton@gmail.com',
                'alamat'            => 'JL. Mawar',
                'created_at'        => Time::now()
            ],
            [
                'nama'              => 'Handiva',
                'jenis_kelamin'     => 'pria',
                'no_telp'           => '0895412310212',
                'email'             => 'handivadwia@gmail.com',
                'alamat'            => 'JL. Waringin',
                'created_at'        => Time::now()
            ],
            [
                'nama'              => 'Siti',
                'jenis_kelamin'     => 'wanita',
                'no_telp'           => '081456783564',
                'email'             => 'sitirajin@gmail.com',
                'alamat'            => 'JL. Selorejo',
                'created_at'        => Time::now()
            ]
        ];
        $this->db->table('pegawai')->insertBatch($data);
    }
}