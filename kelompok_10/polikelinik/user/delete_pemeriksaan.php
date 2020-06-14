<?php
include "koneksi.php";

$nopemeriksaan = $_GET['nopemeriksaan'];

$hasil = mysql_query("DELETE FROM pemeriksaan WHERE nopemeriksaan = '$nopemeriksaan'");

if ($hasil){
?><script>alert ("Data Berhasil Di Hapus !");
document.location.href="?page=data_pemeriksaan";</script><?php
}
else
{
echo "Gagal Karena : ".mysql_error();
}
?>