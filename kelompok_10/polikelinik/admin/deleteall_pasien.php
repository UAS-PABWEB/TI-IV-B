<?php
include "koneksi.php";


$jumlah = count ($_POST ["check_list"]);
for($i=0; $i < $jumlah; $i++)
{
$nopasien=$_POST["check_list"] [$i];
$myquery = "DELETE FROM pasien WHERE nopasien = '$nopasien' LIMIT 1";
$hapus = mysql_query($myquery);
?><script language="javascript">alert("Data yang ditandai berhasil dihapus !"); location.href="?page=data_pasien";</script><?php
}
?>