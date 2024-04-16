<?php
require_once 'controller.php';

// Gantilah informasi koneksi sesuai kebutuhan
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restoran";

// Inisialisasi objek controller
$restaurantController = new RestaurantController($servername, $username, $password, $dbname);

// Tangkap data dari form
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$jumblah_orang = $_POST['jumblah_orang'];
$tanggal = $_POST['tanggal'];

// Memanggil metode tambahReservasi dari controller
$result = $restaurantController->tambahReservasi($nama, $tanggal, $jumlah_orang, $telepon);

// Menampilkan pesan hasil
echo $result;

?>
