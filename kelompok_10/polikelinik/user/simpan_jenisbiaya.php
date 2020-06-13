<?php
include "koneksi.php";
$rincianbiaya=$_POST['rincianbiaya'];
$namabiaya=$_POST['namabiaya'];
$tarif=$_POST['tarif'];

$idjenisbiaya=mysql_query("SELECT idjenisbiaya FROM rincianbiaya WHERE idjenisbiaya='$rincianbiaya'");
$idjenisbiaya=mysql_fetch_array($idjenisbiaya);
error_reporting (E_ALL ^ E_NOTICE);
error_reporting (E_ALL ^ E_NOTICE);
if (empty($namabiaya))

{	
	?><script language="javascript">alert("masukan nama jenis biaya!");location.href="javascript:history.back()";</script><?php 
} 
else
{
	$cekdata="select idjenisbiaya from jenisbiaya where idjenisbiaya='$idjenisbiaya'";
	$ada=mysql_query($cekdata) or die(mysql_error());
	if(mysql_num_rows($ada)>0)
	{ ?><script language="javascript">alert("Kode Jenis Biaya Telah Terdaftar!");location.href="javascript:history.back()";</script><?php }
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
		mysql_query("insert into jenisbiaya(idjenisbiaya, namabiaya, tarif)values('$idjenisbiaya[idjenisbiaya]','$namabiaya','$tarif','$jamselesai')");
		?><script language="javascript">alert("Data berhasil di tambahkan!"); location.href="?page=data_jenisbiaya";</script><?php
	}
?>		