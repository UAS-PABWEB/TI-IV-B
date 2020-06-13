<?php
$server="";
$username="root";
$password="";
//untuk koneksi ke database
$database="polikelinik";
//untuk mengkoneksikan ke database
mysql_connect($server, $username, $password) or die ("koneksi database gagal");
mysql_select_db($database) or die ("buka database gagal");
?>