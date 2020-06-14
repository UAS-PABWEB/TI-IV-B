<?php
 error_reporting(0);
 
if(isset($_POST['btnSimpan'])){
 # Baca Variabel Data Form

  $kode_barang                   = $_POST['kode_barang'];
  $nama_barang                   = $_POST['nama_barang'];
  $spesifikasi                   = $_POST['spesifikasi'];
  $lokasi_barang                 = $_POST['lokasi_barang'];
  $kategori                      = $_POST['kategori'];
  $jml_barang                    = $_POST['jml_barang'];
  $kondisi                       = $_POST['kondisi'];
  $jenis_barang                  = $_POST['jenis_barang'];
  $sumber_dana                   = $_POST['sumber_dana'];
        
  $myQry = $mysqli->query("INSERT INTO barang (kode_barang,nama_barang,spesifikasi,lokasi_barang,kategori,jml_barang,kondisi,jenis_barang,sumber_dana)
  VALUES ('$kode_barang','$nama_barang','$spesifikasi','$lokasi_barang','$kategori','$jml_barang','$kondisi','$jenis_barang','$sumber_dana')") or die(mysqli_error($mysqli));
 
         if($myQry){
           echo "<script>alert('Berhasil di simpan');location.href='?page=barang/data_barang'</script>";
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
                              <h3 align="center">Input Data Barang </h3><br>
                             
                          </header>
<form class="form-horizontal form-label-left"   enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
    
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
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">SPESIFIKASI: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="spesifikasi"  required type="text">
                </div>
            </div>
           
	    <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">LOKASI BARANG: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="lokasi_barang"  required type="text">
                </div>
            </div>
	    
	    <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">kategori: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="kategori"  required type="text">
                </div>
            </div>
           
	    <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">JUMLAH BARANG: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="jml_barang"  required type="text">
                </div>
            </div>
	   
	    <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">KONDISI: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="kondisi"  required type="text">
                </div>
            </div>
	              
	    <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">JENIS BARANG: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="jenis_barang"  required type="text">
                </div>
            </div>
	   
	    <div class="item form-group">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">SUMBER DANA: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="sumber_dana"  required type="text">
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
