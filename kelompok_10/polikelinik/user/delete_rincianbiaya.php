<?php
include "koneksi.php";

$idrincianbiaya = $_GET['idrincianbiaya'];

$hasil = mysql_query("DELETE FROM rincianbiaya WHERE idrincianbiaya = '$idrincianbiaya'");

if ($hasil){
?><script>alert ("Data Berhasil Di Hapus !");
document.location.href="?page=data_rincianbiaya";</script><?php
}
else
{
echo "Gagal Karena : ".mysql_error();
}
?>