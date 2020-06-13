<?php
include "koneksi.php";


$jumlah = count ($_POST ["check_list"]);
for($i=0; $i < $jumlah; $i++)
{
$kodedokter=$_POST["check_list"] [$i];
$myquery = "DELETE FROM dokter WHERE kodedokter = '$kodedokter' LIMIT 1";
$hapus = mysql_query($myquery);
?><script language="javascript">alert("Data yang ditandai berhasil dihapus !"); location.href="?page=data_dokter";</script><?php
}
?>