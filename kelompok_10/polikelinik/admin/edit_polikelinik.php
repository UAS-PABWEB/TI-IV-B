<?php
$kodepoll=$_GET['kodepoll'];
$qryanggota=mysql_query("select * from polikelinik where kodepoll='$kodepoll'");
$tampilsiswa=mysql_fetch_array($qryanggota);
?>
<html>
<head>
<title>EDIT POLIKELINIK</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form name="frmeditadmin" action="?page=update_polikelinik" method="post">
  <div align="center">
    <table width="120%" align="center" cellpadding="3" cellspacing="0">
      <tr>
        <td height="50" colspan="4" style="color:#blue; font-size:24px;"><div align="center"><strong>SUNTING DATA POLIKELINIK</strong></div></td>
        </tr>
      
      <tr>
        <td height="28">KODE POLIKELINIK</td>
          <td>:</td>
          <td><input name="kodepoll"  size="10" type="text" required="required" value="<?php echo $tampilsiswa['kodepoll'];?>"  /></td>
        </tr>
      
      <tr>
        <td width="200" height="28">
		NAMA POLIKELINIK</td>
          <td width="12">:</td>
          <td width="462"><input type="text" name="namapoll" required="required" size="35" value="<?php echo $tampilsiswa['namapoll'];?>" /></td>
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
