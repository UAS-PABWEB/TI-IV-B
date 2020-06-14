<div style="background-image: url(images/in.jpg);" data-stellar-background-ratio="0.10">
			<div class="overlay"></div>
			<div class="container-login100">
				<div class="row">
					<div class="col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 ">
<?php
$ambilkan = mysql_query("SELECT MAX(ID) AS ID FROM petugas");
$tampil1 = mysql_fetch_array($ambilkan);
$id=$tampil1['ID'];
$nourut = (int)  substr($id, 4, 8);
$nourut++;
$char = "Pet.";
$ID = $char . sprintf("%02s", $nourut);
 error_reporting(0);
 include "config/koneksi.php";



if(isset($_POST['btnSimpan'])){
 # Baca Variabel Data Form
  $ID         			  = $_POST['ID'];
  $NAMA_DEPAN             = $_POST['NAMA_DEPAN'];
  $NAMA_BELAKANG          = $_POST['NAMA_BELAKANG'];
  $username       	          = $_POST['username'];
  $password        		  = $_POST['password'];
  $status       	          = $_POST['status'];
 

    $myQry = $mysqli->query("INSERT INTO petugas (ID,NAMA_DEPAN,NAMA_BELAKANG,username,password,status)
VALUES ('$ID','$NAMA_DEPAN','$NAMA_BELAKANG','$username','$password','$status')") or die(mysqli_error($mysqli));
 
 
         if($myQry){
           echo "<script>alert('Berhasil di simpan');location.href='?page=data_petugas'</script>";
           // echo "<meta http-equiv='refresh' content='0; url=?page=data_data'>";
         } else {
           echo "<script>alert('Oops! Terjadi Kesalahan ');location.href='javascript:history.back()';</script>";
         }
     

        
  
      
   
} // Penutup POST
  
  
 

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
			<marquee behavior="scroll" ><img src="images/put.png" width="500" height="200"></marquee>
                <div class="row">
               

    <section id="services">
        <div class="container">
            <div class="box first">
                <div class="row">
                 <header class="panel-heading">

                             <h3 align="center"><font face="Times New Roman">Input Data Petugas</font></h3><br>
                             
                          </header>
<form class="form-horizontal form-label-center" id="form1" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <div class="row" align="center">
    <div class="col-md-6 col-sm-6 col-xs-12" align="center">
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">ID PETUGAS : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
       <input  class="form-control col-md-8 col-xs-12" style="color:#000000;"   name="ID"  required type="text" required="required" value="<?php echo $ID ?>"/></td>
                </div>
            </div>
			
           <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NAMA DEPAN: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#000000;"  name="NAMA_DEPAN"  required type="text">
                </div>
            </div>
			
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NAMA BELAKANG : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#000000;"  name="NAMA_BELAKANG"  required type="text">
                </div>
            </div>
			
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">USERNAME: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#000000;"  name="username"  required type="text">
                </div>
            </div>
			
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">PASSWORD: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#000000;"  name="password"  required type="password">
                </div>
            </div>
			
			 <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12"  for="name">STATUS: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                <select style="color:#000000;" name="status" size="1" id="status" class="form-control col-md-8 col-xs-12"   required type="text">
          <option value="" selected>Pilih Satu :</option>
          <option value="Admin">Admin</option>
          <option value="User">User</option>           
        </select>
      </div>
            </div>	
			

			
            <div class="item form-group" align="center"> 
                <div class="col-md-12 col-sm-12 col-xs-12" align="right">                                            
                  <a href="javascript:history.back()"  class="btn btn-warning">Batal</a>  
                  <button class="btn btn-primary" name="btnSimpan">Simpan</button>  
                </div>
            </div>
        </div>   
        <br>

                                                                        
  </div>
</form>
           <br>
<br>
<br>      
 </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->
