<?php
$kodejadwal=$_GET['kodejadwal'];
$qrytampilobat=mysql_query("select * from jadwalpraktek where kodejadwal='$kodejadwal'");
$tampilobat=mysql_fetch_array($qrytampilobat);
?>

<html>
<head>
<title> Detail Jadwal Praktek </title>
</head>
<body>
<div style="width:500px; margin:auto;">
	<table width="100%" cellspacing="0" cellpadding="3">
		<tr>
			<td height="50" colspan="4" style="color:#009b4c; font-size:24px;" align="center"><font face="ninja naruto"><?php echo "DETAIL DATA JADWAL PRAKTEK";?></font></td>
		</tr>
		<tr>
			<td width="212">KODE JADWAL</td>
			<td width="5">:</td>
			<td width="406"><?php echo $tampilobat['kodejadwal'];?></td>
			<td width="1" rowspan="17" valign="top" style="font-size:9px;" align="center">&nbsp;</td>
		</tr>
		<tr>
			<td>HARI</td>
			<td>:</td>
			<td><?php echo $tampilobat['hari'];?></td>
		</tr>
		<tr>
			<td valign="top">JAM MULAI</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $tampilobat['jammulai'];?></td>
		</tr>
		<tr>
			<td>JAM SELESAI</td>
			<td>:</td>
			<td><?php echo $tampilobat['jamselesai'];?></td>
		</tr>
		<tr>
			<td>KODE DOKTER</td>
			<td>:</td>
			<td><?php echo $tampilobat['kodedokter'];?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3"><a href="?page=edit_jadwalpraktek&kodejadwal=<?php echo $tampilobat['kodejadwal'];?>" title="sunting">[SUNTING]</a>&nbsp;&nbsp;<a href="javascript:history.back()" title="data bat">[KEMBALI]</a>&nbsp;&nbsp;</td>
		</tr>
	</table>
</div>
</body>
</html>