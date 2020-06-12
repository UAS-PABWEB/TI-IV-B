<?php 
error_reporting(0);
  require "config/koneksi.php";
  require "config/lib.php";


if(isset($_POST['btnUbah'])){

  

  # Baca Variabel Data Form

  $kd_sk                 = $_POST['kd_sk'];
  $nama_sk                 = $_POST['nama_sk'];
  $nilai_sk                 = $_POST['nilai_sk'];
  $kd_jurusan                 = $_POST['kd_jurusan'];
  $nama_jurusan                 = $_POST['nama_jurusan'];
 
         $Token = $_GET['Token'];
         $dat = $mysqli->query("UPDATE standar_kompetensi SET   
                kd_sk                = '$kd_sk',
                nama_sk              = '$nama_sk',
                nilai_sk              = '$nilai_sk',
                kd_jurusan            = '$kd_jurusan',
                nama_jurusan          = '$nama_jurusan'
                                  
                                                 WHERE kd_sk               = '$Token'")  ;

 
 if($dat){
           echo "<script>alert('Berhasil di ubah');location.href='?page=data_sk'</script>";
           // echo "<meta http-equiv='refresh' content='0; url=?page=input_data'>";
         } else {
           echo "<script>alert('Oops! Terjadi Kesalahan ');location.href='javascript:history.back()';</script>";
         }
      

        

   
} // Penutup POST
$Token = $_GET['Token'];
$cek = $mysqli->query("SELECT * FROM  standar_kompetensi WHERE kd_sk='$Token'");
  while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
?>
<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->

    <section id="services">
        <div class="container">
            <div class="box first">
            <marquee behavior="scroll" >PERPUSTAKAAN SMK KORPRI SUMEDANG</marquee>
                <div class="row">
                <header class="panel-heading">
                              <h3 align="center">Sunting Data Perpustakaan </h3><br>
                             
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
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">KODE KKM: <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
         <input  class="form-control col-md-8 col-xs-12"   name="kd_sk" value="<?php echo $row['kd_sk']; ?>" required type="text">      
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">NAMA KKM : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="nama_sk" value="<?php echo $row['nama_sk']; ?>" required type="text">
        </div>
      </div>



      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">NILAI KKM : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="nilai_sk" value="<?php echo $row['nilai_sk']; ?>" required type="text">
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">KODE JURUSAN : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="kd_jurusan" value="<?php echo $row['kd_jurusan']; ?>" required type="text">
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">NAMA JURUSAN : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="nama_jurusan" value="<?php echo $row['nama_jurusan']; ?>" required type="text">
        </div>
      </div>
                                                                                       
   <div class="item form-group"> 
                <div class="col-md-12 col-sm-12 col-xs-12" align="right">                                            
                  <a href="javascript:history.back()" class="btn btn-warning">Batal</a>  
                  <button class="btn btn-primary" name="btnUbah">Edit</button>  
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