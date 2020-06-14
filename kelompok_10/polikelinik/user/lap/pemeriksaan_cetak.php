<?php
include_once "inc.library.php";
include_once "../koneksi.php";
if ($_GET) {
	// Baca variabel URL
	$nopasien= isset ($_GET['nopasien']) ? $_GET['nopasien']: '';
	
	// Perintah membaca data pasien
	$mySql = "SELECT * FROM laporan_pemeriksaan_pasien WHERE nopasien='$nopasien'";
	$myQry = mysql_query($mySql) or die ("Query salah : ".mysql_error());
	$myData = mysql_fetch_array($myQry);
}
else {
	echo "Nomor pasien Tidak Terbaca";
	exit;
}
?>
<html>
<head>
<title> Cetak Data Pemeriksaan Pasien </title>

</head>
<body>
<script type="text/javascript">
window.print();
window.onfocus=function () { window.close();}
</script>

<div align="center">
<table width="541" cellpadding="4" cellspacing="2" background="../img/Untitled-1.png">
<tr>
<td colspan="3" background="../img/1psb.png"><p>&nbsp;</p>
<p><br>
<br>
</p></td>
</tr>
<tr>
<td background="../img/1 - Copy - Copy.png"><strong>Nomor Pasien</strong></td>
</td>
<td width="2%" background="../img/1 - Copy - Copy.png"><strong>:</strong></td>
<td width="80%" background="../img/1 - Copy - Copy.png"><?php echo $myData['nopasien'];?>
</td>
</tr>
<tr>
<td background="../img/1 - Copy - Copy.png"><strong>Nama Pasien</strong></td>
<td background="../img/1 - Copy - Copy.png"><strong>:</strong></td>
<td background="../img/1 - Copy - Copy.png"><?php echo $myData['namapas'];?></td>
</tr>
<tr>
<td background="../img/1 - Copy - Copy.png"><strong>Diagnosa</strong></td>
<td background="../img/1 - Copy - Copy.png"><strong>:</strong></td>
<td background="../img/1 - Copy - Copy.png"><?php echo $myData['diagnosa'];?></td>
</tr>

</table>
</div>
</form>








