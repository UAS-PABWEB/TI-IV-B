<?php 
include 'koneksi.php';
$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_user = $_POST['nama_user'];
 
mysql_query("INSERT INTO user VALUES('$id_user','$username','$password','$nama_user')");
header("location:admin.php?pesan=input");
?>
