<?php

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Data-pasien.xls");//ganti nama sesuai keperluan
header("Pragma: no-cache");
header("Expires: 0");
//disini script laporan anda
?>
<?php include"koneksi.php";
$data=mysql_query("SELECT *from pasien ");
$jumlah=mysql_num_rows($data);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
a:link{color:#000000;}
a:visited{color:#000000;}
a:hover{color:#000000;}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script language="javascript">
function check_all()
{
	var chk = document.getElementsByName('check_list[]');
	for (i = 0; i < chk.length; i++)
	chk[i].checked = true ;
}

function uncheck_all()
{
	var chk = document.getElementsByName('check_list[]');
	for (i = 0; i < chk.length; i++)
	chk[i].checked = false ;
}
</script>
<body>
<div style="width:700px; margin:auto;">
<div>
  <h2 align="center" style="color:#0000FF;">DATA PASIEN<br/>
  POLIKELINIK YADI</h2>
  <div style="padding-top:10px;"></div>
</div>
<form method="post" action="deleteall_pasien.php">
<?php
// Jumlah Data/ halaman yang tampilkan
$jum_hal= 25;

// 
error_reporting (E_ALL ^ E_NOTICE);
if($_REQUEST['hal']==0|| empty($_REQUEST['hal']))
{
	$mulai = 0;
	$halaman = 1;
}
else 
{
	$mulai = ($jum_hal * $_REQUEST['hal'])- $jum_hal ;
	$halaman = $_REQUEST['hal'];
}

?>
<?php
	
//Jumlah data yang di database
$jum_data = mysql_num_rows(mysql_query("SELECT * FROM pasien "));
$jum_page = ceil($jum_data / $jum_hal);

//Atur halaman berikutnya
$next = $halaman+1;
//Atur halaman sebelumnya
$back = $halaman-1;

//tampilkan tombol back / sebelumnya
if ($halaman>1)
{
	echo "<a href='index.php?page=data_pasien&hal=$back'>Back</a> ";
}

// Tampilkan data halaman 
echo " $halaman / $jum_page Halaman  ";

//tampilkan tombol next / berikutnya
if ($halaman<$jum_page)
{
	echo "<a href='index.php?page=data_pasien&hal=$next'>Next</a>";
}

?>
<div style="padding-top:10px; padding-bottom:5px;">
  <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border:#8fb041 1px solid;">
    <tr>
      <td><table width="100%" cellspacing="1" cellpadding="3" ><tr bgcolor="#009b4c" style="font-weight:bold; font-size:13px;color:#FFFFFF" align="center" ><td width="9%"><table width="100%" cellspacing="1" cellpadding="3" >
        <tr bgcolor="#8fb041" style="font-weight:bold; font-size:13px;color:#FFFFFF" align="center" >
          <td width="4%" bgcolor="#009b4c">NO</td>
          <td width="8%" height="30" bgcolor="#009b4c">NO PASIEN</td>
          <td width="11%" bgcolor="#009b4c">NAMA PASIEN</td>
          <td width="12%" bgcolor="#009b4c">ALAMAT PASIEN</td>
          <td width="9%" bgcolor="#009b4c">TELEPON PASIEN</td>
          <td width="10%" bgcolor="#009b4c">TANGGAL LAHIR PASIEN</td>
		  <td width="10%" bgcolor="#009b4c">JENIS KELAMIN PASIEN</td>
		   <td width="10%" bgcolor="#009b4c">TANGGAL REGISTRASI</td>
          </tr>
        <?php
	if ((isset($_POST['submit'])) AND ($_POST['search'] <> ""))
{
	$search = $_POST['search'];
	$sql1 = mysql_query("SELECT * FROM pasien LIKE '%$search%'") or die(mysql_error());
	}
	else{
	$sql1 = mysql_query("SELECT * FROM pasien  order by nopasien asc LIMIT $mulai,$jum_hal");
	}
	$jumlah1 = mysql_num_rows($sql1);
	{
	$no=0;
	while ($tampil = mysql_fetch_array($sql1)){
	
	?>
  <tr><td align="center" bgcolor="#ffffff"><?php echo $no=$no+1;?></td>
    <td align="center" bgcolor="#ffffff"><?php echo $tampil['nopasien']?></td>
    <td align="center" bgcolor="#ffffff"><a href=""><?php echo $tampil['namapas']?></a></td>
    <td align="center" bgcolor="#ffffff"><?php echo $tampil['almpas'];?></td>
    <td align="center" bgcolor="#ffffff"><?php echo $tampil['telppas'];?></td>
    <td align="center" bgcolor="#ffffff"><?php echo $tampil['tgllahirpas'];?></td>
	<td align="center" bgcolor="#ffffff"><?php echo $tampil['jeniskelpas'];?></td>
	<td align="center" bgcolor="#ffffff"><?php echo $tampil['tglregistrasi'];?></td>
     </tr>
  <?php
  }
}
  ?>
      </table></td>
          </tr>
      </table></td>
    </tr>
  </table>
</div>
</form>
</div>
</body>
</html>
