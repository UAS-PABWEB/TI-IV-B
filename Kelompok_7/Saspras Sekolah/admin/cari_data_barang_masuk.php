<?php include('koneksi.php'); error_reporting(0);
?>
<header class="panel-heading">
 <h3 align="center"> CARI DATA BERDASARKAN</h3><br></HEADER>
<form action="" method="post">
  <select name="cari_data_barang_masuk">
<option value="id_msk_brg">ID MASUK BARANG
<option value="kode_barang">KODE BARANG
<option value="nama_brg">NAMA BARANG
<option value="tgl_masuk">TANGGAL MASUK
<option value=jml_masuk">JUMLAH MASUK
<option value="kode_spplier">KODE SUPPLIER
</select>
<input type="text" name="query" size="30"/>
<input type="submit" name="submit" value="Cari" />
</form><br><br>
<?php include('cari_kode_data_barang_masuk.php'); ?>