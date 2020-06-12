<?php
 error_reporting(0);
 include "config/koneksi.php";
 $ambil = mysql_query("SELECT MAX(id_admin) AS id_admin FROM admin");
 $tampil1 = mysql_fetch_array($ambil);
 $id_admin = $tampil1['id_admin'];
 $id_admin ++;


if(isset($_POST['btnSimpan'])){
 # Baca Variabel Data Form
  $id_admin                 = $_POST['id_admin'];
  $username                 = $_POST['username'];
  $password           = $_POST['password'];
  $level              = $_POST['level'];

     
  $myQry = $mysqli->query("INSERT INTO admin (id_admin,username,password,level)
  VALUES ('$id_admin','$username','$password','$level')") or die(mysqli_error($mysqli));
 
         if($myQry){
           echo "<script>alert('Berhasil di simpan');location.href='?page=data_admin'</script>";
           // echo "<meta http-equiv='refresh' content='0; url=?page=input_data'>";
         } else {
           echo "<script>alert('Oops! Terjadi Kesalahan ');location.href='javascript:history.back()';</script>";
         }
     

        
    
   
} // Penutup POST
  
  
 

?>

<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->

    <section id="services">
        <div class="container">
            <div class="box first">
                <div class="row">
                 <header class="panel-heading">
                              <h3 align="center"><font face="Times New Roman">Input Data Admin</font></h3><br>
                             
                          </header>
<form class="form-horizontal form-label-center"   enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <div class="row" align="center">
    <div class="col-md-6 col-sm-6 col-xs-12" align="center">
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">ADMIN ID : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="id_admin"  required type="text" value="<?php echo "$id_admin"?>">
                </div>
            </div>
           <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">USERNAME : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="username"  required type="text">
                </div>
            </div>
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">PASSWORD : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="password"  required type="text">
                </div>
            </div>
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">LEVEL : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="level"  required type="text">
                </div>
            </div>
            <div class="item form-group" align="center"> 
                <div class="col-md-12 col-sm-12 col-xs-12" align="right">                                            
                  <a href="javascript:history.back()"  class="btn btn-warning">Batal</a>  
                  <button class="btn btn-primary" name="btnSimpan">Simpan</button>  
                </div>
            </div>
        </div>   
        
                                                                                        
  </div>
</form>
 </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->
