<?php
include ("koneksi.php");
?>
<?php
error_reporting(0);
$query1=mysql_query ("SELECT ID from petugas");
$ambil = mysql_query("SELECT MAX(ID) AS ID FROM petugas");
$tampil1 = mysql_fetch_array($ambil);
$ID=$tampil1['ID'];
$nourut = (int) substr($ID, 5, 8);
$nourut++;
$char ="Pet.";
$ID = $char . sprintf("%02s", $nourut);
?>
<html>
<head>
<title>INPUT petugas</title>
</head>
<body>
<div style="width:500px; margin:auto;">
<form action="?page=page/simpan/simpan_petugas" method="post" name="tambah" enctype="multipart/form-data">
      <table id="example2" class="table table-bordered table-hover">
      <tr>
        <td height="50" colspan="3" style="color:#034564;font-size:25px;padding-left:10px;"><div align="center">INPUT DATA PETUGAS</div></td>
      </tr>
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" style="padding-left:10px;">&nbsp;</td>
      </tr>
      <tr>
        <td width="100" style="padding-left:10px;">ID </td>
        <td width="20" >:</td>
        <td width="328"><input name="ID" type="text" placeholder="Masukan id petugas" required="required" value="<?php echo $ID ?>"/></td>
      </tr>
      <tr>
        <td style="padding-left:10px;">NAMA DEPAN</td>
        <td>:</td>
        <td><input name="NAMA_DEPAN" type="text" size="50" placeholder="Masukan nama depan petugas" required="required"/></td>
      </tr>
	    <tr>
        <td style="padding-left:10px;">NAMA BELAKANG</td>
        <td>:</td>
        <td><input name="NAMA_BELAKANG" type="text" size="50" placeholder="Masukan nama belakang petugas" required="required"/></td>
      </tr>
	  	<tr>
        <td style="padding-left:10px;">PASSWORD</td>
        <td>:</td>
        <td><input name="PASSWORD" type="text" size="50" placeholder="Masukan password petugas" required="required"/></td>
      </tr>
	   <tr> 
	     <td style="padding-left:7px;">HAK</td>
        <td>:</td>
        <td><select name="HAK" size="1" id="HAK">
          <option value="" selected>Pilih Satu</option>
          <option value="admin">Admin</option>
          <option value="user">User</option>           
        </select></td>
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
