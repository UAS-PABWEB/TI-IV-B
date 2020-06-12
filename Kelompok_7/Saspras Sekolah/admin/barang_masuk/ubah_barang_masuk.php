<?php 
error_reporting(0);
  require "config/koneksi.php";
  require "config/lib.php";


if(isset($_POST['btnUbah'])){

  

  # Baca Variabel Data Form

  $id_msk_brg           = $_POST['id_msk_brg'];
  $kode_barang              = $_POST['kode_barang'];
  $nama_brg              = $_POST['nama_brg'];
  $tgl_masuk               = $_POST['tgl_masuk'];
  $jml_masuk                 = $_POST['jml_masuk'];
  $kode_supplier           = $_POST['kode_supplier'];
  
         $Token = $_GET['Token'];
         $dat = $mysqli->query("UPDATE masuk_barang SET   
                id_msk_brg               = '$id_msk_brg',
                kode_barang              = '$kode_barang',
                nama_brg                 = '$nama_brg',
                tgl_masuk                = '$tgl_masuk',
                jml_masuk                = '$jml_masuk',
                kode_supplier            = '$kode_supplier'
                                                 
                                                 WHERE id_msk_brg               = '$Token'")  ;

 
 if($dat){
           echo "<script>alert('Berhasil di ubah');location.href='?page=barang_masuk/data_barang_masuk'</script>";
           // echo "<meta http-equiv='refresh' content='0; url=?page=input_data'>";
         } else {
           echo "<script>alert('Oops! Terjadi Kesalahan ');location.href='javascript:history.back()';</script>";
         }
      

        

   
} // Penutup POST
$Token = $_GET['Token'];
$cek = $mysqli->query("SELECT * FROM masuk_barang WHERE id_msk_brg='$Token'");
  while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
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
                <header class="panel-heading"><h3 align="center">Data Barang masuk </h3>
          <br>
                             
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
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">ID BARANG MASUK : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
         <input  class="form-control col-md-8 col-xs-12"   name="id_msk_brg" value="<?php echo $row['id_msk_brg']; ?>" required type="text">      
        </div>
      </div>

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
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">TANGGAL MASUK : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="tgl_masuk" value="<?php echo $row['tgl_masuk']; ?>" required type="text">
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">JUMLAH MASUK : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="jml_masuk" value="<?php echo $row['jml_masuk']; ?>" required type="text">
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">KODE SUPPLIER : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="kode_supplier" value="<?php echo $row['kode_supplier']; ?>" required type="text">
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