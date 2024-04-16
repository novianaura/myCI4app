<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProductModel;
class Product extends BaseController
{
    public function index()
    {
        return view('belajar/product');
    }
    public function insertData()
    {
        
        $product = new ProductModel();
        $insert = $product->insert([
            'name'      => 'Redmi Note 9 Pro',
            'price'     => '3499000'
        ]);
        if($insert){
            echo "Data berhasil ditambahkan";
        } else {
            echo "<pre>";
            echo print_r($product->errors());
            echo "</pre>";
        }   
    }

    //method updateData
    public function updateData()
    {
        $product = new ProductModel();
        $id = 1;
        $update = $product->update($id, [
            'name' => 'Redmi Note 9',
            'price' => '4000000'
        ]);
        if($update){
            echo "Data berhasil diperbarui";
        } else {
            echo "<pre>";
            echo print_r($product->errors());
            echo "</pre>";
        }
    }
    public function saveUpdate()
{
    $product = new ProductModel();
    $data = [
        'kd_product'    =>1,
        'name'          => 'Xiaomi Mi Note 10 Pro',
        'price'         => '10999000'
    ];
    $product->save($data);
}
    public function saveInsert(){
    $product = new ProductModel();
    $data = [
        'name'      => 'Nokia',
        'price'     => '100000'
    ];
    $product->save($data);
    }
    public function saveUpdate2()
    {
        $product = new ProductModel();
        $dataProduct = $product->find(1);
        $dataProduct->price = '2050000';
        $product->save($dataProduct);
    }
    public function deleteData()
    {
        $product = new ProductModel();
        $product->delete(2);
    }


    public function getData()
    {
        $product = new ProductModel();
        $dataProduct = $product->find(2);
        echo "<pre>";
        echo print_r($dataProduct);
        echo "</pre>";
    }

    public function getData2()
    {
        $product = new ProductModel();
        $dataProduct = $product->findColumn('name');
        echo "<pre>";
        echo print_r($dataProduct);
        echo "</pre>";
    }

    public function getData3()
    {
        $product = new ProductModel();
        $dataProduct = $product->findAll();
        echo "<pre>";
        echo print_r($dataProduct);
        echo "</pre>";
    }

    public function getData4 ()
    {
        $product = new ProductModel();
        $dataProduct = $product -> where('name', 'Xiaomi mi note 10 pro')->findAll();
        echo "<pre>";
        echo print_r($dataProduct);
        echo "</pre>";
    }

    public function getData5()
    {
        $product = new ProductModel();
        $dataProduct = $product -> withDeleted()->findAll();
        echo "<pre>";
        echo print_r($dataProduct);
        echo "</pre>";
    }

    public function getData6()
    {
        $product = new ProductModel();
        $dataProduct = $product -> onlyDeleted()->findAll();
        echo "<pre>";
        echo print_r($dataProduct);
        echo "</pre>";
    }
    public function getData7()
    {
        $product = new ProductModel();
        $dataProduct = $product -> where('price','10999000')->first();
        echo "<pre>";
        echo print_r($dataProduct);
        echo "</pre>";
    }
}