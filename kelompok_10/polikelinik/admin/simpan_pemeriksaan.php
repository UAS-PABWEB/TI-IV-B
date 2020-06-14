<?php
include "koneksi.php";
$nopemeriksaan=$_POST['nopemeriksaan'];
$keluhan=$_POST['keluhan'];
$diagnosa=$_POST['diagnosa'];
$perawatan=$_POST['perawatan'];
$tindakan=$_POST['tindakan'];
$beratbadan=$_POST['beratbadan'];
$tensidiastolik=$_POST['tensidiastolik'];
$tensisistolik=$_POST['tensisistolik'];
$pendaftaran=$_POST['pendaftaran'];


$nopendaftaran=mysql_query("SELECT nopendaftaran FROM pendaftaran WHERE nopendaftaran='$pendaftaran'");
$nopendaftaran=mysql_fetch_array($nopendaftaran);
error_reporting (E_ALL ^ E_NOTICE);
error_reporting (E_ALL ^ E_NOTICE);
if (empty($keluhan))

{	
	?><script language="javascript">alert("masukan nama pemeriksaan!");location.href="javascript:history.back()";</script><?php 
} 
else
{
	$cekdata="select nopemeriksaan from pemeriksaan where nopemeriksaan='$nopemeriksaan'";
	$ada=mysql_query($cekdata) or die(mysql_error());
	if(mysql_num_rows($ada)>0)
	{ ?><script language="javascript">alert("Kode Pemeriksaan Telah Terdaftar!");location.href="javascript:history.back()";</script><?php }
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
		mysql_query("insert into pemeriksaan(nopemeriksaan, keluhan, diagnosa, perawatan, tindakan, beratbadan, tensidiastolik, tensisistolik, nopendaftaran)values('$nopemeriksaan','$keluhan','$diagnosa','$perawatan','$tindakan','$beratbadan','$tensidiastolik','$tensisistolik','$nopendaftaran[nopendaftaran]')");
		?><script language="javascript">alert("Data berhasil di tambahkan!"); location.href="?page=data_pemeriksaan";</script><?php
	}
?>		