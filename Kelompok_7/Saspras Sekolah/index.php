<?php
session_start(); //memulai membuat aplikasi 
error_reporting (E_ALL ^ E_NOTICE); // menangani pesan error
if (!empty($_SESSION['username'])) { // untuk mengecek data apakah kosong atau data tidak diisi =>$_SESSION adalah data yang disimpan di server atau suatu cara agar variabel dapat di akses di halaman web 
header ('location:admin/index.php'); //untuk menyatakan alamat 
}
if (!empty($_SESSION['username'])) {
header('location:admin/index.php');
}
?>
<h1><?php include("login.php");// untuk memudahkan pekerjaan agar tidak membuat script yang sama , menyertakan sebuah file supaya tidak di tulis berulang-ulang 
 ?></h1> 