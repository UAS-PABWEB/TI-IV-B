<?php
include ("koneksi.php"); 
$query = $_POST['query'];
$cari_data_barang_pinjam = $_POST['cari_data_barang_pinjam'];
if ($_POST['submit']) {
	$query=mysql_query("select * from pinjam_barang where $cari_data_barang_pinjam like '%$query%' ");
	$cek=mysql_num_rows($query);
	?>
	<table summary="Summary Here" width="1125" border="1" align="center" cellpadding="4" cellspacing="1">
	<thead>
     <section class="panel">       
    <table class="table table-striped   table-hover">
        <thead>
        <tr>
            <th>Nomor</th>
     	 <th class="hidden-phone"><i class=></i> NO PINJAM</th>
            <th><i class=></i> TANGGAL PINJAM</th>   
            <th><i class=></i> KODE BARANG</th> 
            <th><i class=></i> NAMA BARANG</th>  
             <th><i class=></i> JUMLAH PINJAM</th>
	     <th><i class=></i> PEMINJAM</th> 
               <th><i class=></i> TANGGAL KEMBALI</th>
 	      <th><i class=></i> KETERANGAN</th>   
    
      
	  </tr></thead>
	<?php
	if($cek){
		while($row=mysql_fetch_array($query)){
			$Nomor ++;
	?>
	<tbody>
	 <tr>
            <td><?php echo $Nomor ?> </td>
		  <td class="hidden-phone"><?php echo $row['no_pinjam']; ?> </td>
            <td class="hidden-phone"><?php echo $row['tgl_pinjam']; ?> </td>
            <td class="hidden-phone"><?php echo $row['kode_barang']; ?> </td>
                 <td class="hidden-phone"><?php echo $row['nama_brg']; ?> </td>
            <td class="hidden-phone"><?php echo $row['jml_pinjam']; ?> </td>
              <td class="hidden-phone"><?php echo $row['peminjam']; ?> </td>
		<td class="hidden-phone"><?php echo $row['tgl_kembali']; ?> </td>
		 <td class="hidden-phone"><?php echo $row['keterangan']; ?> </td>
	
                  
    
  	</tr></tbody>
	<?php	
		}
	}else{
		echo "Tidak ada data";
	}
	}else{
	unset($_POST['submit']);
	}
	?> 
</SECTION>
	</table>
	<?php ?>