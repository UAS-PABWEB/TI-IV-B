<?php
session_start();
error_reporting(0);
include("cek_login.php");
include("config/koneksi.php");
$username=$_SESSION[username];
$admin_id=$_SESSION[admin_id];
$qryadmin=mysql_query("SELECT * FROM admin where username='$username'");
$tampiladmin=mysql_fetch_array($qryadmin);
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Menu Utama</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  <style type="text/css">
<!--
.style8 {
	color: white;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: medium;
}
.style15 {color: white}
body,td,th {
	font-size: 0.8em;
	color: #336699;
}
body {
	background-color: black;
}
.style18 {font-family: Georgia, "Times New Roman", Times, serif}
.style19 {color: white; font-weight: bold;}
.style20 {color: #66CCCC}
.style21 {
	font-size: medium;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
	color: #FFFF00;
}
.style22 {color: white}
.style23 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; font-size: medium;}
.style24 {color: #00CCCC}
-->
  </style>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div class="style18" id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1 class="style19"><span class="style19"><span class="style15"><a href="index.php">MENU UTAMA</a></span></span></h1>
          <h2 class="style15">Data Inventaris</h2>
        </div>
    </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="index.php">Home</a></li>
          <li><a href="#">Master Data</a>
            <ul>
              <li><a href="?page=data_supplier">Data Supplier</a></li>
              <li><a href="?page=data_barang">Data Barang</a></li>
              <li><a href="?page=data_stok">Stok</a></li>
              <li><a href="?page=data_barang_keluar">Data Barang yang Keluar</a></li>
              <li><a href="?page=data_barang_masuk">Data Barang yang Masuk</a></li>
	      <li><a href="?page=data_barang_pinjam">Data Barang yang di Pinjam</a></li>  
            </ul>
	  </li>
	  <li><a href="?page=foto kegiatan">Foto Kegiatan</a>
	  </li>
          <li><a href="?page=profil">Tentang</a>
	  </li>
          <li><a href="?page=logout">Logout</a>
          </li>
        </ul>
      </nav>
    </header>
       <div id="content">
        <h1 align="center" class="style8">SARANA DAN PRASARANA SEKOLAH</h1>
</div>
<div class="style22">
<div>
	<p> VISI DAN MISI SEKOLAH </p>
	<p> VISI</p>
	<p> 1. </p>
	<p> 2. </p>
	<p> 3. </p>
	
	<p> MISI. </p>
	<p> 1. </p>
	<p> 2. </p>
	<p> 3. </p>
         
</div>

<div>
      <?php require "switch.php";
    ?>
</div></br>
<footer style="margin-bottom: 0px; margin-top: 500px; ">
  <p><span class="style24">Copyright by @NurulWulan @IhsanSeptian @IbnuAmar</span></p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
