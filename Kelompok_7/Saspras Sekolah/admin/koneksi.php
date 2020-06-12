<?php
  $server = "localhost";
  $user = "root";
  $pass = "";
  $namadb = "data_inventaris";
  $db = mysql_connect($server,$user,$pass) or DIE("koneksi gagal ");
  mysql_select_db($namadb) or DIE("nama database tidak tersedia !!");
?>