<?php include "../koneksi.php"; ?>
<script type="text/javascript">
	window.print();
	window.onfocus=function() { window.close();}
</script>

<style type="text/css">
.main {
	margin-top: 5px;
	margin-left: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
</style>
<div class="main">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
	<th align="center" scope="col"><font face="Tahoma, Geneva, sans-serif"
	color="#0000FF" size="3">POLIKLINIK YADI<BR>
	LAPORAN PENDAFTARAN PASIEN PER PERIODE </font></th>
	</tr>
	<tr>
		<td><hr /></td>
		</tr>
		<tr>
		<td><table width="900" border="0" align="center" cellpadding="4" cellspacing="1">
		<tr>
		<td colspan="10" align="left" valign="middle" scope="col"><table width="100%"
		height="28" border="0">
		<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		</tr>
		</table></td>
		</tr>
		<tr>
			<th colspan="9" align="center" scope="col">PERIODE :
			<?php echo $_POST['tglmulai'] ?> S/D <?php echo $_POST['tglsampai'] ?></th>
			</tr>
			<tr>
			<th width="5%" align="center" scope="col" bgcolor="#00CC99">
			<font face="Tahoma, Geneva, sans-serif" size="2">NO</font></th>
			<th width="9%" align="left" scope="col" bgcolor="#00CC99"><strong>NO. PENDAFTARAN</strong></th>
			<th width="11%" align="left" scope="col" bgcolor="#00CC99"><strong>NO. PASIEN</strong></th>
			<th width="11%" align="left" scope="col" bgcolor="#00CC99"><strong>NAMA PASIEN</strong></th>
			<th width="13%" align="left" scope="col" bgcolor="#00CC99"><strong>TANGGAL PENDAFTARAN</strong>
			</th>
			
			</tr>
			<?php
			
$tglmulai= substr($_POST['tglmulai'],6,4)."-".substr($_POST['tglmulai'],3,2)."-".
substr($_POST['tglmulai'],0,2);

$tglsampai = substr($_POST['tglsampai'],6,4)."-".substr($_POST['tglsampai'],3,2)."-".
substr($_POST['tglsampai'],0,2);

$no=1;
$sql = "SELECT *FROM laporan_pendaftaran_pasien
			WHERE tglpendaftaran >= '$tglmulai' AND tglpendaftaran
			<= '$tglsampai'
			ORDER BY nopendaftaran asc";
$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses))
{
	?>
	<tr>
<td align="center" scope="col" bgcolor="#ffffff"><font face="Tahoma,
Geneva, sans-serif" size="2"><?php echo $no ?> </font></td>
<td align="left" scope="col" bgcolor="#ffffff"><font face="Tahoma,
Geneva, sans-serif" size="2"><?php echo $record['nopendaftaran'] ?> </font></td>
<td align="left" scope="col" bgcolor="#ffffff"><font face="Tahoma,
Geneva, sans-serif" size="2"><?php echo $record['nopasien'] ?> </font></td>
<td align="left" scope="col" bgcolor="#ffffff"><font face="Tahoma,
Geneva, sans-serif" size="2"><?php echo $record['namapas'] ?> </font></td>
<td align="left" scope="col" bgcolor="#ffffff"><font face="Tahoma,
Geneva, sans-serif" size="2"><?php echo $record['tglpendaftaran'] ?> </font></td>

</tr>
<?php 
$sql1 = "SELECT * FROM laporan_pendaftaran_pasien
					WHERE tglpendaftaran >= '$tglmulai' AND tglpendaftaran
					<= '$tglsampai'
					ORDER BY nopendaftaran asc";
$proses1=mysql_query($sql1);		
$record1=mysql_fetch_assoc($proses1);
?>
<?php $no++;}?>
<tr>
<td colspan="4" align="right" bgcolor="#CCCCCC" scope="col"><b>
<font size="2" face="Tahoma, Geneva, sans-serif"> Total</font></b></td>
<td align="right" scope="col" bgcolor="#CCCCCC">
<font face="Times New Roman, Times, serif" size="2"><?php echo $no-1 ?> </font></td>
</tr>
</table>
<br /></td>
</tr>
</table>
</div>			

