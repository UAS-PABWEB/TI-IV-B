<?php
error_reporting(0);
$query1=mysql_query ("SELECT kodepoll from polikelinik");
$kodedokter=$_GET['kodedokter'];
$qryanggota=mysql_query("select * from dokter where kodedokter='$kodedokter'");
$tampilsiswa=mysql_fetch_array($qryanggota);
?>
<html>
<head>
<title>EDIT DOKTER</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form name="frmeditadmin" action="?page=update_dokter" method="post">
  <div align="center">
    <table width="100%" align="center" cellpadding="3" cellspacing="0">
      <tr>
        <td height="50" colspan="4" style="color:#blue; font-size:24px;"><div align="center"><strong>SUNTING DATA DOKTER</strong></div></td>
        </tr>
      <tr>
        <td height="28">KODE DOKTER</td>
          <td>:</td>
          <td><input name="kodedokter"  size="5" type="text" required="required" value="<?php echo $tampilsiswa['kodedokter'];?>"  /></td>
        </tr>
      
      <tr>
        <td width="400" height="28">NAMA DOKTER</td>
          <td width="5">:</td>
          <td width="462"><input type="text" name="nmdokter" required="required" size="40" value="<?php echo $tampilsiswa['nmdokter'];?>" /></td>
        </tr>
      <tr>
        <td height="28">ALAMAT DOKTER</td>
          <td>:</td>
          <td><input type="text" name="almdokter"  size="40" required="required" value="<?php echo $tampilsiswa['almdokter'];?>" /></td>
        </tr>
      <tr>
        <td height="28">TELEPON DOKTER</td>
          <td>:</td>
          <td><input type="text" name="tlpdokter"  size="15" required="required" value="<?php echo $tampilsiswa['tlpdokter'];?>" /></td>
        </tr>
      <tr>
        <td style="padding-left:1px;">KODE POLIKELINIK</td>
        <td>:</td>
		<td><select name="polikelinik">
		<?php while ($polikelinik=mysql_fetch_array($query1)) {
			echo "<option>$polikelinik[kodepoll]</option>";
		}?>
		</select>
		</td>
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
