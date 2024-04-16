<?php
namespace App\Controllers;
use App\Controllers\BaseController;
class Helloworld extends BaseController
{
    public function index(){ /*method default(index) */
        echo 'Hello World';
    }
    public function biodata(){
        echo'Hello, saya novia';
    }
    public function asal(){
        echo'';
    }
}