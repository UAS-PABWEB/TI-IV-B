<?php
include "koneksi.php";
$nopasien=$_POST['nopasien'];
$namapas=$_POST['namapas'];
$almpas=$_POST['almpas'];
$telppas=$_POST['telppas'];
$tgllahirpas=$_POST['tgllahirpas'];
$jeniskelpas=$_POST['jeniskelpas'];
$tglregistrasi=$_POST['tglregistrasi'];

error_reporting (E_ALL ^ E_NOTICE);
if (empty($nopasien))

{	
	?><script language="javascript">alert("masukan nama!");location.href="javascript:history.back()";</script><?php 
} 
else
{
	$cekdata="select nopasien from pasien where nopasien='$nopasien'";
	$ada=mysql_query($cekdata) or die(mysql_error());
	if(mysql_num_rows($ada)>0)
	{ ?><script language="javascript">alert("Kode pasien Telah Terdaftar!");location.href="javascript:history.back()";</script><?php }
if (!empty($_FILES["photo"]["tmp_name"]))
				{
			$namafolder="photo/";  //tempat menyimpan file
    $jenis_gambar=$_FILES['photo']['type'];
    if($jenis_gambar=="image/jpeg"  || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif"  || $jenis_gambar=="image/png")
    {          
  $photo  = $namafolder . basename($_FILES['photo']['name']);      
  if  (!move_uploaded_file($_FILES['photo']['tmp_name'], $photo))
  { die("Gambar gagal dikirim"); }
    } else  { die("Jenis gambar yang anda kirim salah. Harus .jpg .gif .png"); }
			}
		mysql_query("insert into pasien(nopasien, namapas, almpas, telppas, tgllahirpas, jeniskelpas, tglregistrasi)values('$nopasien','$namapas','$almpas','$telppas','$tgllahirpas','$jeniskelpas','$tglregistrasi')");
		?><script language="javascript">alert("Data berhasil di tambahkan!"); location.href="?page=data_pasien";</script><?php
	}
?>		