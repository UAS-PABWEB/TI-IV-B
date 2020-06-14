<?php
error_reporting(0);
$query1=mysql_query ("SELECT nopendaftaran from pendaftaran");
$nopemeriksaan=$_GET['nopemeriksaan'];
$qryanggota=mysql_query("select * from pemeriksaan where nopemeriksaan='$nopemeriksaan'");
$tampilsiswa=mysql_fetch_array($qryanggota);
?>
<html>
<head>
<title>EDIT PEMERIKSAAN</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form name="frmeditadmin" action="?page=update_pemeriksaan" method="post">
  <div align="center">
    <table width="120%" align="center" cellpadding="3" cellspacing="0">
      <tr>
        <td height="50" colspan="4" style="color:#blue; font-size:24px;"><div align="center"><strong>SUNTING DATA PEMERIKSAAN</strong></div></td>
        </tr>
       <tr>
        <td height="28">NO PEMERIKSAAN</td>
          <td>:</td>
          <td><input name="nopemeriksaan"  size="5" type="text" required="required" value="<?php echo $tampilsiswa['nopemeriksaan'];?>"  /></td>
        </tr>
      
      <tr>
        <td width="177" height="28">KELUHAN</td>
          <td width="12">:</td>
          <td width="462"><input type="text" name="keluhan" required="required" size="15" value="<?php echo $tampilsiswa['keluhan'];?>" /></td>
        </tr>
      <tr>
        <td height="28">DIAGNOSA</td>
          <td>:</td>
          <td><input type="text" name="diagnosa"  size="15" required="required" value="<?php echo $tampilsiswa['diagnosa'];?>" /></td>
        </tr>
      <tr>
        <td height="28">PERAWATAN</td>
          <td>:</td>
          <td><input type="text" name="perawatan"  size="15" required="required" value="<?php echo $tampilsiswa['perawatan'];?>" /></td>
        </tr>
      <tr>
        <td height="28">TINDAKAN</td>
          <td>:</td>
           <td><input type="text" name="tindakan"  size="15" required="required" value="<?php echo $tampilsiswa['tindakan'];?>" /></td>
        </tr>
		<tr>
        <td height="28">BERAT BADAN</td>
          <td>:</td>
           <td><input type="text" name="beratbadan"  size="10" required="required" value="<?php echo $tampilsiswa['beratbadan'];?>" /></td>
        </tr>
		<tr>
        <td height="28">TENSIDIASTOLIK</td>
          <td>:</td>
           <td><input type="text" name="tensidiastolik"  size="10" required="required" value="<?php echo $tampilsiswa['tensidiastolik'];?>" /></td>
        </tr>
		<tr>
        <td height="28">TENSISISTOLIK</td>
          <td>:</td>
           <td><input type="text" name="tensisistolik"  size="10" required="required" value="<?php echo $tampilsiswa['tensisistolik'];?>" /></td>
        </tr>
		<tr>
        <td style="padding-left:1px;">NO PENDAFTARAN</td>
        <td>:</td>
		<td><select name="pendaftaran">
		<?php while ($pendaftaran=mysql_fetch_array($query1)) {
			echo "<option>$pendaftaran[nopendaftaran]</option>";
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
