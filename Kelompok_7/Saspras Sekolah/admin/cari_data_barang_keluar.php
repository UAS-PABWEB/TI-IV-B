<?php include('koneksi.php'); error_reporting(0);
?>
<header class="panel-heading">
 <h3 align="center"> CARI DATA BERDASARKAN</h3><br></HEADER>
<form action="" method="post">
 <select name="cari_data_barang_keluar">
<option value="id_brg_keluar">ID BARANG KELUAR
<option value="kode_barang">KODE BARANG
<option value="nama_barang">NAMA BARANG
<option value="tgl_keluar">TANGGAL KELUAR
<option value="penerima">PENERIMA
<option value="jml_brg_keluar">JUMLAH BARANG KELUAR
<option value="keperluan">KEPERLUAN

</select>
<input type="text" name="query" size="30"/>
<input type="submit" name="submit" value="Cari" />
</form><br><br>
<?php include('cari_kode_data_barang_keluar.php'); ?>