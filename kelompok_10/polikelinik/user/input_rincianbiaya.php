<?php
error_reporting (0);
$query1=mysql_query ("SELECT idjenisbiaya from jenisbiaya");
$query2=mysql_query ("SELECT nopendaftaran from pendaftaran");
$ambil = mysql_query("SELECT MAX(idrincianbiaya) AS idrincianbiaya FROM rincianbiaya");
$tampil1 = mysql_fetch_array($ambil);
$id=$tampil1['idrincianbiaya'];
$nourut = (int) substr($id,4 ,8);
$nourut++;
$char = "Rin.";
$idrincianbiaya = $char . sprintf("%02s", $nourut);
?>
<html>
<head>
<title>Input Rincian Biaya</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form action="?page=simpan_rincianbiaya" method="post" name="tambah" enctype="multipart/form-data">
<table width="104%" height="456" cellpadding="3" cellspacing="0">
      <tr>
        <td height="50" colspan="3" style="color:#009b4c;font-size:25px;padding-left:10px;"><div align="center">INPUT DATA RINCIAN BIAYA</div></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td width="131" style="padding-left:10px;">ID RINCIAN BIAYA</td>
        <td width="41" >:</td>
        <td width="328"><input name="idrincianbiaya" type="text" placeholder="Masukan Rincian Biaya" required="required" value="<?php echo $idrincianbiaya ?>"/></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">ID JENIS BIAYA</td>
        <td>:</td>
        <td><select name="jenisbiaya">
		<option>Pilih Satu</option>
		<?php while ($jenisbiaya=mysql_fetch_array($query1)){
				echo "<option>$jenisbiaya[idjenisbiaya]</option>";
		}?>
		</select>
		</td>
		  </tr>
      <tr>
        <td style="padding-left:10px;">NO PENDAFTARAN</td>
        <td>:</td>
        <td><select name="pendaftaran">
		<option>Pilih Satu</option>
		<?php while ($pendaftaran=mysql_fetch_array($query2)){
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
