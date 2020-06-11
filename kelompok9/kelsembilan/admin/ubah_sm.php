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

  $NO_AGENDASM          		= $_POST['NO_AGENDASM'];
  $ID         	    			= $_POST['ID'];

  $JENIS_SURAT         	    = $_POST['JENIS_SURAT'];
  $TANGGAL_KIRIM         		= $_POST['TANGGAL_KIRIM'];
  $TANGGAL_TERIMA         	= $_POST['TANGGAL_TERIMA'];
  $NO_SURAT         			= $_POST['NO_SURAT'];
  $PENGIRIM         			= $_POST['PENGIRIM'];
  $PERIHAL         			= $_POST['PERIHAL'];
 
         $Token = $_GET['Token'];
         $dat = $mysqli->query("UPDATE surat_masuk SET   
                NO_AGENDASM        		   = '$NO_AGENDASM',
                ID            			   = '$ID',

                JENIS_SURAT     	       = '$JENIS_SURAT',
                TANGGAL_KIRIM    	   = '$TANGGAL_KIRIM',
                TANGGAL_TERIMA      	   = '$TANGGAL_TERIMA',
				NO_SURAT      		   = '$NO_SURAT',
				PENGIRIM      		   = '$PENGIRIM',
				PERIHAL      		       = '$PERIHAL'
                                  
                                                 WHERE NO_AGENDASM               = '$Token'")  ;

 
 if($dat){
           echo "<script>alert('Berhasil di ubah');location.href='?page=data_sm'</script>";
           // echo "<meta http-equiv='refresh' content='0; url=?page=input_data'>";
         } else {
           echo "<script>alert('Oops! Terjadi Kesalahan ');location.href='javascript:history.back()';</script>";
         }
      

        

   
} // Penutup POST
$Token = $_GET['Token'];
$cek = $mysqli->query("SELECT * FROM  surat_masuk WHERE NO_AGENDASM='$Token'");
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
                              <h3 align="center">Sunting Data Surat Masuk </h3><br>
                             
                          </header>
             
  <div class="panel-body pull-left">
    <div class="form">
      <form class="form-horizontal form-label-left"  enctype="multipart/form-data"  action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <div class="row"> 
       <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NO AGENDA: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#fdfdff;"  name="NO_AGENDASM" value="<?php echo $row['NO_AGENDASM']; ?>" required type="text">      
                </div>
            </div>

  <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">ID : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#fdfdff;"   name="ID" value="<?php echo $row['ID']; ?>" required type="text">
                </div>
            </div>
			
  
			
            <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">JENIS SURAT : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"  style="color:#fdfdff;"  name="JENIS_SURAT" value="<?php echo $row['JENIS_SURAT']; ?>" required type="text">
                </div>
            </div>
			
            <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">TANGGAL KIRIM : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#fdfdff;"  name="TANGGAL_KIRIM" value="<?php echo $row['TANGGAL_KIRIM']; ?>" required type="date">
                </div>
            </div>
			
			  <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">TANGGAL TERIMA : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"  style="color:#fdfdff;"  name="TANGGAL_TERIMA" value="<?php echo $row['TANGGAL_TERIMA']; ?>" required type="date">
                </div>
            </div>
			
            <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NO SURAT : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#fdfdff;"  name="NO_SURAT" value="<?php echo $row['NO_SURAT']; ?>" required type="text">
                </div>
            </div>
			
            <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">PENGIRIM : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#fdfdff;"   name="PENGIRIM" value="<?php echo $row['PENGIRIM']; ?>" required type="text">
                </div>
            </div>
			
            <div class="item form-group" align="left">
                <label style="color:#fdfdff;" class="control-label col-md-4 col-sm-4 col-xs-12" for="name">PERIHAL : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#fdfdff;"  name="PERIHAL" value="<?php echo $row['PERIHAL']; ?>" required type="text">
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
			  <br>

              <!-- page end-->
              </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->

<?php } ?>