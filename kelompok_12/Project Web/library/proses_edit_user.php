<?php 
 
include 'koneksi.php';
if(isset($_POST['ttambah'])){ //['ttambah'] merupakan name dari button di form tambah
$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_user = $_POST['nama_user'];
 
$sql	= 'insert into siswa (id_user,namausername,password,nama_user) values ("'.$id_user.'","'.$username.'","'.$password.'","'.$nama_user.'")';
	$query	= mysqli_query($perpus1,$sql);
	
	if($query){
		header('location: admin.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		echo 'Gagal';
	}
}
?>