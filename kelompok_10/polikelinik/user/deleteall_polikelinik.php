<?php
include "koneksi.php";


$jumlah = count ($_POST ["check_list"]);
for($i=0; $i < $jumlah; $i++)
{
$kodepoll=$_POST["check_list"] [$i];
$myquery = "DELETE FROM polikelinik WHERE kodepoll = '$kodepoll' LIMIT 1";
$hapus = mysql_query($myquery);
?><script language="javascript">alert("Data yang ditandai berhasil dihapus !"); location.href="?page=data_polikelinik";</script><?php
}
?>