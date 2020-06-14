<?php
include "koneksi.php";

$kodedokter = $_GET['kodedokter'];

$hasil = mysql_query("DELETE FROM dokter WHERE kodedokter = '$kodedokter'");

if ($hasil){
?><script>alert ("Data Berhasil Di Hapus !");
document.location.href="?page=data_dokter";</script><?php
}
else
{
echo "Gagal Karena : ".mysql_error();
}
?>