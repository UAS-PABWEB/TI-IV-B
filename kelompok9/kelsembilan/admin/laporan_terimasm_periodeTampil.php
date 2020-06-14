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
	color="#0000FF" size="3">SURAT<BR>
	LAPORAN SURAT TERIMA PER PERIODE </font></th>
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
			<th width="9%" align="left" scope="col" bgcolor="#00CC99"><strong>NO AGENDA SURAT MASUK</strong></th>
			<th width="11%" align="left" scope="col" bgcolor="#00CC99"><strong>ID PETUGAS</strong></th>
			<th width="11%" align="left" scope="col" bgcolor="#00CC99"><strong>JENIS SURAT</strong></th>
			<th width="13%" align="left" scope="col" bgcolor="#00CC99"><strong>TANGGAL TERIMA</strong>
			</th>
			
			</tr>
			<?php
			
$tglmulai= substr($_POST['tglmulai'],6,4)."-".substr($_POST['tglmulai'],3,2)."-".
substr($_POST['tglmulai'],0,2);

$tglsampai = substr($_POST['tglsampai'],6,4)."-".substr($_POST['tglsampai'],3,2)."-".
substr($_POST['tglsampai'],0,2);

$no=1;
$sql = "SELECT *FROM surat_masuk
			WHERE TANGGAL_TERIMA >= '$tglmulai' AND TANGGAL_TERIMA
			<= '$tglsampai'
			ORDER BY NO_AGENDASM asc";
$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses))
{
	?>
	<tr>
<td align="center" scope="col" bgcolor="#ffffff"><font face="Tahoma,
Geneva, sans-serif" size="2"><?php echo $no ?> </font></td>
<td align="left" scope="col" bgcolor="#ffffff"><font face="Tahoma,
Geneva, sans-serif" size="2"><?php echo $record['NO_AGENDASM'] ?> </font></td>
<td align="left" scope="col" bgcolor="#ffffff"><font face="Tahoma,
Geneva, sans-serif" size="2"><?php echo $record['ID'] ?> </font></td>
<td align="left" scope="col" bgcolor="#ffffff"><font face="Tahoma,
Geneva, sans-serif" size="2"><?php echo $record['JENIS_SURAT'] ?> </font></td>
<td align="left" scope="col" bgcolor="#ffffff"><font face="Tahoma,
Geneva, sans-serif" size="2"><?php echo $record['TANGGAL_TERIMA'] ?> </font></td>

</tr>
<?php 
$sql1 = "SELECT * FROM surat_masuk
					WHERE TANGGAL_TERIMA >= '$tglmulai' AND TANGGAL_TERIMA
					<= '$tglsampai'
					ORDER BY NO_AGENDASM asc";
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

