<?php
include "koneksi.php";

$kodeobat = $_GET['kodeobat'];

$hasil = mysql_query("DELETE FROM obat WHERE kodeobat = '$kodeobat'");

if ($hasil){
?><script>alert ("Data Berhasil Di Hapus !");
document.location.href="?page=data_obat";</script><?php
}
else
{
echo "Gagal Karena : ".mysql_error();
}
?>