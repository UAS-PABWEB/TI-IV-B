<?php
 error_reporting(0);
 
if(isset($_POST['btnSimpan'])){
 # Baca Variabel Data Form

  $kode_supplier                  = $_POST['kode_supplier'];
  $nama_supplier                 = $_POST['nama_supplier'];
  $alamat_supplier                 = $_POST['alamat_supplier'];
  $telp_supplier                 = $_POST['telp_supplier'];
    $kota_supplier                 = $_POST['kota_supplier'];      
     
     
     
  $myQry = $mysqli->query("INSERT INTO supplier (kode_supplier,nama_supplier,alamat_supplier,telp_supplier,kota_supplier)
  VALUES ('$kode_supplier','$nama_supplier','$alamat_supplier','$telp_supplier','$kota_supplier')") or die(mysqli_error($mysqli));
 
         if($myQry){
           echo "<script>alert('Berhasil di simpan');location.href='?page=supplier/data_supplier'</script>";
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
                              <h3 align="center">Input Data Supplier </h3><br>
                             
                          </header>
<form class="form-horizontal form-label-left"   enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
    
            
            <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">KODE SUPPLIER: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="kode_supplier"  required type="text">
                </div>
            </div>
           <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NAMA SUPPLIER: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="nama_supplier"  required type="text">
                </div>
            </div>
            
            <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">ALAMAT SUPPLIER: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="alamat_supplier"  required type="text">
                </div>
            </div>
            
            <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NO TELEPON SUPPLIER: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="telp_supplier"  required type="text">
                </div>
            </div>

	    <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">KOTA SUPPLIER: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="kota_supplier"  required type="text">
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
