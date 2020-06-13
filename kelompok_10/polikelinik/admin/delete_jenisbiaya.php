<?php
include "koneksi.php";

$idjenisbiaya = $_GET['idjenisbiaya'];

$hasil = mysql_query("DELETE FROM jenisbiaya WHERE idjenisbiaya = '$idjenisbiaya'");

if ($hasil){
?><script>alert ("Data Berhasil Di Hapus !");
document.location.href="?page=data_jenisbiaya";</script><?php
}
else
{
echo "Gagal Karena : ".mysql_error();
}
?>