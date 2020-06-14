<?php
error_reporting(0);
$query1=mysql_query ("SELECT kodeobat from obat");
$query2=mysql_query ("SELECT nopemeriksaan from pemeriksaan");
$ambil = mysql_query("SELECT MAX(noresep) AS noresep FROM resep");
$tampil1 = mysql_fetch_array($ambil);
$id=$tampil1['noresep'];
$nourut = (int)  substr($id, 4, 8);
$nourut++;
$char = "Res.";
$noresep = $char . sprintf("%02s", $nourut);
?>
<html>
<head>
<title>Input Resep</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form action="?page=simpan_resep" method="post" name="tambah" enctype="multipart/form-data">
<table width="104%" height="456" cellpadding="3" cellspacing="0">
      <tr>
        <td height="50" colspan="3" style="color:#009b4c;font-size:25px;padding-left:10px;"><div align="center">INPUT DATA RESEP </div></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td width="131" style="padding-left:10px;">NO RESEP</td>
        <td width="41" >:</td>
        <td width="328"><input name="noresep" type="text" placeholder="Masukan No Resep" required="required" value="<?php echo $noresep ?>"/></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">DOSIS</td>
        <td>:</td>
        <td><input name="dosis" type="text" size="50" placeholder="Masukan Dosis" required="required"/></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">JUMLAH</td>
        <td>:</td>
        <td><input name="jumlah" type="text" size="50" placeholder="Masukan Jumlah" required="required" /></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">KODE OBAT</td>
        <td>:</td>
		<td><select name="obat">
		<option>Pilih Satu</option>
		<?php while ($obat=mysql_fetch_array($query1)) {
			echo "<option>$obat[kodeobat]</option>";
		}?>
		</select>
		</td>
		</tr>
		<tr>
        <td style="padding-left:10px;">NO PEMERIKSAAN</td>
        <td>:</td>
		<td><select name="pemeriksaan">
		<option>Pilih Satu</option>
		<?php while ($pemeriksaan=mysql_fetch_array($query2)) {
			echo "<option>$pemeriksaan[nopemeriksaan]</option>";
		}?>
		</select>
		</td>
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
