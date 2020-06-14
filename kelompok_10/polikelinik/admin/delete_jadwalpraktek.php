<?php
include "koneksi.php";

$kodejadwal = $_GET['kodejadwal'];

$hasil = mysql_query("DELETE FROM jadwalpraktek WHERE kodejadwal = '$kodejadwal'");

if ($hasil){
?><script>alert ("Data Berhasil Di Hapus !");
document.location.href="?page=data_jadwalpraktek";</script><?php
}
else
{
echo "Gagal Karena : ".mysql_error();
}
?>