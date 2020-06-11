<?php
session_start();
mysql_connect("localhost","root","") or die("Tidak ada koneksi");
mysql_select_db("kelsembilan");

$username = $_POST['username'];
$password = $_POST['password'];
$op = $_GET['op'];

if($op=="in"){
$cek = mysql_query("SELECT * FROM petugas WHERE username='$username' AND password='$password'");
if(mysql_num_rows($cek)==1){
$c = mysql_fetch_array($cek);
$_SESSION['username'] = $c['username'];
$_SESSION['status'] = $c['status'];
if($c['status']=="Admin"){
header("location:admin/menuadmin.php");
}else if($c['status']=="User"){
header("location:user/menuuser.php");
}else if($c['status']=="atasan"){
header("location:admin/index2.php");
}
}else{
die("password salah <a href=\"javascript:history.back()\">kembali>");
}
}else if($op=="out"){
unset($_SESSION['username']);
unset($_SESSION['kelsembilan']);
header("location:admin/menuadmin.php");
}
?>