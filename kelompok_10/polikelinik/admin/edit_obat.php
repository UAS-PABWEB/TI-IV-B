<?php
$kodeobat=$_GET['kodeobat'];
$qryanggota=mysql_query("select * from obat where kodeobat='$kodeobat'");
$tampilsiswa=mysql_fetch_array($qryanggota);
?>
<html>
<head>
<title>EDIT OBAT</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form name="frmeditadmin" action="?page=update_obat" method="post">
  <div align="center">
    <table width="120%" align="center" cellpadding="3" cellspacing="0">
      <tr>
        <td height="50" colspan="4" style="color:#blue; font-size:24px;"><div align="center"><strong>SUNTING DATA OBAT</strong></div></td>
        </tr>
      <tr>
        <td height="28">KODE OBAT</td>
          <td>:</td>
          <td><input name="kodeobat"  size="10" type="text" required="required" value="<?php echo $tampilsiswa['kodeobat'];?>"  /></td>
        </tr>
      
      <tr>
        <td width="300" height="28">NAMA OBAT</td>
          <td width="12">:</td>
          <td width="462"><input type="text" name="nmobat" required="required" size="50" value="<?php echo $tampilsiswa['nmobat'];?>" /></td>
        </tr>
      <tr>
        <td height="28">MERK</td>
          <td>:</td>
          <td><input type="text" name="merk"  size="25" required="required" value="<?php echo $tampilsiswa['merk'];?>" /></td>
        </tr>
      <tr> 
	     <td style="padding-left:1px;">SATUAN</td>
        <td>:</td>
        <td><select name="satuan" size="1" id="satuan">
          <option value="Lembar">Lembar</option>
          <option value="Dus">Dus</option> 
          <option value="Botol">Botol</option>           
        </select></td>
      </tr>
      <tr>
        <td height="28">HARGA JUAL</td>
          <td>:</td>
           <td><input type="text" name="hargajual"  size="15" required="required" value="<?php echo $tampilsiswa['hargajual'];?>" /></td>
        </tr>
       <tr>     
      <td height="25">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="submit" value="UBAH" /> 
            <input type="button" onclick="javascript:history.back();" value="BATAL" /></td>
        </tr>
    </table>
  </div>
</form>
</div>
</body>
</html>
