<?php 
include "koneksi.php";
include_once "inc.library.php";

# Deklarasi variabel
$filterperiode ="";
$tglawal ="";
$tglakhir ="";

# Membaca tanggal dari form, jika belum di-POST formnya, maka diisi dengan tanggal sekarang
$tglawal = isset ($_POST['txttglawal']) ? $_POST['txttglawal'] : "01-".date('m-y');
$tglawal = isset ($_POST['txttglakhir']) ? $_POST['txttglakhir'] : date('d-m-y');

// Jika tombol filter tanggal (Tampilkan) diklik
if (isset ($_POST['btntampil'])) {
		// Membuat sub SQL filter data berdasarkan 2 tanggal (periode)
		$filterperiode = " WHERE (tglpendaftaran BETWEEn '".InggrisTgl($tglawal)."' AND ' "
		.InggrisTgl($tglakhir)."')";
}
else{
		// Membaca data tanggal dari URL, saat menu page diklik
		$tglawal = isset ($_GET['tglawal']) ? $_GET['tglawal'] : $tglawal;
		$tglawal = isset ($_GET['tglakhir']) ? $_GET['tglakhir'] : $tglakhir;

		//Membuat sub SQL filter data berdasarkan 2 tanggal (periode)
		$filterperiode = "WEHER (tglpendaftaran BETWEEN'".InggrisTgl($tglawal)." ' AND '"
		.InggrisTgl($tglakhir)."')";
}

# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row ="50";
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM laporan_pendaftaran_pasien $filterperiode";
$pageQry = mysql_query($pageSql) or die ("error paging: ".mysql_error());
$jm1     = mysql_num_rows($pageQry);
$max     = ceil($jm1/$row);
?>

<style type="text/css">
.main {
	margin-top: 5px;
	margin-left: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
</style>
<body>
<img src="img/SAA.png" height="30" width="100%" class="img img-responsive">

<tr>
<td><table width="100%" border="0" align="center" cellpadding="3" cellspacing="2">
<tr>
<td colspan="10" align="left" valign="middle" scope="col"><table width="100%"
height="100%" border="0">
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table></td>
</tr>
<tr>
<th colspan="9" align="center" scope="col">PERIODE : <?php echo $_POST['txttglawal'] ?>
s/d <?php echo $_POST['txttglakhir']?> </th>

</tr>
<tr bgcolor="#8fb041" style="fint-weight:bold; font-size:13px;color:#ffffff" align="center">
<td width="5%" bgcolor="#8fb041">NO</td>
<td width="10%" bgcolor="#8fb041">NO PASIEN</td>
<td width="12%" bgcolor="#8fb041">NAMA PASIEN</td>
<td width="12%" bgcolor="#8fb041">NO PENDAFTARAN</td>
<td width="12%" bgcolor="#8fb041">TANGGAL PENDAFTARAN</td>

</tr>
<?php
	# perintah untuk menampilkan data pasien dengan filter periode
	$mySql = " SELECT * FROM laporan_pendaftaran_pasien $filterperiode ORDER BY nopasien DESC
	LIMIT $hal, $row";
	$myQry = mysql_query($mysql) or die ("Query 1 salah : ".mysql_error());
	$nomor = $hal;
while ($myData = mysql_fetch_array($myQry))	{
	$nomor++;
	?>
	<td bgcolor="#CCCCCC" align="center"><?php echo $no=$nomor;?></td>
	<td align="center" bgcolor="#CCCCCC"><?php echo $myData ['nopasien']; ?> </td>
	<td align="center" bgcolor="#CCCCCC"> <a href="lap/pasien_cetak.php?nopasien=<?php echo
	$myData['nopasien']; ?>" target="_blank"> <?php echo $myData['namapas']?></a></td>
	<td align="center" bgcolor="#CCCCCC"><?php echo $myData ['namapas']; ?></td>
	<td align="center" bgcolor="#CCCCCC"><?php echo $myData ['nopendaftaran']; ?></td>
	<td align="center" bgcolor="#CCCCCC"><?php echo $myData ['tglpendaftaran']; ?></td>

	
	</tr>
<?php } ?>
<tr>

<td colspan="4" align= &nbsp; "right"><strong>Jumlah Data : </strong> <?php echo $jml; ?> </td>
</td>
</tr>

</table>
<br>
<img src="images/btn_print.png" target="_blank" height="20" onClick="javascript:print()"
/>

</body>
</html>



































