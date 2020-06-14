<?php
error_reporting (0);
$query1=mysql_query ("SELECT idjenisbiaya from rincianbiaya");
$ambil = mysql_query("SELECT MAX(idjenisbiaya) AS idjenisbiaya FROM jenisbiaya");
$tampil1 = mysql_fetch_array($ambil);
$id=$tampil1['idjenisbiaya'];
$nourut = (int) substr($id,4 ,8);
$nourut++;
$char = "Jen.";
$idjenisbiaya = $char . sprintf("%02s", $nourut);
?>
<html>
<head>
<title>Input Jenis Biaya</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form action="?page=simpan_jenisbiaya" method="post" name="tambah" enctype="multipart/form-data">
<table width="104%" height="456" cellpadding="3" cellspacing="0">
      <tr>
        <td height="50" colspan="3" style="color:#009b4c;font-size:25px;padding-left:10px;"><div align="center">INPUT DATA JENIS BIAYA</div></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" style="padding-left:10px;">&nbsp;</td>
      </tr>
     <tr>
           <td style="padding-left:10px;">ID JENIS BIAYA</td>
        <td>:</td>
        <td><select name="rincianbiaya">
		<option>Pilih Satu</option>
		<?php while ($rincianbiaya=mysql_fetch_array($query1)){
				echo "<option>$rincianbiaya[idjenisbiaya]</option>";
		}?>
		</select>
		</td>
		  </tr>
      <tr>
        <td style="padding-left:10px;">NAMA BIAYA</td>
        <td>:</td>
        <td><input name="namabiaya" type="text" size="50" placeholder="Masukan Nama Biaya" required="required"/></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">TARIF</td>
        <td>:</td>
        <td><input name="tarif" type="text" size="50" placeholder="Masukan Tarif " required="required" /></td>
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
