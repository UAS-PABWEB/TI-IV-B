<?php
error_reporting (0);
$query1=mysql_query ("SELECT NI from pegawai");
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
<table width="130%" height="456" cellpadding="3" cellspacing="0">
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
        <td width="20" >:</td>
        <td width="328"><input name="nopendaftaran" type="text" placeholder="Masukan No Pendaftaran" required="required" value="<?php echo $nopendaftaran ?>"/></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">TANGGAL PENDAFTARAN</td>
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
        <td><input name="nourut" type="text" size="15" placeholder="Masukan No Urut " required="required" /></td>
      </tr>
     	  <tr>
         <td style="padding-left:10px;">NAMA PASIEN</td>
        <td>:</td>
        <td><input name="nama" type="text" size="15" placeholder="Masukan Nama " required="required" /></td>
        
		  </tr>
      <tr>
        <td style="padding-left:10px;">NO PASIEN</td>
        <td>:</td>
        <td><input name="nourut" type="text" size="15" placeholder="Masukan No Pasien " required="required" /></td>
      </tr>
		 <tr>
        <td style="padding-left:10px;">DOKTER</td>
        <td>:</td>
        <td><select name="kodedokter">
		<option>Pilih Satu</option>
		<?php while ($kodedokter=mysql_fetch_array($query3)){
				echo "<option>$kodedokter[kodedokter]</option>";
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
