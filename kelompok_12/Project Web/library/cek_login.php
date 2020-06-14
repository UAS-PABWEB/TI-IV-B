<?php
include 'koneksi.php';
if (isset($_POST['login'])) {
	
$username = $_POST['username'];
$password = $_POST['password'];
 
$query = mysql_query("select * from user where username='$username' and password='$password'");
$cek = mysql_num_rows($query);

if($cek > 0){
	header("location:home_admin.php");
}
}
else if(isset($_POST['pengguna'])) {
	header("location:home_pengguna.php");
}
?>