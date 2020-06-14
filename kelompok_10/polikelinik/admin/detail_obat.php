<?php
$kodeobat=$_GET['kodeobat'];
$qrytampilobat=mysql_query("select * from obat where kodeobat='$kodeobat'");
$tampilobat=mysql_fetch_array($qrytampilobat);
?>

<html>
<head>
<title> Detail Obat </title>
</head>
<body>
<div style="width:500px; margin:auto;">
	<table width="100%" cellspacing="0" cellpadding="3">
		<tr>
			<td height="50" colspan="4" style="color:#009b4c; font-size:24px;" align="center"><font face="ninja naruto"><?php echo "DETAIL DATA OBAT";?></font></td>
		</tr>
		<tr>
			<td width="200">KODE OBAT</td>
			<td width="5">:</td>
			<td width="406"><?php echo $tampilobat['kodeobat'];?></td>
			<td width="1" rowspan="17" valign="top" style="font-size:9px;" align="center">&nbsp;</td>
		</tr>
		<tr>
			<td>NAMA OBAT</td>
			<td>:</td>
			<td><?php echo $tampilobat['nmobat'];?></td>
		</tr>
		<tr>
			<td valign="top">MERK</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $tampilobat['merk'];?></td>
		</tr>
		<tr>
			<td>SATUAN</td>
			<td>:</td>
			<td><?php echo $tampilobat['satuan'];?></td>
		</tr>
		<tr>
			<td>HARGA JUAL</td>
			<td>:</td>
			<td><?php echo $tampilobat['hargajual'];?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3"><a href="?page=edit_obat&kodeobat=<?php echo $tampilobat['kodeobat'];?>" title="sunting">[SUNTING]</a>&nbsp;&nbsp;<a href="javascript:history.back()" title="data bat">[KEMBALI]</a>&nbsp;&nbsp;</td>
		</tr>
	</table>
</div>
</body>
</html>