<?php
include "koneksi.php";


$jumlah = count ($_POST ["check_list"]);
for($i=0; $i < $jumlah; $i++)
{
$nopemeriksaan=$_POST["check_list"] [$i];
$myquery = "DELETE FROM pemeriksaan WHERE nopemeriksaan = '$nopemeriksaan' LIMIT 1";
$hapus = mysql_query($myquery);
?><script language="javascript">alert("Data yang ditandai berhasil dihapus !"); location.href="?page=data_pemeriksaan";</script><?php
}
?>