<?php
include "koneksi.php";

$id	= $_GET['id'];


$query = mysql_query("delete from user where id_user='$id'");
if ($query) {
echo "<script>alert('data berhasil dihapus');
document.location.href='admin.php'</script>\n";
} else {
echo "<script>alert('data gagal dihapus');
document.location.href='admin.php'</script>\n";
}
?>