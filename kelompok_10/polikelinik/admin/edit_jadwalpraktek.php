<?php
error_reporting (0);
$query1=mysql_query ("SELECT kodedokter from dokter");
$kodejadwal=$_GET['kodejadwal'];
$qryanggota=mysql_query("select * from jadwalpraktek where kodejadwal='$kodejadwal'");
$tampilsiswa=mysql_fetch_array($qryanggota);
?>
<html>
<head>
<title>EDIT JADWAL PRAKTEK</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form name="frmeditadmin" action="?page=update_jadwalpraktek" method="post">
  <div align="center">
    <table width="120%" align="center" cellpadding="3" cellspacing="0">
      <tr>
        <td height="50" colspan="4" style="color:#blue; font-size:24px;"><div align="center"><strong>SUNTING DATA JADWAL PRAKTEK</strong></div></td>
        </tr>
      <tr>
        <td height="28">KODE JADWAL</td>
          <td>:</td>
          <td><input name="kodejadwal"  size="5" type="text" required="required" value="<?php echo $tampilsiswa['kodejadwal'];?>"  /></td>
        </tr>
      
      <tr>
        <td width="177" height="28">HARI</td>
          <td width="12">:</td>
          <td width="462"><input type="text" name="hari" required="required" size="10" value="<?php echo $tampilsiswa['hari'];?>" /></td>
        </tr>
      <tr>
        <td height="28">JAM MULAI</td>
          <td>:</td>
          <td><input type="time" name="jammulai"  size="60" required="required" value="<?php echo $tampilsiswa['jammulai'];?>" /></td>
        </tr>
      <tr>
        <td height="28">JAM SELESAI</td>
          <td>:</td>
          <td><input type="time" name="jamselesai"  size="60" required="required" value="<?php echo $tampilsiswa['jamselesai'];?>" /></td>
        </tr>
 <tr>
 <td style="padding-left:1px;">KODE DOKTER</td>
        <td>:</td>
        <td><select name="dokter">
		<?php while ($dokter=mysql_fetch_array($query1)){
				echo "<option>$dokter[kodedokter]</option>";
		}?>
		</select>
		</td>
		  </tr>     
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
