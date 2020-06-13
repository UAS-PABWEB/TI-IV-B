<?php
include "koneksi.php";
$idrincianbiaya=$_POST['idrincianbiaya'];
$jenisbiaya=$_POST['jenisbiaya'];
$pendaftaran=$_POST['pendaftaran'];

$idjenisbiaya=mysql_query("SELECT idjenisbiaya FROM jenisbiaya WHERE idjenisbiaya='$jenisbiaya'");
$idjenisbiaya=mysql_fetch_array($idjenisbiaya);
error_reporting (E_ALL ^ E_NOTICE);

$nopendaftaran=mysql_query("SELECT nopendaftaran FROM pendaftaran WHERE nopendaftaran='$pendaftaran'");
$nopendaftaran=mysql_fetch_array($nopendaftaran);
error_reporting (E_ALL ^ E_NOTICE);
error_reporting (E_ALL ^ E_NOTICE);
if (empty($idrincianbiaya))

{	
	?><script language="javascript">alert("masukan nama Rincian Biaya!");location.href="javascript:history.back()";</script><?php 
} 
else
{
	$cekdata="select idrincianbiaya from rincianbiaya where idrincianbiaya='$idrincianbiaya'";
	$ada=mysql_query($cekdata) or die(mysql_error());
	if(mysql_num_rows($ada)>0)
	{ ?><script language="javascript">alert("Kode Rincian Biaya Telah Terdaftar!");location.href="javascript:history.back()";</script><?php }
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
		mysql_query("insert into rincianbiaya(idrincianbiaya, idjenisbiaya, nopendaftaran)values('$idrincianbiaya','$idjenisbiaya[idjenisbiaya]','$nopendaftaran[nopendaftaran]')");
		?><script language="javascript">alert("Data berhasil di tambahkan!"); location.href="?page=data_rincianbiaya";</script><?php
	}
?>		