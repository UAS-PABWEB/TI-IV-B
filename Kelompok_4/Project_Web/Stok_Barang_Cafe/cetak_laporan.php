<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA STOK BARANG CAFE</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN STOK BARANG</h2>
		<h4>Laporan oleh admin</h4>
 
	</center>
 
	<?php 
	include 'config/database.php';
	?>
 
	<table border="1" align="center">
		<tr>
            <th>No.</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jenis</th>
            <th>Merk</th>
            <th>Harga</th>
            <th>Tgl Masuk</th>
            <th>Deskripsi</th>
            <th>Stok</th>
		</tr>

		<?php 
		$no = 1;
		$sql = mysqli_query($db,"select * from tbl_barang");
		while($data = mysqli_fetch_array($sql)){
		?>
        
		<tr>
            <td class="center">  <?php echo $no; ?></td>
            <td class="center"> <?php echo $data['id']; ?></td>
            <td class="center"> <?php echo $data['nama']; ?></td>
            <td class="center"> <?php echo $data['jenis']; ?></td>
            <td class="center"> <?php echo $data['merk']; ?></td>
            <td class="center"> <?php echo $data['harga']; ?></td>
            <td class="center"> <?php echo $data['tgl_masuk']; ?></td>
            <td class="center"> <?php echo $data['deskripsi']; ?></td>
            <td class="center">  <?php echo $data['stok']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>