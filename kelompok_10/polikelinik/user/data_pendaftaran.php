<?php
error_reporting(0);
$data=mysql_query("select * from pendaftaran order by nopendaftaran");
$jumlah=mysql_num_rows($data);
?>
<html>
<head>
<link href="style/styleku.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Pendaftaran</title>
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
<div style="width:800px; margin:auto;">
<div>
  <h1 align="center" style="color:#79d54b;"><strong>DATA PENDAFTARAN</strong></h1>
  <p align="center" style="color:#79d54b;"><strong>POLIKELINIK</strong></p>
  <div style="padding-top:20px;"><form name="cari" method="post" action="?page=data_pendaftaran" id="form1"><table width="100%">
  <tr>
    <td width="32%"><input type="text" name="search" id="search" value="Cari No Pendaftaran" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;"/>
    <input type="submit" name="submit" value="CARI"/></td>
    <td width="40%"><a href="?page=data_pendaftaran" title="refresh">[Refresh]</a>&nbsp;&nbsp;<a href="simpanpendaftaranxls.php">[Save to.excel]</a></td>
    <td width="9%">&nbsp;</td>
  </tr>
</table>
</form>
</div>
</div>
<form method="post" action="?page=deleteall_pendaftaran">
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

	
//Jumlah data yang di database
$jum_data = mysql_num_rows(mysql_query("SELECT * FROM pendaftaran"));
$jum_page = ceil($jum_data / $jum_hal);

//Atur halaman berikutnya
$next = $halaman+1;
//Atur halaman sebelumnya
$back = $halaman-1;

//tampilkan tombol back / sebelumnya
if ($halaman>1)
{
	echo "<a href='index.php?page=data_pendaftaran&hal=$back'>Back</a>";
}

// Tampilkan data halaman 
echo " $halaman / $jum_page Halaman  ";

//tampilkan tombol next / berikutnya
if ($halaman<$jum_page)
{
	echo "<a href='index.php?page=data_pendaftaran&hal=$next'>Next</a>";
}

?>
<div style="padding-top:10px; padding-bottom:5px;">
  <table width="99%" border="0" cellpadding="0" cellspacing="0" style="border:#8fb041 1px solid;">
    <tr>
      <td height="64"><table width="100%" height="74" cellpadding="2" cellspacing="1">
        <tr bgcolor="#59cd67" style="font-weight:bold; font-size:15px;color:#FFFFFF" align="center">
       <td width="4%" height="42">&nbsp;</td>
         <td width="4%">NO</td>
          <td width="17%" height="42">NO PENDAFTARAN</td>
          <td width="26%">TGL PENDAFTARAN</td>
          <td width="20%">NO URUT</td>
		    <td width="15%">NIP</td>
          <td width="25%">NO PASIEN</td>
		  <td width="25%">KODE JADWAL</td>
           <td colspan="2" align="center">AKSI</td>
          </tr>
  
        <?php
error_reporting(0);
	if ((isset($_POST['submit'])) AND ($_POST['search'] <> ""))
{
	$search = $_POST['search'];
	$sql1 = mysql_query("SELECT * FROM pendaftaran WHERE nopendaftaran LIKE '%$search%'")or die(mysql_error());
	}
	else{
	$sql1 = mysql_query("SELECT * FROM pendaftaran  order by nopendaftaran asc LIMIT $mulai,$jum_hal");
	}
	$jumlah1 = mysql_num_rows($sql1);
	{
	$no=0;
	while ($tampil = mysql_fetch_array($sql1)){
	
	?>
      <tr bgcolor="#CCCCCC"><td height="27" align="center"><input type="checkbox" name="check_list[]" value="<?php echo $tampil['nopendaftaran'];?>"/></td>
       <td><div align="center"><?php echo $no=$no+1;?></td>
       
          <td align="center"><?php echo $tampil['nopendaftaran']?></td>
          <td align="center"><a href="?page=detail_pendaftaran&nopendaftaran=<?php echo $tampil['nopendaftaran'];?>"><?php echo $tampil['tglpendaftaran']?></a></td>
          <td align="center"><?php echo $tampil['nourut'];?></td>
		     <td align="center"><?php echo $tampil['NIP'];?></td>
			 <td align="center"><?php echo $tampil['nopasien'];?></td>
			 <td align="center"><?php echo $tampil['kodejadwal'];?></td>
          <td width="6%"><div align="center"><a href="?page=detail_pendaftaran&nopendaftaran=<?php echo $tampil['nopendaftaran'];?>">Detail</a></div></td>
          
          </tr>
        <?php
  }
}
  ?>
      </table></td>
    </tr>
  </table>
</div>
<table width="100%" cellpadding="3" cellspacing="1">
    <tr>
      
        &nbsp;&nbsp;&nbsp;&nbsp;<?php 
	if($jumlah1 > 0)
  {
  echo "Di tampilkan $jumlah1 dari $jumlah data Pendaftaran ";
  }
  else{ if($jumlah==0)
  {echo"terdapat $jumlah1 dari $jumlah data  Pendaftaran ";
  }
  else{echo ("data yang anda cari tidak di temukan....");
  }
  }?></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>