<?php
include "koneksi.php";


$jumlah = count ($_POST ["check_list"]);
for($i=0; $i < $jumlah; $i++)
{
$kodejadwal=$_POST["check_list"] [$i];
$myquery = "DELETE FROM jadwalpraktek WHERE kodejadwal = '$kodejadwal' LIMIT 1";
$hapus = mysql_query($myquery);
?><script language="javascript">alert("Data yang ditandai berhasil dihapus !"); location.href="?page=data_jadwalpraktek";</script><?php
}
?>