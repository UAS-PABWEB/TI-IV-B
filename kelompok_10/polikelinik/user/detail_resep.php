<?php
$noresep=$_GET['noresep'];
$qrytampilresep=mysql_query("select * from resep where noresep='$noresep'");
$tampilresep=mysql_fetch_array($qrytampilresep);
?>

<html>
<head>
<title> Detail Resep </title>
</head>
<body>
<div style="width:500px; margin:auto;">
	<table width="100%" cellspacing="0" cellpadding="3">
		<tr>
			<td height="50" colspan="4" style="color:#009b4c; font-size:24px;" align="center"><font face="ninja naruto"><?php echo "DETAIL DATA RESEP";?></font></td>
		</tr>
		<tr>
			<td width="200">NO RESEP</td>
			<td width="5">:</td>
			<td width="406"><?php echo $tampilresep['noresep'];?></td>
			<td width="1" rowspan="17" valign="top" style="font-size:9px;" align="center">&nbsp;</td>
		</tr>
		<tr>
			<td>DOSIS</td>
			<td>:</td>
			<td><?php echo $tampilresep['dosis'];?></td>
		</tr>
		<tr>
			<td valign="top">jumlah</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $tampilresep['jumlah'];?></td>
		</tr>
		<tr>
			<td>KODE OBAT</td>
			<td>:</td>
			<td><?php echo $tampilresep['kodeobat'];?></td>
		</tr>
		<tr>
			<td>NO PEMEERIKSAAN</td>
			<td>:</td>
			<td><?php echo $tampilresep['nopemeriksaan'];?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3"><a href="javascript:history.back()" title="data res">[KEMBALI]</a>&nbsp;&nbsp;</td>
		</tr>
	</table>
</div>
</body>
</html>