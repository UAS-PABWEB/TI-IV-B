<?php
$server="localhost";
$username="root";
$password="";
$database="kelsembilan";
mysql_connect ($server,$username,$password)or die ("koneksi database gagal");
mysql_select_db($database)or die ("buka database gagal !.");
?>