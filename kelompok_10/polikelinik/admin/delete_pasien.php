<?php
include "koneksi.php";

$nopasien = $_GET['nopasien'];

$hasil = mysql_query("DELETE FROM pasien WHERE nopasien = '$nopasien'");

if ($hasil){
?><script>alert ("Data Berhasil Di Hapus !");
document.location.href="?page=data_pasien";</script><?php
}
else
{
echo "Gagal Karena : ".mysql_error();
}
?>