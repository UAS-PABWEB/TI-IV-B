<?php
 error_reporting(0);
 
if(isset($_POST['btnSimpan'])){
 # Baca Variabel Data Form

  $kode_barang                   = $_POST['kode_barang'];
  $nama_brg                      = $_POST['nama_brg'];
  $jml_brg_masuk                 = $_POST['jml_brg_masuk'];
  $jml_brg_keluar               = $_POST['jml_brg_keluar'];
  $total_brg                     = $_POST['total_brg'];
  $keterangan                    = $_POST['keterangan'];
        
  $myQry = $mysqli->query("INSERT INTO stok (kode_barang,nama_brg,jml_brg_masuk,jml_brg_keluar,total_brg,keterangan)
  VALUES ('$kode_barang','$nama_brg','$jml_brg_masuk','$jml_brg_keluar','$total_brg','$keterangan')") or die(mysqli_error($mysqli));
 
         if($myQry){
           echo "<script>alert('Berhasil di simpan');location.href='?page=stok/data_stok'</script>";
           // echo "<meta http-equiv='refresh' content='0; url=?page=input_data'>";
         } else {
           echo "<script>alert('Oops! Terjadi Kesalahan ');location.href='javascript:history.back()';</script>";
         }
     

        
    
   
} // Penutup POST
  
  
 

?>

<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->

    
                <div class="row">
                 <header class="panel-heading">
                              <h3 align="center">Input Data </h3><br>
                             
                          </header>
<form class="form-horizontal form-label-left"   enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
    
         <div class="row">
      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">KODE BARANG : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
         <input  class="form-control col-md-8 col-xs-12"   name="kode_barang" value="<?php echo $row['kode_barang']; ?>" required type="text">      
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">NAMA BARANG : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="nama_brg" value="<?php echo $row['nama_brg']; ?>" required type="text">
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">JUMLAH BARANG MASUK : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="jml_brg_masuk" value="<?php echo $row['jml_brg_masuk']; ?>" required type="text">
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">JUMLAH BARANG KELUAR : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="jml_brg_keluar" value="<?php echo $row['jml_brg_keluar']; ?>" required type="text">
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">TOTAL BARANG : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="total_brg" value="<?php echo $row['total_brg']; ?>" required type="text">
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">KETERANGAN : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="keterangan" value="<?php echo $row['keterangan']; ?>" required type="text">
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
