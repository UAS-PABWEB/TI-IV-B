<?php
session_start();
mysql_connect("localhost","root","") or die("Tidak ada koneksi");
mysql_select_db("data_inventaris");

$username = $_POST['username'];
$password = $_POST['password'];

//cek data yang dikirim, apakah kosong atau tidak
if (empty($username) && empty($password)) {
  //kalau username dan password kosong
  header('location:login.php?error=1');
  exit;
} else if (empty($username)) {
  //kalau username saja yang kosong
  header('location:login.php?error=2');
  exit;
} else if (empty($password)) {
  //kalau password saja yang kosong
  header('location:login.php?error=3');
  exit;
}
# LOGIN CEK KE TABEL USER LOGIN
    $query = mysql_query("select * from admin where username='$username' and password='$password'");
    $cek=mysql_num_rows($query);
    $row=mysql_fetch_array($query);
    # JIKA LOGIN SUKSES
    if($cek  >= 1) {
      // Menyimpan Kode yang Login
      $_SESSION['ID_LOGIN'] = $query['id_admin']; 
      $_SESSION['NAMA_LOGIN'] = $query['username']; 
        $_SESSION['LEVEL_LOGIN'] = $query['level']; 
      
       header("Location:admin/index.php");
} else {
  //kalau username ataupun password tidak terdaftar di database
  header('location:login.php?error=4');
}

$op = $_GET['op'];

if($op=="in"){
$cek = mysql_query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
if(mysql_num_rows($cek)==1){
$c = mysql_fetch_array($cek);
$_SESSION['username'] = $c['username'];
$_SESSION['level'] = $c['level'];
if($c['level']=="admin"){
header("location:admin/index.php");
}else if($c['level']=="user"){
header("location:user/index.php");
}else if($c['level']=="atasan"){
header("location:admin/index2.php");
}
}else{
die("password salah <a href=\"javascript:history.back()\">kembali>");
}
}else if($op=="out"){
unset($_SESSION['username']);
unset($_SESSION['nilai_siswa']);
header("location:admin/index.php");
}
?>