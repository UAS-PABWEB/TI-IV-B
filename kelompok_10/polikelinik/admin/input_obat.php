<?php
$ambil = mysql_query("SELECT MAX(kodeobat) AS kodeobat FROM obat");
$tampil1 = mysql_fetch_array($ambil);
$id=$tampil1['kodeobat'];
$nourut = (int)  substr($id, 4, 8);
$nourut++;
$char = "Obt.";
$kodeobat = $char . sprintf("%02s", $nourut);
?>
<html>
<head>
<title>Input Obat</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form action="?page=simpan_obat" method="post" name="tambah" enctype="multipart/form-data">
<table width="104%" height="456" cellpadding="3" cellspacing="0">
      <tr>
        <td height="50" colspan="3" style="color:#009b4c;font-size:25px;padding-left:10px;"><div align="center">INPUT DATA OBAT</div></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td width="131" style="padding-left:10px;">KODE OBAT</td>
        <td width="41" >:</td>
        <td width="328"><input name="kodeobat" type="text" placeholder="Masukan Kode Obat" required="required" value="<?php echo $kodeobat ?>"/></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">NAMA OBAT</td>
        <td>:</td>
        <td><input name="nmobat" type="text" size="50" placeholder="Masukan Nama Obat" required="required"/></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">MERK</td>
        <td>:</td>
        <td><input name="merk" type="text" size="50" placeholder="Masukan Merk " required="required" /></td>
      </tr>
          <tr> 
	     <td style="padding-left:7px;">SATUAN</td>
        <td>:</td>
        <td><select name="satuan" size="1" id="satuan">
		<option>Pilih Satu</option>
          <option value="Pil">Pil</option>
          <option value="Tablet">Tablet</option> 
          <option value="Bubuk">Bubuk</option> 
		  <option value="Drase">Drase</option>  
          <option value="Kapsul">Kapsul</option>
          <option value="Sirup">Sirup</option>		  
        </select></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">HARGA JUAL</td>
        <td>:</td>
        <td><input name="hargajual" type="text" size="50" placeholder="Masukan Harga Jual" required="required" /></td>
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
