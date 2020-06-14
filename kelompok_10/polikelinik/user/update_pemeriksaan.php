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


if (empty($keluhan))
{	
	?><script language="javascript">alert("Data belum Lengkap!");location.href="javascript:history.back()";</script><?php 
} 
else
{
	if (!empty($_FILES["photo"]["tmp_name"]))
	{
		$namafolder="../anggota/photo/";
		$jenis_gambar=$_FILES['photo']['type'];
		if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png" || $jenis_gambar=="image/bmp")
		{           
			$photo = $namafolder . basename($_FILES['photo']['name']);       
			if (!move_uploaded_file($_FILES['photo']['tmp_name'], $photo)) 
			{
			   die("Gambar gagal dikirim");
			}
			//Hapus photo yang lama jika ada
			$res = mysql_query();
			$d=mysql_fetch_object($res);
			if (strlen($d->photo)>3)
			{
				if (file_exists($d->photo)) unlink($d->photo);
			}					
			mysql_query("UPDATE pemeriksaan WHERE nopemeriksaan='$nopemeriksaan' LIMIT 1");
		} 
		else { ?><script language="javascript">alert("Jenis gambar yang anda kirim salah. Harus .jpg .gif .png, image sementara akan di kosongkan");location.href="index.php?page=data_pemeriksaan";</script><?php }
	}
	$masukan=mysql_query("UPDATE pemeriksaan SET nopemeriksaan='$nopemeriksaan',keluhan='$keluhan', diagnosa='$diagnosa',  perawatan='$perawatan', tindakan='$tindakan', beratbadan='$beratbadan', tensidiastolik='$tensidiastolik', tensisistolik='$tensisistolik', nopendaftaran='$nopendaftaran'WHERE nopemeriksaan='$nopemeriksaan'");
	if($masukan){
		?><script language="javascript">alert("Data berhasil di ubah !"); location.href="?page=data_pemeriksaan";</script><?php
		}else
		{
		?><script language="javascript">alert("GAGAL di Ubah !"); location.href="javascript:history.back()";</script><?php
		}

   
	exit;
}		
?>