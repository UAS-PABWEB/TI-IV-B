<?php
include "koneksi.php";
$kodedokter=$_POST['kodedokter'];
$nmdokter=$_POST['nmdokter'];
$almdokter=$_POST['almdokter'];
$tlpdokter=$_POST['tlpdokter'];
$polikelinik=$_POST['polikelinik'];

$kodepoll=mysql_query("SELECT kodepoll from polikelinik where kodepoll='$polikelinik'");
$kodepoll=mysql_fetch_array($kodepoll);
error_reporting (E_ALL ^ E_NOTICE);
error_reporting (E_ALL ^ E_NOTICE);
if (empty($nmdokter))

{	
	?><script language="javascript">alert("masukan nama!");location.href="javascript:history.back()";</script><?php 
} 
else
{
	$cekdata="select kodedokter from dokter where kodedokter='$kodedokter'";
	$ada=mysql_query($cekdata) or die(mysql_error());
	if(mysql_num_rows($ada)>0)
	{ ?><script language="javascript">alert("Kode Dokter Telah Terdaftar!");location.href="javascript:history.back()";</script><?php }
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
		mysql_query("insert into dokter(kodedokter, nmdokter, almdokter, tlpdokter, kodepoll)values('$kodedokter','$nmdokter','$almdokter','$tlpdokter','$kodepoll[kodepoll]')");
		?><script language="javascript">alert("Data berhasil di tambahkan!"); location.href="?page=data_dokter";</script><?php
	}
?>		