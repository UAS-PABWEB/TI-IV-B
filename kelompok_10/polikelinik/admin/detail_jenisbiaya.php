<?php
$idjenisbiaya=$_GET['idjenisbiaya'];
$qrytampilobat=mysql_query("select * from jenisbiaya where idjenisbiaya='$idjenisbiaya'");
$tampilobat=mysql_fetch_array($qrytampilobat);
?>

<html>
<head>
<title> Detail Jenis Biaya </title>
</head>
<body>
<div style="width:500px; margin:auto;">
	<table width="100%" cellspacing="0" cellpadding="3">
		<tr>
			<td height="50" colspan="4" style="color:#009b4c; font-size:24px;" align="center"><font face="ninja naruto"><?php echo "DETAIL DATA JENIS BIAYA";?></font></td>
		</tr>
		<tr>
			<td width="212">ID JENIS BIAYA</td>
			<td width="5">:</td>
			<td width="406"><?php echo $tampilobat['idjenisbiaya'];?></td>
			<td width="1" rowspan="17" valign="top" style="font-size:9px;" align="center">&nbsp;</td>
		</tr>
		<tr>
			<td>NAMA BIAYA</td>
			<td>:</td>
			<td><?php echo $tampilobat['namabiaya'];?></td>
		</tr>
		<tr>
			<td valign="top">TARIF</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $tampilobat['tarif'];?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3"><a href="?page=edit_jenisbiaya&idjenisbiaya=<?php echo $tampilobat['idjenisbiaya'];?>" title="sunting">[SUNTING]</a>&nbsp;&nbsp;<a href="javascript:history.back()" title="data jen">[KEMBALI]</a>&nbsp;&nbsp;</td>
		</tr>
	</table>
</div>
</body>
</html>