<?php
$idrincianbiaya=$_GET['idrincianbiaya'];
$qrytampilrincianbiaya=mysql_query("select * from rincianbiaya where idrincianbiaya='$idrincianbiaya'");
$tampilrincianbiaya=mysql_fetch_array($qrytampilrincianbiaya);
?>

<html>
<head>
<title> Detail Rincianbiaya </title>
</head>
<body>
<div style="width:500px; margin:auto;">
	<table width="100%" cellspacing="0" cellpadding="3">
		<tr>
			<td height="50" colspan="4" style="color:#009b4c; font-size:24px;" align="center"><font face="ninja naruto"><?php echo "DETAIL DATA RINCIAN BIAYA";?></font></td>
		</tr>
				<tr>
			<td width="200">ID RINCIAN BIAYA</td>
			<td width="5">:</td>
			<td width="406"><?php echo $tampilrincianbiaya['idrincianbiaya'];?></td>
			<td width="1" rowspan="17" valign="top" style="font-size:9px;" align="center">&nbsp;</td>
		</tr>
		<tr>
			<td width="212">ID JENIS BIAYA</td>
			<td width="5">:</td>
			<td width="406"><?php echo $tampilrincianbiaya['idjenisbiaya'];?></td>
			<td width="1" rowspan="17" valign="top" style="font-size:9px;" align="center">&nbsp;</td>
		</tr>
		<tr>
			<td>NO PENDAFTARAN</td>
			<td>:</td>
			<td><?php echo $tampilrincianbiaya['nopendaftaran'];?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3"></a>&nbsp;&nbsp;<a href="javascript:history.back()" title="data rin">[KEMBALI]</a>&nbsp;&nbsp;</td>
		</tr>
	</table>
</div>
</body>
</html>