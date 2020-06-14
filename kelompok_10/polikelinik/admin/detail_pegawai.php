<?php
error_reporting (0);
$NIP=$_GET['NIP'];
$qrypegawai=mysql_query("select * from pegawai where NIP='$NIP'");
$tampilpegawai=mysql_fetch_array($qrypegawai);
?>
<html>
<body>
<div style="width:500px; margin:auto;">
	<table width="100%" cellspacing="0" cellpadding="3">
		<tr>
			<td height="50" colspan="4" style="color:#009b4c; font-size:24px;" align="center"><font face="ninja naruto"><?php echo "DETAIL DATA PEGAWAI";?></font></td>
		</tr>
		<tr>
      <td width="200">NIP</td>
      <td width="3">:</td>
      <td width="243"><?php echo $tampilpegawai['NIP'];?></td>
       
      <div align="center"></div></td>
    </tr>
		<tr>
			<td>NAMA PEGAWAI</td>
			<td>:</td>
			<td><?php echo $tampilpegawai['namapeg'];?></td>
			</tr>
			<tr>
			<tr>
				<td>ALAMAT PEGAWAI</td>
				<td>:</td>
				<td><?php echo $tampilpegawai['almpeg'];?></td>
			</tr>
			
			</tr>
			<tr>
				<td valign="top">TELEPON PEGAWAI</td>
				<td valign="top">:</td>
				<td valign="top"><?php echo $tampilpegawai['telppeg'];?></td>
				</tr>
			<tr>
				<td valign="top">TANGGAL LAHIR PEGAWAI</td>
				<td valign="top">:</td>
				<td valign="top"><?php echo $tampilpegawai['tgllhrpeg'];?></td>
				</tr>
			<tr>
					<td>JENIS KELAMIN PEGAWAI</td>
					<td>:</td>
					<td><?php echo $tampilpegawai['jnskelpeg'];?></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
		<td colspan="3"><a href="?page=edit_pegawai&NIP=<?php echo $tampilpegawai['NIP'];?>" title="sunting">[SUNTING]</a>&nbsp;&nbsp;<a href="javascript:history.back()" title="datapegawai">[KEMBALI]</a>&nbsp;&nbsp;</td>
		</tr>
	</table>
</div>
</body>
</html>