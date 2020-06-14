<?php
$server="";
$username="root";
$password="";
$database="polikelinik";
mysql_connect($server, $username, $password) or die ("koneksi database gagal");
mysql_select_db($database) or die ("buka database gagal");
?>