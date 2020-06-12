<?php
include "koneksi.php";


$jumlah = count($_POST["check_list"]);
for($i=0; $i < $jumlah; $i++) 
{
    $id_msk_brg=$_POST["check_list"][$i];
	$myquery = "DELETE FROM masuk_barang WHERE id_msk_brg = '$id_msk_brg'  LIMIT 1";
	$hapus = mysql_query($myquery);
	?><script language="javascript">alert ("Data yang ditandai Berhasil dihapus !"); location.href="javascript:history.back();";</script><?php
}
 ?>