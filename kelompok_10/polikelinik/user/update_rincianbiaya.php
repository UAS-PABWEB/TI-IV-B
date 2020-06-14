<?php
include "koneksi.php";
$idrincianbiaya=$_POST['idrincianbiaya'];
$jenisbiaya=$_POST['jenisbiaya'];
$pendaftaran=$_POST['pendaftaran'];

$idjenisbiaya=mysql_query("select idjenisbiaya from jenisbiaya where idjenisbiaya='$jenisbiaya'");
$idjenisbiaya=mysql_fetch_array($idjenisbiaya);
$nopendaftaran=mysql_query("select nopendaftaran from pendaftaran where nopendaftaran='$pendaftaran'");
$nopendaftaran=mysql_fetch_array($nopendaftaran);
if (empty($idrincianbiaya))
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
			mysql_query("UPDATE rincianbiaya WHERE idrincianbiaya='$idrincianbiaya' LIMIT 1");
		} 
		else { ?><script language="javascript">alert("Jenis gambar yang anda kirim salah. Harus .jpg .gif .png, image sementara akan di kosongkan");location.href="index.php?page=data_rincianbiaya";</script><?php }
	}
	$masukan=mysql_query("UPDATE rincianbiaya SET idrincianbiaya='$idrincianbiaya', idjenisbiaya='$idjenisbiaya[idjenisbiaya]',nopendaftaran='$nopendaftaran[nopendaftaran]' WHERE idrincianbiaya='$idrincianbiaya'");
	if($masukan){
		?><script language="javascript">alert("Data berhasil di ubah !"); location.href="?page=data_rincianbiaya";</script><?php
		}else
		{
		?><script language="javascript">alert("GAGAL di Ubah !"); location.href="javascript:history.back()";</script><?php
		}

   
	exit;
}		
?>