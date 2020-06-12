<?php
 error_reporting(0);
 
if(isset($_POST['btnSimpan'])){
 # Baca Variabel Data Form

  $id_brg_keluar              = $_POST['id_brg_keluar'];
  $kode_barang                = $_POST['kode_barang'];
  $nama_barang                = $_POST['nama_barang'];
  $tgl_keluar                 = $_POST['tgl_keluar'];
  $penerima                   = $_POST['penerima'];      
  $jml_brg_keluar             = $_POST['jml_brg_keluar'];
  $keperluan                  = $_POST['keperluan'];   
     
     
  $myQry = $mysqli->query("INSERT INTO keluar_barang (id_brg_keluar,kode_barang,nama_barang,tgl_keluar,penerima,jml_brg_keluar,keperluan)
  VALUES ('$id_brg_keluar','$kode_barang','$nama_barang','$tgl_keluar','$penerima','$jml_brg_keluar','$keperluan')") or die(mysqli_error($mysqli));
 
         if($myQry){
           echo "<script>alert('Berhasil di simpan');location.href='?page=barang_keluar/data_barang_keluar'</script>";
           // echo "<meta http-equiv='refresh' content='0; url=?page=input_data'>";
         } else {
           echo "<script>alert('Oops! Terjadi Kesalahan ');location.href='javascript:history.back()';</script>";
         }
     

        
    
   
} // Penutup POST
  
  
 

?>

<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->
    <style type="text/css">
<!--
.style1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
-->
    </style>
    

    
		<div class="row">
                 <header class="panel-heading">
                 <h3 align="center">Input Data BARANG KELUAR </h3><br>
                             
                          </header>
<form class="form-horizontal form-label-left"   enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
    
            
            <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">ID BARANG KELUAR: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="id_brg_keluar"  required type="text">
                </div>
            </div>
           <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">KODE BARANG: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="kode_barang"  required type="text">
                </div>
            </div>
            
            <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NAMA BARANG: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="nama_barang"  required type="text">
                </div>
            </div>
           <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">TANGGAL KELUAR: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="tgl_keluar"  required type="text">
                </div>
            </div>

            <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">PENERIMA: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="penerima"  required type="text">
                </div>
            </div>
            
            <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">JUMLAH BARANG KELUAR: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="jml_brg_keluar"  required type="text">
                </div>
            </div>

	    <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">keperluan: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="keperluan"  required type="text">
                </div>
            </div>
           
            <div class="item form-group"> 
                <div class="col-md-12 col-sm-12 col-xs-12" align="right">                                            
                  <a href="javascript:history.back()"  class="btn btn-warning">Batal</a>  
                  <button class="btn btn-primary" name="btnSimpan">Simpan..</button>  
                </div>
            </div>
        </div>   
        
                                                                                        
  </div>
</form>
 </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->
