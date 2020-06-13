<?php
// lanjutkan session yang sudah di buat sebelumnya
session_start();
//hapus session yang telah di buat
session_destroy();
?>
<script language="javascript">alert("berhasil logout!");location.href="../index.php";</script>