<?php
include "koneksi.php";

$nopendaftaran = $_GET['nopendaftaran'];

$hasil = mysql_query("DELETE FROM pendaftaran WHERE nopendaftaran = '$nopendaftaran'");

if ($hasil){
?><script>alert ("Data Berhasil Di Hapus !");
document.location.href="?page=data_pendaftaran";</script><?php
}
else
{
echo "Gagal Karena : ".mysql_error();
}
?>