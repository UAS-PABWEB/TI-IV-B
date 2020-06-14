<?php
error_reporting (0);
$query1=mysql_query ("SELECT nopendaftaran from pendaftaran");
$ambil = mysql_query("SELECT MAX(nopemeriksaan) AS nopemeriksaan FROM pemeriksaan");
$tampil1 = mysql_fetch_array($ambil);
$id=$tampil1['nopemeriksaan'];
$nourut = (int) substr($id,4 ,8);
$nourut++;
$char = "Pem.";
$nopemeriksaan = $char . sprintf("%02s", $nourut);
?>
<html>
<head>
<title>Input Pemeriksaan</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form action="?page=simpan_pemeriksaan" method="post" name="tambah" enctype="multipart/form-data">
<table width="104%" height="456" cellpadding="3" cellspacing="0">
      <tr>
        <td height="50" colspan="3" style="color:#009b4c;font-size:25px;padding-left:10px;"><div align="center">INPUT DATA PEMERIKSAAN</div></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td width="131" style="padding-left:10px;">NO PEMERIKSAAN</td>
        <td width="41" >:</td>
        <td width="328"><input name="nopemeriksaan" type="text" placeholder="Masukan No Pemeriksaan" required="required" value="<?php echo $nopemeriksaan ?>"/></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">KELUHAN</td>
        <td>:</td>
        <td><input name="keluhan" type="text" size="50" placeholder="Masukan Keluhan" required="required"/></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">DIAGNOSA</td>
        <td>:</td>
        <td><input name="diagnosa" type="text" size="50" placeholder="Masukan Diagnosa " required="required" /></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">PERAWATAN</td>
        <td>:</td>
        <td><input name="perawatan" type="text" size="50" placeholder="Masukan Perawatan" required="required" /></td>
      </tr>
	  <tr>
        <td style="padding-left:10px;">TINDAKAN</td>
        <td>:</td>
        <td><input name="tindakan" type="text" size="50" placeholder="Masukan Tindakan" required="required" /></td>
      </tr>
	  <tr>
        <td style="padding-left:10px;">BERAT BADAN</td>
        <td>:</td>
        <td><input name="beratbadan" type="text" size="50" placeholder="Masukan Berat Badan" required="required" /></td>
      </tr>
	  <tr>
        <td style="padding-left:10px;">TENSIDIASTOLIK</td>
        <td>:</td>
        <td><input name="tensidiastolik" type="text" size="50" placeholder="Masukan Tensidiastolik" required="required" /></td>
      </tr>
	  <tr>
        <td style="padding-left:10px;">TENSISISTOLIK</td>
        <td>:</td>
        <td><input name="tensisistolik" type="text" size="50" placeholder="Masukan Tensisistolik" required="required" /></td>
      </tr>
	  <tr>
        <td style="padding-left:10px;">NO PENDAFTARAN</td>
        <td>:</td>
        <td><select name="pendaftaran">
		<option>Pilih Satu</option>
		<?php while ($pendaftaran=mysql_fetch_array($query1)){
				echo "<option>$pendaftaran[nopendaftaran]</option>";
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
