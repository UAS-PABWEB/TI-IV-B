<?php
  error_reporting(0);
  require "config/koneksi.php";
  require "config/lib.php";
$Token	= $_GET['Token'];
if(isset($Token)){
	// Skrip menghapus data dari tabel database
	 
	$myQry = $mysqli->query("DELETE FROM masuk_barang WHERE id_msk_brg ='$Token'");
	
	echo "<script>alert('Data berhasil Dihapus');location.href='?page=barang_masuk/data_barang_masuk'</script>";
	echo "<meta http-equiv='refresh' content='0;'>";
}
else {
	echo "Data yang dihapus tidak ada";
}
?>