<?php
include "koneksi.php";

$id	= $_GET['id'];


$query = mysql_query("delete from buku where kd_buku='$id'");
if ($query) {
echo "<script>alert('data berhasil dihapus');
document.location.href='buku.php'</script>\n";
} else {
echo "<script>alert('data gagal dihapus');
document.location.href='buku.php'</script>\n";
}
?>