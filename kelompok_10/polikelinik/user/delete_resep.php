<?php
include "koneksi.php";

$noresep = $_GET['noresep'];

$hasil = mysql_query("DELETE FROM resep WHERE noresep = '$noresep'");

if ($hasil){
?><script>alert ("Data Berhasil Di Hapus !");
document.location.href="?page=data_resep";</script><?php
}
else
{
echo "Gagal Karena : ".mysql_error();
}
?>