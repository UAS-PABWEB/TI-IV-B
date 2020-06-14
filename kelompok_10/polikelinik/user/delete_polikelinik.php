<?php
include "koneksi.php";

$kodepoll = $_GET['kodepoll'];

$hasil = mysql_query("DELETE FROM polikelinik WHERE kodepoll = '$kodepoll'");

if ($hasil){
?><script>alert ("Data Berhasil Di Hapus !");
document.location.href="?page=data_polikelinik";</script><?php
}
else
{
echo "Gagal Karena : ".mysql_error();
}
?>