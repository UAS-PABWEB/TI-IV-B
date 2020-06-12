<?php
include "koneksi.php";


$jumlah = count($_POST["check_list"]);
for($i=0; $i < $jumlah; $i++) 
{
    $kode_barang=$_POST["check_list"][$i];
	$myquery = "DELETE FROM barang WHERE kode_barang = '$kode_barang'  LIMIT 1";
	$hapus = mysql_query($myquery);
	?><script language="javascript">alert ("Data yang ditandai Berhasil dihapus !"); location.href="javascript:history.back();";</script><?php
}
 ?>