<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'tb_product';
    protected $primaryKey = 'kd_product';
    protected $returnType = 'object';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['name', 'price'];
    protected $useTimestamps = true;
    protected $createdFields = 'created_at';
    protected $updateFields = 'update_at';
    protected $deleteFields = 'delete_at';

    protected $validationRules =[
        'name'  => 'required|min_length[3]',
        'price' => 'required|numeric',
    ];
    protected $validationMessages = [
        'name'          => [
            'required'  => 'Bagian Name Harus Diisi',
            'min_length'=> 'Miniman 3 Karakter'
        ],
        'price'         => [
            'required'  => 'Bagian price harus diisi',
            'numeric'   => 'hanya bisa diisi dengan angka'
        ]
    ];

    protected $skipValidation = false;

    public function getData()
{
    return 'Ini adalah method getData di dalam ProductModel';
}
}