<?php
error_reporting (0);
$query1=mysql_query ("SELECT kodepoll from polikelinik");
$ambil = mysql_query("SELECT MAX(kodedokter) AS kodedokter FROM dokter");
$tampil1 = mysql_fetch_array($ambil);
$id=$tampil1['kodedokter'];
$nourut = (int) substr($id,4 ,8);
$nourut++;
$char = "Dok.";
$kodedokter = $char . sprintf("%02s", $nourut);
?>
<html>
<head>
<title>Input Dokter</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form action="?page=simpan_dokter" method="post" name="tambah" enctype="multipart/form-data">
<table width="104%" height="456" cellpadding="3" cellspacing="0">
      <tr>
        <td height="50" colspan="3" style="color:#009b4c;font-size:25px;padding-left:10px;"><div align="center">INPUT DATA DOKTER</div></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td width="131" style="padding-left:10px;">KODE DOKTER</td>
        <td width="41" >:</td>
        <td width="328"><input name="kodedokter" type="text" placeholder="Masukan Kode Dokter" required="required" value="<?php echo $kodedokter ?>"/></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">NAMA DOKTER</td>
        <td>:</td>
        <td><input name="nmdokter" type="text" size="50" placeholder="Masukan Nama Dokter" required="required"/></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">ALAMAT DOKTER</td>
        <td>:</td>
        <td><input name="almdokter" type="text" size="50" placeholder="Masukan Alamat Dokter " required="required" /></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">TELEPON</td>
        <td>:</td>
        <td><input name="tlpdokter" type="text" size="50" placeholder="Masukan Telepon Dokter" required="required" /></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">KODE POLIKELINIK</td>
        <td>:</td>
        <td><select name="polikelinik">
		<option>Pilih Satu</option>
		<?php while ($polikelinik=mysql_fetch_array($query1)){
				echo "<option>$polikelinik[kodepoll]</option>";
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
