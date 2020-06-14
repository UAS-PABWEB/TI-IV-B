<?php
include "koneksi.php";
$kodejadwal=$_POST['kodejadwal'];
$hari=$_POST['hari'];
$jammulai=$_POST['jammulai'];
$jamselesai=$_POST['jamselesai'];
$dokter=$_POST['dokter'];

$kodedokter=mysql_query("SELECT kodedokter FROM dokter WHERE kodedokter='$dokter'");
$kodedokter=mysql_fetch_array($kodedokter);
error_reporting (E_ALL ^ E_NOTICE);
error_reporting (E_ALL ^ E_NOTICE);
if (empty($hari))

{	
	?><script language="javascript">alert("masukan nama jadwalpraktek!");location.href="javascript:history.back()";</script><?php 
} 
else
{
	$cekdata="select kodejadwal from jadwalpraktek where kodejadwal='$kodejadwal'";
	$ada=mysql_query($cekdata) or die(mysql_error());
	if(mysql_num_rows($ada)>0)
	{ ?><script language="javascript">alert("Kode Jadwalpraktek Telah Terdaftar!");location.href="javascript:history.back()";</script><?php }
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
		mysql_query("insert into jadwalpraktek(kodejadwal, hari, jammulai, jamselesai, kodedokter)values('$kodejadwal','$hari','$jammulai','$jamselesai','$kodedokter[kodedokter]')");
		?><script language="javascript">alert("Data berhasil di tambahkan!"); location.href="?page=data_jadwalpraktek";</script><?php
	}
?>		