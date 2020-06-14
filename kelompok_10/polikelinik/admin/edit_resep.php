<?php
$query1=mysql_query ("SELECT kodeobat from obat");
$query2=mysql_query ("SELECT nopemeriksaan from pemeriksaan");
$noresep=$_GET['noresep'];
$qryanggota=mysql_query("select * from resep where noresep='$noresep'");
$tampilsiswa=mysql_fetch_array($qryanggota);
?>
<html>
<head>
<title>EDIT RESEP</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form name="frmeditadmin" action="?page=update_resep" method="post">
  <div align="center">
    <table width="120%" align="center" cellpadding="3" cellspacing="0">
      <tr>
        <td height="50" colspan="4" style="color:#blue; font-size:24px;"><div align="center"><strong>SUNTING DATA RESEP</strong></div></td>
        </tr>
     
      <tr>
        <td height="28">NO RESEP</td>
          <td>:</td>
          <td><input name="noresep"  size="5" type="text" required="required" value="<?php echo $tampilsiswa['noresep'];?>"  /></td>
        </tr>
      
      <tr>
        <td width="177" height="28">DOSIS</td>
          <td width="12">:</td>
          <td width="462"><input type="text" name="dosis" required="required" size="15" value="<?php echo $tampilsiswa['dosis'];?>" /></td>
        </tr>
      <tr>
        <td height="28">JUMLAH</td>
          <td>:</td>
          <td><input type="text" name="jumlah"  size="5" required="required" value="<?php echo $tampilsiswa['jumlah'];?>" /></td>
        </tr>
      <tr>
        <td style="padding-left:1px;">KODE OBAT</td>
        <td>:</td>
		<td><select name="obat">
		<?php while ($obat=mysql_fetch_array($query1)) {
			echo "<option>$obat[kodeobat]</option>";
		}?>
		</select>
		</td>
		</tr>
      <tr>
        <td style="padding-left:1px;">NO PEMERIKSAAN</td>
        <td>:</td>
		<td><select name="pemeriksaan">
		<?php while ($pemeriksaan=mysql_fetch_array($query2)) {
			echo "<option>$pemeriksaan[nopemeriksaan]</option>";
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
