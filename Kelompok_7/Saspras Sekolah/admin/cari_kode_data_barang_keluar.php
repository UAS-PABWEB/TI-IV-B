<?php
include ("koneksi.php"); 
$query = $_POST['query'];
$cari_data_barang_keluar = $_POST['cari_data_barang_keluar'];
if ($_POST['submit']) {
	$query=mysql_query("select * from keluar_barang where $cari_data_barang_keluar like '%$query%' ");
	$cek=mysql_num_rows($query);
	?>
	<table summary="Summary Here" width="1125" border="1" align="center" cellpadding="4" cellspacing="1">
	<thead>
     <section class="panel">       
    <table class="table table-striped   table-hover">
        <thead>
        <tr>
            <th>Nomor</th>
     	 <th class="hidden-phone"><i class=></i> ID BARANG KELUAR</th>
            <th><i class=></i> KODE BARANG</th>   
            <th><i class=></i> NAMA BARANG</th> 
            <th><i class=></i> TANGGAL KELUAR</th>  
             <th><i class=></i> PENERIMA</th> 
               <th><i class=></i> JUMLAH BARANG KELUAR</th>
 	      <th><i class=></i> KEPERLUAN</th>   
    
      
	  </tr></thead>
	<?php
	if($cek){
		while($row=mysql_fetch_array($query)){
			$Nomor ++;
	?>
	<tbody>
	 <tr>
            <td><?php echo $Nomor ?> </td>
		  <td class="hidden-phone"><?php echo $row['id_brg_keluar']; ?> </td>
            <td class="hidden-phone"><?php echo $row['kode_barang']; ?> </td>
            <td class="hidden-phone"><?php echo $row['nama_barang']; ?> </td>
                 <td class="hidden-phone"><?php echo $row['tgl_keluar']; ?> </td>
            <td class="hidden-phone"><?php echo $row['penerima']; ?> </td>
              <td class="hidden-phone"><?php echo $row['jml_brg_keluar']; ?> </td>
		<td class="hidden-phone"><?php echo $row['keperluan']; ?> </td>
                  
    
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