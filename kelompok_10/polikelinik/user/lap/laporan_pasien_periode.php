<?php include('lap1.php'); ?>
<link rel="stylesheet" type="text/css" href="plugins/tigra_calender/tcal.css"/>
<script type="text/javascript" src="plugins/tigra_calender/tcal.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
	 $(".tgl").datepicker({
		 dateFormat : "dd-mm-yy",
		 changeMonth : true,
		 changeYear : true,
	 });
 });
</script>
<br><br>
<h2> LAPORAN PASIEN PER PERIODE</h2></br></br>
<form action="lap/proseslaporanperiode.php" method="post" name="form1" target="_self">
<table width="500" border="0" class="table-list">
<tr>
<td colspan="3" bgcolor="#cccccc"><strong> PERIODE RAWAT JALAN </strong></td>
</tr>
<tr>
<td width="90"><strong>Periode</strong></td>
<td width="5"><strong>:</strong></td>
<td width="391"><input name="txttanggalawal" type="date" class="tcal" value="<?php echo $tglawal; ?>" />
s/d
<input name ="txttanggalakhir" type="date" class="tcal" value="<?php echo $tglakhir; ?>" /> </td>
</tr>
<tr>
<td> &nbsp; </td>
<td> &nbsp; </td>
<td><input name="btntampil" type="submit" target="_blank" value="tampilkan"></td>
</tr>
</table>
</form>