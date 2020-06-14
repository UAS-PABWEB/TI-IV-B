<?php
$nopendaftaran=$_GET['nopendaftaran'];
$qrytampilobat=mysql_query("select * from pendaftaran where nopendaftaran='$nopendaftaran'");
$tampilobat=mysql_fetch_array($qrytampilobat);
?>

<html>
<head>
<title> Detail Pendaftaran </title>
</head>
<body>
<div style="width:500px; margin:auto;">
	<table width="100%" cellspacing="0" cellpadding="3">
		<tr>
			<td height="50" colspan="4" style="color:#009b4c; font-size:24px;" align="center"><font face="ninja naruto"><?php echo "DETAIL DATA PENDAFTARAN";?></font></td>
		</tr>
		<tr>
			<td width="300">NO PENDAFTARAN</td>
			<td width="5">:</td>
			<td width="406"><?php echo $tampilobat['nopendaftaran'];?></td>
			<td width="1" rowspan="17" valign="top" style="font-size:9px;" align="center">&nbsp;</td>
		</tr>
				<tr>
			<td width="212">TANGGAL PENDAFTARAN</td>
			<td width="5">:</td>
			<td width="406"><?php echo $tampilobat['tglpendaftaran'];?></td>
			<td width="1" rowspan="17" valign="top" style="font-size:9px;" align="center">&nbsp;</td>
		</tr>
		<tr>
			<td>NO URUT</td>
			<td>:</td>
			<td><?php echo $tampilobat['nourut'];?></td>
		</tr>
		<tr>
			<td valign="top">NIP</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $tampilobat['NIP'];?></td>
		</tr>
		<tr>
			<td>NO PASIEN</td>
			<td>:</td>
			<td><?php echo $tampilobat['nopasien'];?></td>
		</tr>
		<tr>
			<td>KODE JADWAL</td>
			<td>:</td>
			<td><?php echo $tampilobat['kodejadwal'];?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3"><a href="?page=edit_pendaftaran&nopendaftaran=<?php echo $tampilobat['nopendaftaran'];?>" title="sunting">[SUNTING]</a>&nbsp;&nbsp;<a href="javascript:history.back()" title="data daf">[KEMBALI]</a>&nbsp;&nbsp;</td>
		</tr>
	</table>
</div>
</body>
</html>