<?php
$nopasien=$_GET['nopasien'];
$qryanggota=mysql_query("select * from pasien where nopasien='$nopasien'");
$tampilsiswa=mysql_fetch_array($qryanggota);
?>
<html>
<head>
<title>EDIT PASIEN</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form name="frmeditadmin" action="?page=update_pasien" method="post">
  <div align="center">
    <table width="120%" align="center" cellpadding="3" cellspacing="0">
      <tr>
        <td height="50" colspan="4" style="color:#blue; font-size:24px;"><div align="center"><strong>SUNTING DATA PASIEN</strong></div></td>
        </tr>
       <tr>
        <td height="28">NO PASIEN</td>
          <td>:</td>
          <td><input name="nopasien"  size="10" type="text" required="required" value="<?php echo $tampilsiswa['nopasien'];?>"  /></td>
        </tr>
      
      <tr>
        <td width="400" height="28">NAMA PASIEN</td>
          <td width="15">:</td>
          <td width="462"><input type="text" name="namapas" required="required" size="50" value="<?php echo $tampilsiswa['namapas'];?>" /></td>
        </tr>
      <tr>
        <td height="28">ALAMAT PASIEN</td>
          <td>:</td>
          <td><input type="text" name="almpas"  size="50" required="required" value="<?php echo $tampilsiswa['almpas'];?>" /></td>
        </tr>
      <tr>
        <td height="28">TELEPON PASIEN</td>
          <td>:</td>
          <td><input type="text" name="telppas"  size="20" required="required" value="<?php echo $tampilsiswa['telppas'];?>" /></td>
        </tr>
		<tr>
        <td style="padding-left:1px;">TANGGAL LAHIR PASIEN</td>
        <td >:</td>
        <td ><select name="tgllahirpas" size="1" id="tgllahirpas">
            <?php

		     for ($i=1;$i<=31;$i++)

			 {

			   echo "<option value=".$i.">".$i."</option>";

			 }

		  ?>
          </select>
            <select name="bln" size="1" id="bln">
              <?php

		     $bulan=array("","Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

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
	     <td style="padding-left:1px;">JENIS KELAMIN PASIEN</td>
        <td>:</td>
        <td><select name="jeniskelpas" size="1" id="jeniskelpas">
          <option value="" selected>Pilih Satu</option>
          <option value="Laki-Laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>           
        </select></td>
      </tr>
		<tr>
        <td style="padding-left:1px;">TANGGAL REGISTRASI</td>
        <td >:</td>
        <td ><select name="tglregistrasi" size="1" id="tglregistrasi">
            <?php

		     for ($i=1;$i<=31;$i++)

			 {

			   echo "<option value=".$i.">".$i."</option>";

			 }

		  ?>
          </select>
            <select name="bln" size="1" id="bln">
              <?php

		     $bulan=array("","Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

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
      <td height="25">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="submit" value="UBAH" /> 
            <input type="button" onclick="javascript:history.back();" value="BATAL" /></td>
        </tr>
    </table>
  </div>
</form>
</div>
</body>
</html>
