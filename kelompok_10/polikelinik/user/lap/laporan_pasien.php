<?php include('lap1.php'); ?>
<?php
# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 50;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM pasien";
$pageQry = mysql_query($pageSql) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);

// Jika tombol Cari diklik
if(isset($_POST['btnCari'])){
	if($_POST) {
		// Cari berdasarkan Nomor RM dan Nama Pasien yang mirip
		$txtKataKunci	= $_POST['txtKataKunci'];
		$mySql = "SELECT * FROM pasien WHERE nopasien='$txtKataKunci' OR namapas LIKE 
		'%$txtKataKunci%' 
				  ORDER BY nopasien ASC LIMIT $hal, $row";
	}
}
else {
	$mySql = "SELECT * FROM pasien ORDER BY nopasien ASC LIMIT $hal, $row";
} 

// Membaca variabel form
$dataKataKunci	= isset($_POST['txtKataKunci']) ? $_POST['txtKataKunci'] : '';
?>

<h2> LAPORAN DATA PASIEN </h2>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" 
target="_self" id="form1">
  <table  class="table-list" width="500" border="0" cellspacing="1" cellpadding="4">
    <tr>
      <th colspan="3"><strong>CARI PASIEN </strong></th>
    </tr>
    <tr>
      <td width="139"><strong>Nomor/Nama Pasien </strong></td>
      <td width="1"><strong>:</strong></td>
      <td width="332"><b>
        <input name="txtKataKunci" type="text" value="<?php echo $dataKataKunci; ?>" 
		size="40" maxlength="100" />
      </b></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><b>
        <input name="btnCari" type="submit" value="Cari" />
     <a href="?page=lap/laporan_pasien" title="refresh">[Refresh]</a>&nbsp;&nbsp;<a href="lap/simpanpasienxls.php">| [Save to excel]</a></b></td>
    </tr>
  </table>
</form>
<table class="table-list" width="800" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td width="22" align="center" bgcolor="#CCCCCC"><strong>No</strong></td>
    <td width="66" bgcolor="#CCCCCC"><strong>No.Pasien</strong></td>
    <td width="90" bgcolor="#CCCCCC"><strong>Nama Pasien </strong></td>
    <td width="90" bgcolor="#CCCCCC"><strong>Alamat </strong></td>
    <td width="90" bgcolor="#CCCCCC"><strong>Telepon</strong></td>
    <td width="90" bgcolor="#CCCCCC"><strong>Tgl lahir</strong></td>
    <td width="70" bgcolor="#CCCCCC"><strong>Jenis Kelamin</strong></td>
    <td width="35" bgcolor="#CCCCCC"><strong>Aksi</strong></td>
  </tr>
  <?php
	// Query SQL ada di bagian atas, kolom tombol Cari (btnCari)
	$myQry = mysql_query($mySql)  or die ("Query salah : ".mysql_error());
	$nomor = 0; 
	while ($myData = mysql_fetch_array($myQry)) {
		$nomor++;
	?>
  <tr>
    <td><?php echo $nomor; ?></td>
    <td><?php echo $myData['nopasien']; ?></td>
    <td><?php echo $myData['namapas']; ?></td>
    <td><?php echo $myData['almpas']; ?></td>
    <td><?php echo $myData['telppas']; ?></td>
    <td><?php echo $myData['tgllahirpas']; ?></td>
    <td><?php echo $myData['jeniskelpas']; ?>, 
    <td><a href="lap/pasien_cetak.php?nopasien=<?php echo $myData['nopasien']; ?>"
	target="_blank">Cetak</a></td>
  </tr>
  <?php } ?>
  <tr>
    <td colspan="3"><strong>Jumlah Data :</strong> <?php echo $jml; ?> </td>
    <td colspan="5" align="right"><strong>Halaman ke :</strong>
      <?php
	for ($h = 1; $h <= $max; $h++) {
		$list[$h] = $row * $h - $row;
		echo " <a href='?page=Laporan-Pasien&hal=$list[$h]'>$h</a> ";
	}
	?></td>
  </tr>
</table>
