<?php
include "koneksi.php";


$jumlah = count($_POST["check_list"]);
for($i=0; $i < $jumlah; $i++) 
{
    $no_pinjam=$_POST["check_list"][$i];
	$myquery = "DELETE FROM pinjam_barang WHERE no_pinjam = '$no_pinjam'  LIMIT 1";
	$hapus = mysql_query($myquery);
	?><script language="javascript">alert ("Data yang ditandai Berhasil dihapus !"); location.href="javascript:history.back();";</script><?php
}
 ?>