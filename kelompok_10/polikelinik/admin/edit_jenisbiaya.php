<?php
$idjenisbiaya=$_GET['idjenisbiaya'];
$qryanggota=mysql_query("select * from jenisbiaya where idjenisbiaya='$idjenisbiaya'");
$tampilsiswa=mysql_fetch_array($qryanggota);
?>
<html>
<head>
<title>EDIT JENIS BIAYA</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form name="frmeditadmin" action="?page=update_jenisbiaya" method="post">
  <div align="center">
    <table width="120%" align="center" cellpadding="3" cellspacing="0">
      <tr>
        <td height="50" colspan="4" style="color:#blue; font-size:24px;"><div align="center"><strong>SUNTING DATA JENIS BIAYA</strong></div></td>
        </tr>
      <tr>
        <td height="28">ID JENIS BIAYA</td>
          <td>:</td>
          <td><input name="idjenisbiaya"  size="10" type="text" required="required" value="<?php echo $tampilsiswa['idjenisbiaya'];?>"  /></td>
        </tr>
      
      <tr>
        <td width="177" height="28">NAMA BIAYA</td>
          <td width="12">:</td>
          <td width="462"><input type="text" name="namabiaya" required="required" size="40" value="<?php echo $tampilsiswa['namabiaya'];?>" /></td>
        </tr>
      <tr>
        <td height="28">TARIF</td>
          <td>:</td>
          <td><input type="text" name="tarif"  size="15" required="required" value="<?php echo $tampilsiswa['tarif'];?>" /></td>
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
