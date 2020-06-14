<?php
error_reporting(0);
$query1=mysql_query ("SELECT idjenisbiaya from jenisbiaya");
$query2=mysql_query ("SELECT nopendaftaran from pendaftaran");
$idrincianbiaya=$_GET['idrincianbiaya'];
$qryrincianbiaya=mysql_query("select * from rincianbiaya where idrincianbiaya='$idrincianbiaya'");
$tampilrincianbiaya=mysql_fetch_array($qryrincianbiaya);
?>
<html>
<head>
<title>EDIT RINCIAN BIAYA</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form name="frmeditadmin" action="?page=update_rincianbiaya" method="post">
  <div align="center">
    <table width="80%" align="center" cellpadding="3" cellspacing="0">
      <tr>
        <td height="50" colspan="4" style="color:green; font-size:24px;"><div align="center"><strong>SUNTING DATA RINCIAN BIAYA</strong></div></td>
        </tr>

      <tr>
        <td height="28">ID RINCIAN BIAYA</td>
          <td>:</td>
          <td><input name="idrincianbiaya"  size="5" type="text" required="required" value="<?php echo $tampilrincianbiaya['idrincianbiaya'];?>"  /></td>
        </tr>
    <tr>
     <td height="28">ID JENIS BIAYA</td>
        <td>:</td>
		<td><select name="jenisbiaya">
		<?php while ($jenisbiaya=mysql_fetch_array($query1)) {
			echo "<option>$jenisbiaya[idjenisbiaya]</option>";
		}?>
		</select>
		</td>
		</tr>
		<tr>
      <td height="28">NO PENDAFTARAN</td>
        <td>:</td>
		<td><select name="pendaftaran">
		<?php while ($pendaftaran=mysql_fetch_array($query2)) {
			echo "<option>$pendaftaran[nopendaftaran]</option>";
		}?>
		</select>
		</td>
		</tr>
      <tr>     
      <td height="10">&nbsp;</td>
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
