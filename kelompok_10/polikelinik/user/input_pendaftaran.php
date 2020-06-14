<?php
error_reporting (0);
$query1=mysql_query ("SELECT NIP from pegawai");
$query2=mysql_query ("SELECT nopasien from pasien");
$query3=mysql_query ("SELECT kodejadwal from jadwalpraktek");
$ambil = mysql_query("SELECT MAX(nopendaftaran) AS nopendaftaran FROM pendaftaran");
$tampil1 = mysql_fetch_array($ambil);
$id=$tampil1['nopendaftaran'];
$nourut = (int) substr($id,4 ,8);
$nourut++;
$char = "Pen.";
$nopendaftaran = $char . sprintf("%02s", $nourut);
?>
<html>
<head>
<title>Input Pendaftaran</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form action="?page=simpan_pendaftaran" method="post" name="tambah" enctype="multipart/form-data">
<table width="104%" height="456" cellpadding="3" cellspacing="0">
      <tr>
        <td height="50" colspan="3" style="color:#009b4c;font-size:25px;padding-left:10px;"><div align="center">INPUT DATA PENDAFTARAN</div></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td width="131" style="padding-left:10px;">NO PENDAFTARAN</td>
        <td width="41" >:</td>
        <td width="328"><input name="nopendaftaran" type="text" placeholder="Masukan No Pendaftaran" required="required" value="<?php echo $nopendaftaran ?>"/></td>
      </tr>
      <tr>
        <td style="padding-left:7px;">TANGGAL PENDAFTARAN</td>
        <td >:</td>
        <td ><select name="tglpendaftaran" size="1" id="tglpendaftran">
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
        <td style="padding-left:10px;">NO URUT</td>
        <td>:</td>
        <td><input name="nourut" type="text" size="50" placeholder="Masukan No Urut " required="required" /></td>
      </tr>
     	  <tr>
        <td style="padding-left:10px;">NIP</td>
        <td>:</td>
        <td><select name="pegawai">
		<option>Pilih Satu</option>
		<?php while ($pegawai=mysql_fetch_array($query1)){
				echo "<option>$pegawai[NIP]</option>";
		}?>
		</select>
		</td>
		  </tr>
      <tr>
        <td style="padding-left:10px;">NO PASIEN</td>
        <td>:</td>
        <td><select name="pasien">
		<option>Pilih Satu</option>
		<?php while ($pasien=mysql_fetch_array($query2)){
				echo "<option>$pasien[nopasien]</option>";
		}?>
		</select>
		</td>
		  </tr>
		 <tr>
        <td style="padding-left:10px;">KODE JADWAL</td>
        <td>:</td>
        <td><select name="jadwalpraktek">
		<option>Pilih Satu</option>
		<?php while ($jadwalpraktek=mysql_fetch_array($query3)){
				echo "<option>$jadwalpraktek[kodejadwal]</option>";
		}?>
		</select>
		</td>
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
