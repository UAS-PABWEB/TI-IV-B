<div style="background-image: url(images/ed.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container-login100">
				<div class="row">
					<div class="col-sm-offset-0 col-xs-12 col-xs-offset-0">
<?php 

  require "config/koneksi.php";
  require "config/lib.php";


if(isset($_POST['btnUbah'])){

  

  # Baca Variabel Data Form

  $NO_DISPOSISI          		= $_POST['NO_DISPOSISI'];
  $NO_AGENDASM         	   			    = $_POST['NO_AGENDASM'];
  $NO_AGENDADP            				= $_POST['NO_AGENDADP'];
  $NO_SURAT         	    = $_POST['NO_SURAT'];
  $KEPADA         		= $_POST['KEPADA'];
  $KETERANGAN         			= $_POST['KETERANGAN'];
  $STATUS_SURAT         			= $_POST['STATUS_SURAT'];
  $TANGGAPAN         			= $_POST['TANGGAPAN'];
 
         $Token = $_GET['Token'];
         $dat = $mysqli->query("UPDATE disposisi SET   
                NO_DISPOSISI        			   = '$NO_DISPOSISI',
                NO_AGENDASM             				   = '$NO_AGENDASM',
                NO_AGENDADP          				   = '$NO_AGENDADP',
                NO_SURAT     	       	   = '$NO_SURAT',
                KEPADA      		   = '$KEPADA',
                KETERANGAN      		   	   = '$KETERANGAN',
				STATUS_SURAT      		  	   = '$STATUS_SURAT',
				TANGGAPAN      		  		   = '$TANGGAPAN'
                                  
                                                 WHERE NO_DISPOSISI               = '$Token'")  ;

 
 if($dat){
           echo "<script>alert('Berhasil di ubah');location.href='?page=data_dp'</script>";
           // echo "<meta http-equiv='refresh' content='0; url=?page=input_data'>";
         } else {
           echo "<script>alert('Oops! Terjadi Kesalahan ');location.href='javascript:history.back()';</script>";
         }
      

        

   
} // Penutup POST
$Token = $_GET['Token'];
$cek = $mysqli->query("SELECT * FROM  disposisi WHERE NO_DISPOSISI='$Token'");
  while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
?>

</script>
<section id="main-slider1" class="carousel">
        
         </section><!--/#main-slider-->
		 
<section ="main-slid_bukuer1" class="carousel">
        
   <br>
<br>
<br>         
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
                              <h3 align="center">Sunting Data Disposisi </h3><br>
                             
                          </header>
             
  <div class="panel-body pull-left">
    <div class="form">
      <form class="form-horizontal form-label-left"  enctype="multipart/form-data"  action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <div class="row"> 
       <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NO DISPOSISI: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#fdfdff;"  name="NO_DISPOSISI" value="<?php echo $row['NO_DISPOSISI']; ?>" required type="text">     
                </div>
            </div>

  <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NO AGENDA SM : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#fdfdff;"   name="NO_AGENDASM" value="<?php echo $row['NO_AGENDASM']; ?>" required type="text">
                </div>
            </div>
			
            <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NO AGENDA : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#fdfdff;"  name="NO_AGENDADP" value="<?php echo $row['NO_AGENDADP']; ?>" required type="text">
                </div>
            </div>
			
            <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NO SURAT : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#fdfdff;"   name="NO_SURAT" value="<?php echo $row['NO_SURAT']; ?>" required type="text">
                </div>
            </div>
			
            <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">KEPADA : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#fdfdff;"  name="KEPADA" value="<?php echo $row['KEPADA']; ?>" required type="text">
                </div>
            </div>
			
			 
            <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">KETERANGAN : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#fdfdff;"  name="KETERANGAN" value="<?php echo $row['KETERANGAN']; ?>" required type="text">
                </div>
            </div>
			
            <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">STATUS SURAT : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#fdfdff;"  name="STATUS_SURAT" value="<?php echo $row['STATUS_SURAT']; ?>" required type="text">
                </div>
            </div>
			
            <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">TANGGAPAN : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#fdfdff;"  name="TANGGAPAN" value="<?php echo $row['TANGGAPAN']; ?>" required type="text">
                </div>
            </div>

                                                                                       
   <div class="item form-group"> 
                <div class="col-md-12 col-sm-12 col-xs-12" align="right">                                            
                  <a href="javascript:history.back()" class="btn btn-warning">Batal</a>  
                  <button class="btn btn-primary" name="btnUbah">Simpan</button>  
                </div>
            </div>
			<br>
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