<?php
error_reporting(0);
//MySQL connection parameters
$dbhost = 'localhost';
$dbuser = 'root';
$dbpsw = '';
$dbname = 'dbperpus';

//Connects to mysql server
$connessione = @mysql_connect($dbhost,$dbuser,$dbpsw);

//Set encoding
mysql_query("SET CHARSET utf8");
mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");

//Includes class
require_once('FKMySQLDump.php');


//Creates a new instance of FKMySQLDump: it exports without compress and base-16 file
$dumper = new FKMySQLDump($dbname,'struktur_db.sql',false,false);

$params = array(
	//'skip_structure' => TRUE,
	'skip_data' => TRUE,
);

//Make dump
$dumper->doFKDump($params);

header("Content-Disposition: attachment; filename=struktur_db.sql");
header("Content-type: application/download");
$fp  = fopen("struktur_db.sql", 'r');
$content = fread($fp, filesize("struktur_db.sql"));
fclose($fp);

echo $content;

?>