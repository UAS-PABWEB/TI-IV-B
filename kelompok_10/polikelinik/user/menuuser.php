<?php
session_start();
error_reporting(0);
include("cek_login.php");
include("koneksi.php");
$username=$_SESSION[username];
$NIP=$_SESSION[NIP];
$qryadmin=mysql_query("select * from login where username='$username'");
$tampiladmin=mysql_fetch_array($sqladmin);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Aplikasi Yadi</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/1.css" type="text/css" media="screen,projection" />
</head>
<body>
<div id="sidebar">
  <h1><a href="#"><br>Aplikasi Polikelinik<br><center>Anda User</center></a></h1>
  <p><marquee><b>"Jagalah Kesehatan Demi Masa Depan Anda"</b></marquee></p>
  <ol id="nav">
    <li><a href="?page=switchname"><img src="images2/beranda.png" width="30" height="30"></td><b>»</b>Beranda</a></li>
    <li><a href="?page=data_pendaftaran"><img src="images2/pendaftaran.png" width="30" height="30"><b>»</b>Pendaftaran</a></li>
    <li><a href="?page=data_dokter"><img src="images2/dokter.png" width="30" height="30"><b>»</b>Dokter</a></li>
	<li><a href="?page=data_pegawai"><img src="images2/pegawai2.png" width="30" height="30"><b>»</b>Pegawai</a></li>
	<li><a href="?page=data_pasien"><img src="images2/pasien.png" width="30" height="30"><b>»</b>Pasien</a></li>
	<li><a href="?page=data_obat"><img src="images2/obat.png" width="30" height="30"><b>»</b>Obat</a></li>
	<li><a href="?page=data_polikelinik"><img src="images2/house_2.png" width="30" height="30"><b>»</b>Polikelinik</a></li>
    <li><a href="?page=data_jadwalpraktek"><img src="images2/jadwalpraktek.png" width="30" height="30"><b>»</b>Jadwal Praktek</a></li>
    <li><a href="?page=data_jenisbiaya"><img src="images2/biaya.png" width="30" height="30"><b>»</b>Jenis Biaya</a></li>
    <li><a href="?page=data_pemeriksaan"><img src="images2/pemeriksaan.png" width="30" height="30"><b>»</b>Pemeriksaan</a></li>
	<li><a href="?page=data_resep"><img src="images2/resep2.png" width="30" height="30"><b>»</b>Resep</a></li>
	<li><a href="?page=data_rincianbiaya"><img src="images2/rincianbiaya2.png" width="30" height="30"><b>»</b>Rincian Biaya</a></li>
	<li><a href="?page=lap1"><img src="images2/laporan.png" width="30" height="30"><b>»</b>Laporan</a></li>		
    <li><a href="?page=../logout"><img src="images2/Log Out.png" width="30" height="30"><b>»</b>Logout</a></li>
  </ol>
</div>
<div id="content">
	<?php include("switch.php"); ?> 
   <div id="footer"><br/>© Aplikasi Polikelinik Yadi </div>
</body>
</html>
