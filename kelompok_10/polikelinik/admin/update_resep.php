<?php
include "koneksi.php";
$noresep=$_POST['noresep'];
$dosis=$_POST['dosis'];
$jumlah=$_POST['jumlah'];
$obat=$_POST['obat'];
$pemeriksaan=$_POST['pemeriksaan'];

$kodeobat=mysql_query("select kodeobat from obat where kodeobat='$obat'");
$kodeobat=mysql_fetch_array($kodeobat);
$nopemeriksaan=mysql_query("select nopemeriksaan from pemeriksaan where nopemeriksaan='$pemeriksaan'");
$nopemeriksaan=mysql_fetch_array($nopemeriksaan);


if (empty($dosis))
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
			mysql_query("UPDATE resep WHERE noresep='$noresep' LIMIT 1");
		} 
		else { ?><script language="javascript">alert("Jenis gambar yang anda kirim salah. Harus .jpg .gif .png, image sementara akan di kosongkan");location.href="index.php?page=data_resep";</script><?php }
	}
	$masukan=mysql_query("UPDATE resep SET noresep='$noresep',jumlah='$jumlah', kodeobat='$kodeobat[kodeobat]', nopemeriksaan='$nopemeriksaan[nopemeriksaan]' WHERE noresep='$noresep'");
	if($masukan){
		?><script language="javascript">alert("Data berhasil di ubah !"); location.href="?page=data_resep";</script><?php
		}else
		{
		?><script language="javascript">alert("GAGAL di Ubah !"); location.href="javascript:history.back()";</script><?php
		}

   
	exit;
}		
?>