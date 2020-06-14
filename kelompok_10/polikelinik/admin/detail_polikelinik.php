<?php
$kodepoll=$_GET['kodepoll'];
$qrytampilpolikelinik=mysql_query("select * from polikelinik where kodepoll='$kodepoll'");
$tampilpolikelinik=mysql_fetch_array($qrytampilpolikelinik);
?>

<html>
<head>
<title> Detail Polikelinik </title>
</head>
<body>
<div style="width:500px; margin:auto;">
	<table width="100%" cellspacing="0" cellpadding="3">
		<tr>
			<td height="50" colspan="4" style="color:#009b4c; font-size:24px;" align="center"><font face="ninja naruto"><?php echo "DETAIL DATA POLIKELINIK";?></font></td>
		</tr>
		<tr>
			<td width="212">KODE POLIKELINIK</td>
			<td width="5">:</td>
			<td width="406"><?php echo $tampilpolikelinik['kodepoll'];?></td>
			<td width="1" rowspan="17" valign="top" style="font-size:9px;" align="center">&nbsp;</td>
		</tr>
		<tr>
			<td>NAMA POLIKELINIK</td>
			<td>:</td>
			<td><?php echo $tampilpolikelinik['namapoll'];?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3"><a href="?page=edit_polikelinik&kodepoll=<?php echo $tampilpolikelinik['kodepoll'];?>" title="sunting">[SUNTING]</a>&nbsp;&nbsp;<a href="javascript:history.back()" title="data nik">[KEMBALI]</a>&nbsp;&nbsp;</td>
		</tr>
	</table>
</div>
</body>
</html>