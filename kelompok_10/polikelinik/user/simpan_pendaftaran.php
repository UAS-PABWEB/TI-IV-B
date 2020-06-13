<?php
include "koneksi.php";
$nopendaftaran=$_POST['nopendaftaran'];
$tglpendaftaran=$_POST['tglpendaftaran'];
$nourut=$_POST['nourut'];
$pegawai=$_POST['pegawai'];
$pasien=$_POST['pasien'];
$jadwalpraktek=$_POST['jadwalpraktek'];

$NIP=mysql_query("SELECT NIP FROM pegawai WHERE NIP='$pegawai'");
$NIP=mysql_fetch_array($NIP);

$nopasien=mysql_query("SELECT nopasien FROM pasien WHERE nopasien='$pasien'");
$nopasien=mysql_fetch_array($nopasien);

$kodejadwal=mysql_query("SELECT kodejadwal FROM jadwalpraktek WHERE kodejadwal='$jadwalpraktek'");
$kodejadwal=mysql_fetch_array($kodejadwal);
error_reporting (E_ALL ^ E_NOTICE);
error_reporting (E_ALL ^ E_NOTICE);
if (empty($nopendaftaran))

{	
	?><script language="javascript">alert("masukan nama pendaftaran!");location.href="javascript:history.back()";</script><?php 
} 
else
{
	$cekdata="select nopendaftaran from pendaftaran where nopendaftaran='$nopendaftaran'";
	$ada=mysql_query($cekdata) or die(mysql_error());
	if(mysql_num_rows($ada)>0)
	{ ?><script language="javascript">alert("Kode Pendaftaran Telah Terdaftar!");location.href="javascript:history.back()";</script><?php }
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
		mysql_query("insert into pendaftaran(nopendaftaran, tglpendaftaran, nourut, NIP, nopasien, kodejadwal)values('$nopendaftaran','$tglpendaftaran','$nourut','$NIP[NIP]','$nopasien[nopasien]','$kodejadwal[kodejadwal]')");
		?><script language="javascript">alert("Data berhasil di tambahkan!"); location.href="?page=data_pendaftaran";</script><?php
	}
?>		