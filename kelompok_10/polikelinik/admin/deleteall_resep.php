<?php
include "koneksi.php";


$jumlah = count ($_POST ["check_list"]);
for($i=0; $i < $jumlah; $i++)
{
$noresep=$_POST["check_list"] [$i];
$myquery = "DELETE FROM resep WHERE noresep = '$noresep' LIMIT 1";
$hapus = mysql_query($myquery);
?><script language="javascript">alert("Data yang ditandai berhasil dihapus !"); location.href="?page=data_resep";</script><?php
}
?>