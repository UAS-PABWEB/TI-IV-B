<?php
error_reporting (0);
$query1=mysql_query ("SELECT kodedokter from dokter");
$ambil = mysql_query("SELECT MAX(kodejadwal) AS kodejadwal FROM jadwalpraktek");
$tampil1 = mysql_fetch_array($ambil);
$id=$tampil1['kodejadwal'];
$nourut = (int) substr($id,4 ,8);
$nourut++;
$char = "Jad.";
$kodejadwal = $char . sprintf("%02s", $nourut);
?>
<html>
<head>
<title>Input Jadwal Praktek</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form action="?page=simpan_jadwalpraktek" method="post" name="tambah" enctype="multipart/form-data">
<table width="104%" height="456" cellpadding="3" cellspacing="0">
      <tr>
        <td height="50" colspan="3" style="color:#009b4c;font-size:25px;padding-left:10px;"><div align="center">INPUT DATA JADWAL PRAKTEK</div></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td width="131" style="padding-left:10px;">KODE JADWAL</td>
        <td width="41" >:</td>
        <td width="328"><input name="kodejadwal" type="text" placeholder="Masukan Kode Jadwal" required="required" value="<?php echo $kodejadwal ?>"/></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">HARI</td>
        <td>:</td>
        <td><input name="hari" type="text" size="50" placeholder="Masukan Hari" required="required"/></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">JAM MULAI</td>
        <td>:</td>
        <td><input name="jammulai" type="time" size="50" placeholder="Masukan Jam Mulai " required="required" /></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">JAM SELESAI</td>
        <td>:</td>
        <td><input name="jamselesai" type="time" size="50" placeholder="Masukan Jam selesai" required="required" /></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">KODE DOKTER</td>
        <td>:</td>
        <td><select name="dokter">
		<option>Pilih Satu</option>
		<?php while ($dokter=mysql_fetch_array($query1)){
				echo "<option>$dokter[kodedokter]</option>";
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
