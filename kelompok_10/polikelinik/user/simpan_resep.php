<?php
include "koneksi.php";
$noresep=$_POST['noresep'];
$dosis=$_POST['dosis'];
$jumlah=$_POST['jumlah'];
$obat=$_POST['obat'];
$pemeriksaan=$_POST['pemeriksaan'];

$kodeobat=mysql_query("SELECT kodeobat FROM obat WHERE kodeobat='$obat'");
$kodeobat=mysql_fetch_array($kodeobat);
error_reporting (E_ALL ^ E_NOTICE);

$nopemeriksaan=mysql_query("SELECT nopemeriksaan FROM pemeriksaan WHERE nopemeriksaan='$pemeriksaan'");
$nopemeriksaan=mysql_fetch_array($nopemeriksaan);
error_reporting (E_ALL ^ E_NOTICE);
error_reporting (E_ALL ^ E_NOTICE);
if (empty($dosis))

{	
	?><script language="javascript">alert("masukan nama resep!");location.href="javascript:history.back()";</script><?php 
} 
else
{
	$cekdata="select noresep from resep where noresep='$noresep'";
	$ada=mysql_query($cekdata) or die(mysql_error());
	if(mysql_num_rows($ada)>0)
	{ ?><script language="javascript">alert("Kode resep Telah Terdaftar!");location.href="javascript:history.back()";</script><?php }
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
		mysql_query("insert into resep(noresep, dosis, jumlah, jamselesai, kodedokter)values('$noresep','$hari','$jammulai','$jamselesai','$kodedokter[kodedokter]')");
		?><script language="javascript">alert("Data berhasil di tambahkan!"); location.href="?page=data_resep";</script><?php
	}
?>		