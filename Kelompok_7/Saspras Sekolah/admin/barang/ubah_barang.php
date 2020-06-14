<?php 
error_reporting(0);
  require "config/koneksi.php";
  require "config/lib.php";


if(isset($_POST['btnUbah'])){

  

  # Baca Variabel Data Form

  $kode_barang                  = $_POST['kode_barang'];
  $nama_barang                  = $_POST['nama_barang'];
  $spesifikasi                  = $_POST['spesifikasi'];
  $lokasi_barang                = $_POST['lokasi_barang'];
  $kategori                     = $_POST['kategori'];
  $jml_barang                   = $_POST['jml_barang'];
  $kondisi                      = $_POST['kondisi'];
  $jenis_barang                 = $_POST['jenis_barang'];
  $sumber_dana                  = $_POST['sumber_dana'];
          $Token = $_GET['Token'];
         $dat = $mysqli->query("UPDATE barang SET   
                kode_barang              = '$kode_barang',
                nama_barang              = '$nama_barang',
                spesifikasi              = '$spesifikasi',
                lokasi_barang            = '$lokasi_barang',
                kategori                 = '$kategori',
                jml_barang               = '$jml_barang',
                kondisi                  = '$kondisi',
                jenis_barang             = '$jenis_barang',
                sumber_dana              = '$kondisi'
                                                 
                                                 WHERE kode_barang               = '$Token'")  ;

 
 if($dat){
           echo "<script>alert('Berhasil di ubah');location.href='?page=barang/data_barang'</script>";
           // echo "<meta http-equiv='refresh' content='0; url=?page=input_data'>";
         } else {
           echo "<script>alert('Oops! Terjadi Kesalahan ');location.href='javascript:history.back()';</script>";
         }
      

        

   
} // Penutup POST
$Token = $_GET['Token'];
$cek = $mysqli->query("SELECT * FROM  barang WHERE kode_barang='$Token'");
  while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
?>
<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->
    <style type="text/css">
<!--
.style5 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
-->
    </style>
    

    
              <marquee behavior="scroll" >
              </marquee><div class="row">
                <header class="panel-heading">
                              <h3 align="center">Data Barang </h3><br>
                          </header>
<!-- page start-->
<div class="row">
    <div class="col-lg-5">
        <section class="panel">
            
             
  <div class="panel-body pull-center">
    <div class="form">
      <form class="form-horizontal form-label-left"  enctype="multipart/form-data"  action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <div class="row">
      
       <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">KODE BARANG: <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
         <input  class="form-control col-md-8 col-xs-12"   name="kode_barang" value="<?php echo $row['kode_barang']; ?>" required type="text">      
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">NAMA BARANG : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="nama_barang" value="<?php echo $row['nama_barang']; ?>" required type="text">
        </div>
      </div>
        
       <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">SPESIFIKASI : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
         <input  class="form-control col-md-8 col-xs-12"   name="spesifikasi" value="<?php echo $row['spesifikasi']; ?>" required type="text">      
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">LOKASI BARANG : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="lokasi_barang" value="<?php echo $row['lokasi_barang']; ?>" required type="text">
        </div>
      </div>
                                                                                       
  
       <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">kategori : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
         <input  class="form-control col-md-8 col-xs-12"   name="kategori" value="<?php echo $row['kategori']; ?>" required type="text">      
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">JUMLAH BARANG : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="jml_barang" value="<?php echo $row['jml_barang']; ?>" required type="text">
        </div>
      </div>
                                                                                       
  
       <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">KONDISI : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
         <input  class="form-control col-md-8 col-xs-12"   name="kondisi" value="<?php echo $row['kondisi']; ?>" required type="text">      
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">JENIS BARANG : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="jenis_barang" value="<?php echo $row['jenis_barang']; ?>" required type="text">
        </div>
      </div>
                                                                                       
  
       <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">SUMBER DANA : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
         <input  class="form-control col-md-8 col-xs-12"   name="sumber_dana" value="<?php echo $row['sumber_dana']; ?>" required type="text">      
        </div>
      </div>
                                                                                 
   <div class="item form-group"> 
                <div class="col-md-12 col-sm-12 col-xs-12" align="right">                                            
                  <a href="javascript:history.back()" class="btn btn-warning">Batal</a>  
                  <button class="btn btn-primary" name="btnUbah">Simpan</button>  
                </div>
            </div>
</form>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
              </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->

<?php } ?>