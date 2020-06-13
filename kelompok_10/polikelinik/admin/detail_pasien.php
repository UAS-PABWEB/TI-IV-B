<?php
$nopasien=$_GET['nopasien'];
$qrytampilpasien=mysql_query("select * from pasien where nopasien='$nopasien'");
$tampilpasien=mysql_fetch_array($qrytampilpasien);
?>

<html>
<head>
<title> Detail Pasien </title>
</head>
<body>
<div style="width:500px; margin:auto;">
	<table width="100%" cellspacing="0" cellpadding="3">
		<tr>
			<td height="50" colspan="4" style="color:#009b4c; font-size:24px;" align="center"><font face="ninja naruto"><?php echo "DETAIL DATA PASIEN";?></font></td>
		</tr>
		<tr>
			<td width="300">NO PASIEN</td>
			<td width="10">:</td>
			<td width="406"><?php echo $tampilpasien['nopasien'];?></td>
			<td width="1" rowspan="17" valign="top" style="font-size:9px;" align="center">&nbsp;</td>
		</tr>
		<tr><td>NAMA PASIEN</td>
			<td>:</td>
			<td><?php echo $tampilpasien['namapas'];?></td>
		</tr>
		<tr>
			<td valign="top">ALAMAT PASIEN</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $tampilpasien['almpas'];?></td>
		</tr>
		<tr>
			<td>TELEPON PASIEN</td>
			<td>:</td>
			<td><?php echo $tampilpasien['telppas'];?></td>
		</tr>
		<tr>
			<td>TANGGAL LAHIR PASIEN</td>
			<td>:</td>
			<td><?php echo $tampilpasien['tgllahirpas'];?></td>
		</tr>
		<tr>
			<td>JENIS KELAMIN PASIEN</td>
			<td>:</td>
			<td><?php echo $tampilpasien['jeniskelpas'];?></td>
		</tr>
		<tr>
			<td>TANGGAL REGISTRASI</td>
			<td>:</td>
			<td><?php echo $tampilpasien['tglregistrasi'];?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3"><a href="?page=edit_pasien&nopasien=<?php echo $tampilpasien['nopasien'];?>" title="sunting">[SUNTING]</a>&nbsp;&nbsp;<a href="javascript:history.back()" title="data pas">[KEMBALI]</a>&nbsp;&nbsp;</td>
		</tr>
	</table>
</div>
</body>
</html>