<?php
include "koneksi.php";
$nopendaftaran=$_POST['nopendaftaran'];
$tglpendaftaran=$_POST['thn']."-".$_POST['bln']."-".$_POST['tglpendaftaran'];
$nourut=$_POST['nourut'];
$pegawai=$_POST['pegawai'];
$pasien=$_POST['pasien'];
$jadwalpraktek=$_POST['jadwalpraktek'];

$NIP=mysql_query("select NIP from pegawai where NIP='$pegawai'");
$NIP=mysql_fetch_array($NIP);

$nopasien=mysql_query("select nopasien from pasien where nopasien='$pasien'");
$nopasien=mysql_fetch_array($nopasien);

$kodejadwal=mysql_query("select kodejadwal from jadwalpraktek where kodejadwal='$jadwalpraktek'");
$kodejadwal=mysql_fetch_array($kodejadwal);

if (empty($tglpendaftaran))
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
			mysql_query("UPDATE pendaftaran WHERE nopendaftaran='$nopendaftaran' LIMIT 1");
		} 
		else { ?><script language="javascript">alert("Jenis gambar yang anda kirim salah. Harus .jpg .gif .png, image sementara akan di kosongkan");location.href="index.php?page=data_pendaftaran";</script><?php }
	}
	$masukan=mysql_query("UPDATE pendaftaran SET nopendaftaran='$nopendaftaran',tglpendaftaran='$tglpendaftaran', nourut='$nourut',  NIP='$NIP[NIP]', nopasien='$nopasien[nopasien]',  kodejadwal='$kodejadwal[kodejadwal]' WHERE nopendaftaran='$nopendaftaran'");
	if($masukan){
		?><script language="javascript">alert("Data berhasil di ubah !"); location.href="?page=data_pendaftaran";</script><?php
		}else
		{
		?><script language="javascript">alert("GAGAL di Ubah !"); location.href="javascript:history.back()";</script><?php
		}

   
	exit;
}		
?>