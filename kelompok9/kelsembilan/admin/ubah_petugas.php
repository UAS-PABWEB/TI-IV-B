<div style="background-image: url(images/ed.jpg);" data-stellar-background-ratio="0.10">
			<div class="overlay"></div>
			<div class="container-login100">
				<div class="row">
					<div class="col-sm-12 col-sm-offset-0 col-xs-12">

<?php 

  require "config/koneksi.php";
  require "config/lib.php";


if(isset($_POST['btnUbah'])){

  

  # Baca Variabel Data Form

  $ID          				= $_POST['ID'];
  $NAMA_DEPAN         	    = $_POST['NAMA_DEPAN'];
  $NAMA_BELAKANG            = $_POST['NAMA_BELAKANG'];
  $password         	    = $_POST['password'];
  $username         		= $_POST['username'];
  $status         			= $_POST['status'];
 
         $Token = $_GET['Token'];
         $dat = $mysqli->query("UPDATE petugas SET   
                ID        			   = '$ID',
                NAMA_DEPAN             = '$NAMA_DEPAN',
                NAMA_BELAKANG          = '$NAMA_BELAKANG',
                password     	       = '$password',
                username      		   = '$username',
                status      		   = '$status'
                                  
                                                 WHERE ID               = '$Token'")  ;

 
 if($dat){
           echo "<script>alert('Berhasil di ubah');location.href='?page=data_petugas'</script>";
           // echo "<meta http-equiv='refresh' content='0; url=?page=input_data'>";
         } else {
           echo "<script>alert('Oops! Terjadi Kesalahan ');location.href='javascript:history.back()';</script>";
         }
      

        

   
} // Penutup POST
$Token = $_GET['Token'];
$cek = $mysqli->query("SELECT * FROM  petugas WHERE ID='$Token'");
  while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
?>

</script>
<section id="main-slider1" class="carousel">
        
         </section><!--/#main-slider-->
		 <br>
		 <br>
		 <br>
		 
<section ="main-slid_bukuer1" class="carousel">
        
        
    </section><!--/#main-slid_bukuer-->

    <section id_buku="services">
        <div class="container">
            <div style="color:#000000;" class="box first">
            <marquee behavior="scroll" >APLIKASI SURAT</marquee>
<marquee behavior="scroll" ><img src="images/dit.png" width="500" height="200"></marquee>
 <section id="services">
        <div class="container">
            <div class="box first">
                  <div class="row">
                <header class="panel-heading">
				
                              <h3 align="center">Sunting Data Petugas </h3><br>
                             
                          </header>
             
  <div class="panel-body pull-left">
    <div class="form">
      <form class="form-horizontal form-label-left"  enctype="multipart/form-data"  action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <div class="row"> 
       <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">ID PETUGAS: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#fdfdff;"   name="ID" value="<?php echo $row['ID']; ?>" required type="text">
                </div>
            </div>

  <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NAMA DEPAN: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#fdfdff;"   name="NAMA_DEPAN" value="<?php echo $row['NAMA_DEPAN']; ?>" required type="text">
                </div>
            </div>
			
            <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NAMA BELAKANG : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#fdfdff;"  name="NAMA_BELAKANG" value="<?php echo $row['NAMA_BELAKANG']; ?>" required type="text">
                </div>
            </div>
			
            <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">PASSWORD: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#fdfdff;"   name="password" value="<?php echo $row['password']; ?>" required type="text">
                </div>
            </div>
			
            <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">USERNAME: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#fdfdff;"  name="username" value="<?php echo $row['username']; ?>" required type="text">
                </div>
            </div>
			
			 <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">STATUS: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                <select style="color:#fdfdff;" name="status" size="1" id="status" class="form-control col-md-8 col-xs-12"   required type="text">
          <option value="" selected>Pilih Satu</option>
          <option value="Admin">Admin</option>
          <option value="User">User</option>           
        </select>
      </div>
            </div>	
                                                                                       
    <div class="item form-group" align="center"> 
                <div class="col-md-12 col-sm-12 col-xs-12" align="right">                                            
                  <a href="javascript:history.back()"  class="btn btn-warning">Batal</a>  
                  <button class="btn btn-primary" name="btnUbah">Simpan</button>  
                </div>
            </div>
        </div>   
        <br>
</form>

                            
                          </div>
                      </section>
                  </div>
              </div>
			  <br>

              <!-- page end-->
              </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->

<?php } ?>