<?php include('koneksi.php'); error_reporting(0);
?>
<header class="panel-heading">
 <h3 align="center"> CARI DATA BERDASARKAN</h3><br></HEADER>
<form action="" method="post">
 <select name="cari_data_barang_pinjam">
<option value="no_pinjam">NO PINJAM
<option value="tgl_pinjam">TANGGAL PINJAM
<option value="kode_barang">KODE BARANG
<option value="nama_brg">NAMA BARANG
<option value="jml_pinjam">JUMLAH PINJAM
<option value="peminjam">PEMINJAM
<option value="tgl_kembali">TANGGAL KEMBALI
<option value="keterangan">KETERANGAN

</select>
<input type="text" name="query" size="30"/>
<input type="submit" name="submit" value="Cari" />
</form><br><br>
<?php include('cari_kode_data_barang_pinjam.php'); ?>