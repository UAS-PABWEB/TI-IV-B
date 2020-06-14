<?php
// untuk mencari menuadmin di folder admin
session_start();
if (!empty ($_SESSION['username'])){
	header('location:admin/menuadmin.php');
}
?>
<?php include("login.php");?>