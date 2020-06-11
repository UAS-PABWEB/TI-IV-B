<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE);
if (!empty ($_SESSION ['admin'])) {
	header ('location :admin/mat.php');
}
?>
<?php include ("mat.php"); ?></h1>