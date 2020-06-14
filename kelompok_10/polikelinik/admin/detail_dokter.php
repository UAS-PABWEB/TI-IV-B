<?php
$kodedokter=$_GET['kodedokter'];
$qrytampildokter=mysql_query("select * from dokter where kodedokter='$kodedokter'");
$tampildokter=mysql_fetch_array($qrytampildokter);
?>
<html>
<head>
<title> Detail Dokter </title>
</head>
<body>
<div style="width:500px; margin:auto;">
	<table width="100%" cellspacing="0" cellpadding="3">
		<tr>
			<td height="50" colspan="4" style="color:#009b4c; font-size:24px;" align="center"><font face="ninja naruto"><?php echo "DETAIL DATA DOKTER";?></font></td>
		</tr>
		<tr>
			<td width="212">KODE DOKTER</td>
			<td width="5">:</td>
			<td width="406"><?php echo $tampildokter['kodedokter'];?></td>
			<td width="1" rowspan="17" valign="top" style="font-size:9px;" align="center">&nbsp;</td>
		</tr>
		<tr>
			<td>NAMA DOKTER</td>
			<td>:</td>
			<td><?php echo $tampildokter['nmdokter'];?></td>
		</tr>
		<tr>
			<td valign="top">ALAMAT DOKTER</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $tampildokter['almdokter'];?></td>
		</tr>
		<tr>
			<td>TELEPON DOKTER</td>
			<td>:</td>
			<td><?php echo $tampildokter['tlpdokter'];?></td>
		</tr>
		<tr>
			<td>KODE POLIKELINIK</td>
			<td>:</td>
			<td><?php echo $tampildokter['kodepoll'];?></td>
		</tr>
		     
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3"><a href="?page=edit_dokter&kodedokter=<?php echo $tampildokter['kodedokter'];?>" title="sunting">[SUNTING]</a>&nbsp;&nbsp;<a href="javascript:history.back()" title="data dok">[KEMBALI]</a>&nbsp;&nbsp;</td>
		</tr>
	</table>
</div>
</body>
</html>