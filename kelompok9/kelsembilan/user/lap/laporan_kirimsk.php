<?php include('lap1.php'); ?>
<br>
<div class="fh5co-parallax" style="background-image: url(images/u.jpg);" data-stellar-background-ratio="0.10">
			<div class="overlay"></div>
			<div class="container-login100">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
						
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
<h2 align="center" style="color:#000000;"><strong>LAPORAN SURAT KIRIM</strong></h2>
<form name="form1" method="post" action="lap/laporan_kirimsk_periodeTampil.php"
target="_blank">
  <p>&nbsp;</p>
  <table width="686" height="128" border="0" cellpadding="2" cellspacing="2">
  
	<tr>
	  <td style="color:#000000;" width="102" scope="col">Mulai Tanggal</td>
	  <td style="color:black;" width="8" scope="col">:</td>
	  <td width="275" scope="col"><div align="left">
		  <input name="tglmulai" type="text" style="color:black; id="tglmulai" class="tcal" />
	  </div></td>
      <td width="275" scope="col">&nbsp;</td>
	  <td width="275" scope="col">&nbsp;</td>
	</tr>
	<tr>
	  <td style="color:#000000;" >Sampai Tanggal</td>
	<td style="color:black;" width="8" scope="col">:</td>
	  <td width="275" scope="col"><div align="left">
		  <input name="tglsampai" type="text"  style="color:black; id="tglsampai" class="tcal" />
	  </div></td>
	  <td width="275" scope="col">&nbsp;</td>
	  <td width="275" scope="col">&nbsp;</td>  
	</tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td><div align="left">
	  <br><p align="left">  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; <input style="color:#664d00;" type="submit" name="lprbtn" id="lprbtn" value="Tampilkan" /></p>
	  </div></td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	</tr>
  </table>
</form>
	  