<?php
$nopemeriksaan=$_GET['nopemeriksaan'];
$qrytampilobat=mysql_query("select * from pemeriksaan where nopemeriksaan='$nopemeriksaan'");
$tampilobat=mysql_fetch_array($qrytampilobat);
?>

<html>
<head>
<title> Detail Pemeriksaan </title>
</head>
<body>
<div style="width:500px; margin:auto;">
	<table width="100%" cellspacing="0" cellpadding="3">
		<tr>
			<td height="50" colspan="4" style="color:#009b4c; font-size:24px;" align="center"><font face="ninja naruto"><?php echo "DETAIL DATA PEMERIKSAAN";?></font></td>
		</tr>
		<tr>
			<td width="212">NO PEMERIKSAAN</td>
			<td width="5">:</td>
			<td width="406"><?php echo $tampilobat['nopemeriksaan'];?></td>
			<td width="1" rowspan="17" valign="top" style="font-size:9px;" align="center">&nbsp;</td>
		</tr>
		<tr>
			<td>KELUHAN</td>
			<td>:</td>
			<td><?php echo $tampilobat['keluhan'];?></td>
		</tr>
		<tr>
			<td valign="top">DIAGNOSA</td>
			<td valign="top">:</td>
			<td valign="top"><?php echo $tampilobat['diagnosa'];?></td>
		</tr>
		<tr>
			<td>PERAWATAN</td>
			<td>:</td>
			<td><?php echo $tampilobat['perawatan'];?></td>
		</tr>
		<tr>
			<td>TINDAKAN</td>
			<td>:</td>
			<td><?php echo $tampilobat['tindakan'];?></td>
	    </tr>
		<tr>
			<td>BERAT BADAN</td>
			<td>:</td>
			<td><?php echo $tampilobat['beratbadan'];?></td>
	    </tr>
		<tr>
			<td>TENSIDIASTOLIK</td>
			<td>:</td>
			<td><?php echo $tampilobat['tensidiastolik'];?></td>
	    </tr>
		<tr>
			<td>TENSISISTOLIK</td>
			<td>:</td>
			<td><?php echo $tampilobat['tensisistolik'];?></td>
	    </tr>
		<tr>
			<td>NO PENDAFTARAN</td>
			<td>:</td>
			<td><?php echo $tampilobat['nopendaftaran'];?></td>
	    </tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3"><a href="?page=edit_pemeriksaan&nopemeriksaan=<?php echo $tampilobat['nopemeriksaan'];?>" title="sunting">[SUNTING]</a>&nbsp;&nbsp;<a href="javascript:history.back()" title="data pem">[KEMBALI]</a>&nbsp;&nbsp;</td>
		</tr>
	</table>
</div>
</body>
</html>