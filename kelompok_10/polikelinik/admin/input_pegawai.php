<?php
$ambil = mysql_query("SELECT MAX(NIP) AS NIP FROM pegawai");
$tampil1 = mysql_fetch_array($ambil);
$id=$tampil1['NIP'];
$nourut = (int)  substr($id, 4, 8);
$nourut++;
$char = "Peg.";
$NIP = $char . sprintf("%02s", $nourut);
?>
<html>
<head>
<title>Input Pegawai</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form action="?page=simpan_pegawai" method="post" name="tambah" enctype="multipart/form-data">
<table width="104%" height="456" cellpadding="3" cellspacing="0">
      <tr>
        <td height="50" colspan="3" style="color:#009b4c;font-size:25px;padding-left:10px;"><div align="center">INPUT DATA PEGAWAI </div></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td width="131" style="padding-left:10px;">NIP</td>
        <td width="41" >:</td>
        <td width="328"><input name="NIP" type="text" placeholder="Masukan NIP" required="required" value="<?php echo $NIP ?>"/></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">NAMA PEGAWAI</td>
        <td>:</td>
        <td><input name="namapeg" type="text" size="50" placeholder="Masukan Nama Pegawai" required="required"/></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">ALAMAT PEGAWAI</td>
        <td>:</td>
        <td><input name="almpeg" type="text" size="50" placeholder="Masukan Alamat Pegawai " required="required" /></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">TELEPON PEGAWAI</td>
        <td>:</td>
        <td><input name="telppeg" type="text" size="50" placeholder="Masukan Telepon Pegawai" required="required" /></td>
      </tr>
      	   <tr>
        <td style="padding-left:7px;">TANGGAL LAHIR PEGAWAI</td>
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
	     <td style="padding-left:7px;">JENIS KELAMIN PEGAWAI</td>
        <td>:</td>
        <td><select name="jnskelpeg" size="1" id="jnskelpeg">
          <option value="" selected>Pilih Satu</option>
          <option value="Laki - Laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>           
        </select></td>
      </tr>
        <tr>
          <td style="padding-left:10px;">&nbsp;</td>
          <td>&nbsp;</td>
          <td style="font-size:9px; color:#FF0000;">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="3" style="padding-left:10px;padding-bottom:30px;"><input name="submit" type="submit" value="SIMPAN">
            <input name="fulang" type="reset" value="ULANG">
            <input name="batal" type="button" value="BATAL" onClick="javascript:history.back()"></td>
      </tr>
    </table>
</form>
</div>
</body>
</html>
