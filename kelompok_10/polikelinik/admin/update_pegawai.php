<?php

include "koneksi.php";

$NIP=$_POST['NIP'];
$namapeg=$_POST['namapeg'];
$almpeg=$_POST['almpeg'];
$telppeg=$_POST['telppeg'];
$tgllhrpeg=$_POST['thn']."-".$_POST['bln']."-".$_POST['tgllhrpeg'];
$jnskelpeg=$_POST['jnskelpeg'];



if (empty($namapeg))
{	
	?><script language="javascript">alert("Data belum Lengkap!");location.href="javascript:history.back()";</script><?php 
} 
else
{
	if (!empty($_FILES["photo"]["tmp_name"]))
	{
		$namafolder="../petugas/photo/";
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
			mysql_query("UPDATE pegawai WHERE NIP='$NIP' LIMIT 1");
		} 
		else { ?><script language="javascript">alert("Jenis gambar yang anda kirim salah. Harus .jpg .gif .png, image sementara akan di kosongkan");location.href="index.php?page=data_pegawai";</script><?php }
	}
	$masukan=mysql_query("UPDATE pegawai SET NIP='$NIP',namapeg	='$namapeg',almpeg='$almpeg',telppeg='$telppeg',tgllhrpeg='$tgllhrpeg',jnskelpeg='$jnskelpeg' WHERE NIP='$NIP'");
	if($masukan){
		?><script language="javascript">alert("Data berhasil di ubah !"); location.href="?page=data_pegawai";</script><?php
		}else
		{
		?><script language="javascript">alert("GAGAL di Ubah !"); location.href="javascript:history.back()";</script><?php
		}

   
	exit;
}		
?>