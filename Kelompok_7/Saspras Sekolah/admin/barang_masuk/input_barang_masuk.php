<?php
 error_reporting(0);
 
if(isset($_POST['btnSimpan'])){
 # Baca Variabel Data Form

  $id_msk_brg              = $_POST['id_msk_brg'];
  $kode_barang                = $_POST['kode_barang'];
  $nama_brg                = $_POST['nama_brg'];
  $tgl_masuk                 = $_POST['tgl_masuk'];
  $jml_masuk                   = $_POST['jml_masuk'];      
  $kode_supplier             = $_POST['kode_supplier'];  
     
     
  $myQry = $mysqli->query("INSERT INTO masuk_barang (id_msk_brg,kode_barang,nama_brg,tgl_masuk,jml_masuk,kode_supplier)
  VALUES ('$id_msk_brg','$kode_barang','$nama_brg','$tgl_masuk','$jml_masuk','$kode_supplier')") or die(mysqli_error($mysqli));
 
         if($myQry){
           echo "<script>alert('Berhasil di simpan');location.href='?page=barang_masuk/data_barang_masuk'</script>";
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
                              <h3 align="center">Input Data BARANG MASUK </h3><br>
                             
                          </header>
<form class="form-horizontal form-label-left"   enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
    
            
            <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">ID MASUK BARANG: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="id_msk_brg"  required type="text">
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
                  <input  class="form-control col-md-8 col-xs-12"   name="nama_brg"  required type="text">
                </div>
            </div>
           <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">TANGGAL MASUK: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="tgl_masuk"  required type="text">
                </div>
            </div>

            <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">JUMLAH MASUK: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="jml_masuk"  required type="text">
                </div>
            </div>
            
            <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">KODE SUPPLIER: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="kode_supplier"  required type="text">
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
