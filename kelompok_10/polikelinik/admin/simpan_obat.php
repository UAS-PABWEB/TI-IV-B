<?php
include "koneksi.php";
$kodeobat=$_POST['kodeobat'];
$nmobat=$_POST['nmobat'];
$merk=$_POST['merk'];
$satuan=$_POST['satuan'];
$hargajual=$_POST['hargajual'];

error_reporting (E_ALL ^ E_NOTICE);
if (empty($nmobat))

{	
	?><script language="javascript">alert("masukan nama!");location.href="javascript:history.back()";</script><?php 
} 
else
{
	$cekdata="select kodeobat from obat where kodeobat='$kodeobat'";
	$ada=mysql_query($cekdata) or die(mysql_error());
	if(mysql_num_rows($ada)>0)
	{ ?><script language="javascript">alert("Kode Obat Telah Terdaftar!");location.href="javascript:history.back()";</script><?php }
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
		mysql_query("insert into obat(kodeobat, nmobat, merk, satuan, hargajual)values('$kodeobat','$nmobat','$merk','$satuan','$hargajual')");
		?><script language="javascript">alert("Data berhasil di tambahkan!"); location.href="?page=data_obat";</script><?php
	}
?>		