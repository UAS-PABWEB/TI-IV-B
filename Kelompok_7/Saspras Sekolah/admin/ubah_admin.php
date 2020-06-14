<?php 
error_reporting(0);
  require "config/koneksi.php";
  require "config/lib.php";


if(isset($_POST['btnUbah'])){

  

  # Baca Variabel Data Form

  $id_admin                 = $_POST['id_admin'];
  $username                 = $_POST['username'];
  $password                 = $_POST['password'];
  $level                 = $_POST['level'];
 
         $Token = $_GET['Token'];
         $dat = $mysqli->query("UPDATE admin SET   
                                                    id_admin                 = '$id_admin',
                                                    username                  = '$username',
                                                    password              = '$password',
                                                    level               = '$level'
                                  
                                                 WHERE id_admin               = '$Token'")  ;

 
 if($dat){
           echo "<script>alert('Berhasil di ubah');location.href='?page=data_admin'</script>";
           // echo "<meta http-equiv='refresh' content='0; url=?page=input_data'>";
         } else {
           echo "<script>alert('Oops! Terjadi Kesalahan ');location.href='javascript:history.back()';</script>";
         }
      

        

   
} // Penutup POST
$Token = $_GET['Token'];
$cek = $mysqli->query("SELECT * FROM  admin WHERE id_admin='$Token'");
  while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
?>
<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->

    <section id="services">
        <div class="container">
            <div class="box first">
             SMK TERPADU BINA INSAN
                <div class="row">
                <header class="panel-heading">
                              <h3 align="center">Sunting Data Admin </h3><br>
                             
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
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">ADMIN ID: <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
         <input  class="form-control col-md-8 col-xs-12"   name="id_admin" value="<?php echo $row['id_admin']; ?>" required type="text">      
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">USERNAME : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="username" value="<?php echo $row['username']; ?>" required type="text">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">PASSWORD : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="password" value="<?php echo $row['password']; ?>" required type="text">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">LEVEL : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="level" value="<?php echo $row['level']; ?>" required type="text">
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