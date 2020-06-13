<?php
include "koneksi.php";

$NIP = $_GET['NIP'];

$hasil = mysql_query("DELETE FROM pegawai WHERE NIP = '$NIP'");

if ($hasil){
?><script>alert ("Data Berhasil Di Hapus !");
document.location.href="?page=data_pegawai";</script><?php
}
else
{
echo "Gagal Karena : ".mysql_error();
}
?>