<?php include('lap1.php'); ?>
<link rel="stylesheet" type="text/css" href="plugins/tigra_calendar/tcal.css"/>
<script type="text/javascript" src="plugins/tigra_calendar/tcal.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
	$(".tgl").datepicker({
		dateFormat  : "yy-mm-dd",
		changeMonth : true,
		changeYear  : true,
	});
  });
</script>
<div style="width:400px; margin:auto;">
<h2 align="center" style="color:#79d54b;"><strong>LAPORAN PENDAFTARAN PASIEN</strong></h2>
<form name="form1" method="post" action="lap/laporan_pendaftaran_periodeTampil.php"
target="_blank">
  <p>&nbsp;</p>
  <table width="686" height="128" border="0" cellpadding="2" cellspacing="2">
  
	<tr>
	  <td style="color:#d2d0d0;" width="102" scope="col">Mulai Tanggal</td>
	  <td style="color:green;" width="8" scope="col">:</td>
	  <td width="275" scope="col"><div align="left">
		  <input name="tglmulai" type="text" style="color:green; id="tglmulai" class="tcal" />
	  </div></td>
      <td width="275" scope="col">&nbsp;</td>
	  <td width="275" scope="col">&nbsp;</td>
	</tr>
	<tr>
	  <td style="color:#d2d0d0;" >Sampai Tanggal</td>
	<td style="color:green;" width="8" scope="col">:</td>
	  <td width="275" scope="col"><div align="left">
		  <input name="tglsampai" type="text"  style="color:green; id="tglsampai" class="tcal" />
	  </div></td>
	  <td width="275" scope="col">&nbsp;</td>
	  <td width="275" scope="col">&nbsp;</td>  
	</tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><div align="left">
	  <br><p align="left">  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; <input type="submit" name="lprbtn" id="lprbtn" value="Tampilkan" /></p>
	  </div></td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	</tr>
  </table>
</form>
	  