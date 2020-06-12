<!DOCTYPE html>
<html>
<head>
<style type="text/css">
<!--
.style2 {
	color: #0099CC;
	font-weight: bold;
}
.style3 {color: #000000; font-family: Arial, Helvetica, sans-serif;}
-->
</style>
<body>
<script type="text/javascript">
	$(document).ready(function  () {
			$('#close').click(function 	 () {
				$('#info').fadeOut()
			})
	})
</script>
<section id="top"></section>
<div class="text-left">
<div id="info" class="alert alert-info">
<div class="pull-right style2">
</div>
<h2 align="center"> <span class="style3">APLIKASI SARANA &amp; PRASARANA SEKOLAH</span></h2>

</div>
<div id="slider-wrapper">
	<div class="col-xs-6 up">
	<?php
mysql_connect('localhost', 'root', '');
mysql_select_db('data_inventaris');
 
 // Menampilkan Jumlah Data Supplier
$table_supplier = "supplier";
$supplier = "SELECT * FROM $table_supplier";
$data_supplier = mysql_query($supplier);
$jml_supplier = mysql_num_rows($data_supplier);

 // Menampilkan Jumlah Data Barang
$table_barang = "barang";
$barang = "SELECT * FROM $table_barang";
$data_barang = mysql_query($barang);
$jml_barang = mysql_num_rows($data_barang);

 // Menampilkan Jumlah Data Stok
$table_stok = "stok";
$stok = "SELECT * FROM $table_stok";
$data_stok = mysql_query($stok);
$jml_stok = mysql_num_rows($data_stok);

 // Menampilkan Jumlah Data Admin 
$table_admin = "admin";
$admin = "SELECT * FROM $table_admin";
$data_admin = mysql_query($admin);
$jml_admin = mysql_num_rows($data_admin);
?>
		<div class="panel panel-info">
			<div class="panel-heading">
				<i class="fa fa-users fa-5x"></i>
				<div class="pull-right">
					<h1><?php echo $jml_supplier;?></h1>
				</div>
				<br>
				<span>
					Jumlah Data Supplier
				</span>
				
			</div>
			<a href="?page=supplier/data_supplier">
					<div class="panel-footer text-right">
						Lihat Detail <i class="fa fa-forward"></i>
					</div>
		  </a>
		</div>
	</div>
    <div class="col-xs-6 up">
		<div class="panel panel-warning">
			<div class="panel-heading">
				<i class="fa fa-book fa-5x"></i>
				<div class="pull-right">
					<h1><?php echo $jml_stok;?></h1>
				</div>
				<br>
				<span>
					Jumlah Data Stok				</span>
				
			</div>
			<a class="up" href="?page=stok/data_stok"  >
					<div class="panel-footer text-right">
						Lihat Detail <i class="fa fa-forward"></i>
					</div>
		  </a>
		</div>
	</div>
    
	<div class="col-xs-6 up">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<i class="fa fa-user fa-5x"></i>
				<div class="pull-right">
					<h1><?php echo $jml_barang;?></h1>
				</div>
				<br>
				<span>
					Jumlah Data Barang
				</span>
				
			</div>
			<a  class="up" href="?page=barang/data_barang">
					<div class="panel-footer text-right">
						Lihat Detail <i class="fa fa-forward"></i>
					</div>
		  </a>
		</div>
	</div>
	
	<div class="col-xs-6 up">
		<div class="panel panel-success">
			<div class="panel-heading">
				<i class="fa fa-dollar fa-5x"></i>
				<div class="pull-right">
					<h1><?php echo $jml_admin;?></h1>
				</div>
				<br>
				<span>
					Jumlah Data admin
				</span>
				
			</div>
			<a class="up" href="?page=data_admin"  >
					<div class="panel-footer text-right">
						Lihat Detail <i class="fa fa-forward"></i>
					</div>
		  </a>
		</div>

	</div>
	
				
  </div>
</div>
</body>
</head>
</html>