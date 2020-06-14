<?php
error_reporting (0);
$NIP=$_GET['NIP'];
$qrypegawai=mysql_query("select * from pegawai where NIP='$NIP'");
$tampilpegawai=mysql_fetch_array($qrypegawai);
?>
<html>
<head>
<title>EDIT PEGAWAI</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form name="frmeditadmin" action="?page=update_pegawai" method="post">
<div align="center">
	<table width="150%" align="center" cellpadding="3" cellspacing="0">
	<tr>
	<td height="50" colspan="4" style="color:#blue; font-size:24px;"><div align="center"><strong><font face="ninja naruto">SUNTING DATA PEGAWAI </font></strong></div></td>
	</tr>
		<tr>
		<td height="28">NIP</td>
		<td>:</td>
		<td><input name="NIP" size="10" type="text" required="required" value="<?php echo $tampilpegawai['NIP'];?>" /></td>
		</tr>
		
		<tr>
		<td width="200" height="28">NAMA PEGAWAI</td>
		<td width="10">:</td>
		<td width="462"><input type="text" name="namapeg" required="required" size="40" value="<?php echo $tampilpegawai['namapeg'];?>" /></td>
		</tr>
		<tr>
			<td height="28">ALAMAT PEGAWAI</td>
			<td>:</td>
			<td><input type="text" name="almpeg" size="40" required="required" value="<?php echo $tampilpegawai['almpeg'];?>" /></td>
		</tr>
		<tr>
		<td height="28">TELEPON PEGAWAI</td>
			<td>:</td>
			<td><input type="text" name="telppeg" size="15" required="required" value="<?php echo $tampilpegawai['telppeg'];?>" /></td>
		</tr>
		 <tr>
        <td style="padding-left:1px;">TANGGAL LAHIR PEGAWAI</td>
        <td >:</td>
        <td ><select name="tgllhrpeg" size="1" id="tgllhrpeg">
            <?php

		     for ($i=1;$i<=31;$i++)

			 {

			   echo "<option value=".$i.">".$i."</option>";

			 }

		  ?>
          </select>
            <select name="bln" size="1" id="bln">
              <?php

		     $bulan=array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

		     for ($i=1;$i<=12;$i++)

			 {

			   echo "<option value=".$i.">".$bulan[$i]."</option>";

			 }

		  ?>
            </select>
            <select name="thn" size="1" id="thn">
              <?php

		     for ($i=1983;$i<=3000;$i++)

			 {

			   echo "<option value=".$i.">".$i."</option>";

			 }

		  ?>
          </select></td>
      </tr>
    		 <tr>
        <td style="padding-left:1px;">JENIS KELAMIN PEGAWAI</td>
        <td>:</td>
        <td><select name="jnskelpeg" size="1" id="jnskelpeg">
          <option value="Laki-Laki">Laki-Laki</option>
          <option value="Perempuan">Perempuan</option>
        </select></td>
      </tr>
	   
		 <tr>
		 <td height="25">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" value="SIMPAN" />
			<input type="button" onclick="javascript:history.back();" value="BATAL" /></td>
			</tr>
			</table>
			</div>
			</form>
			</div>
			</body>
			</html>
			