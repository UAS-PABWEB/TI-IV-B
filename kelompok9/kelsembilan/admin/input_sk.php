<div style="background-image: url(images/in.jpg);" data-stellar-background-ratio="0.10">
			<div class="overlay"></div>
			<div class="container-login100">
				<div class="row">
					<div class="col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
<?php
$ambilkan = mysql_query("SELECT MAX(NO_AGENDASK) AS NO_AGENDASK FROM surat_keluar");
$tampil1 = mysql_fetch_array($ambilkan);
$id=$tampil1['NO_AGENDASK'];
$nourut = (int)  substr($id, 4, 8);
$nourut++;
$char = "SK.";
$NO_AGENDASK = $char . sprintf("%02s", $nourut);
 error_reporting(0);
 include "config/koneksi.php";



if(isset($_POST['btnSimpan'])){
 # Baca Variabel Data Form
  $NO_AGENDASK         			  = $_POST['NO_AGENDASK'];
  $ID     						  = $_POST['ID'];
  $JENIS_SURAT        		  = $_POST['JENIS_SURAT'];
  $TANGGAL_KIRIM       	      = $_POST['TANGGAL_KIRIM'];
  $NO_SURAT      	          = $_POST['NO_SURAT'];
  $PENGIRIM       	          = $_POST['PENGIRIM'];
  $PERIHAL       	        	  = $_POST['PERIHAL'];
 

    $myQry = $mysqli->query("INSERT INTO surat_keluar (NO_AGENDASK,ID,JENIS_SURAT,TANGGAL_KIRIM,NO_SURAT,PENGIRIM,PERIHAL)
VALUES ('$NO_AGENDASK','$ID','$JENIS_SURAT','$TANGGAL_KIRIM','$NO_SURAT','$PENGIRIM','$PERIHAL')") or die(mysqli_error($mysqli));
 
 
         if($myQry){
           echo "<script>alert('Berhasil di simpan');location.href='?page=data_sk'</script>";
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
                              <h3 align="center"><font face="Times New Roman">Input Data Surat Keluar</font></h3><br>
                             
                          </header>
<form class="form-horizontal form-label-center" id="form1" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <div class="row" align="center">
    <div class="col-md-6 col-sm-6 col-xs-12" align="center">
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NO AGENDA : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
       <input  class="form-control col-md-8 col-xs-12" style="color:#000000;"  name="NO_AGENDASK"  required type="text" required="required" value="<?php echo $NO_AGENDASK ?>"/></td>
                </div>
            </div>
			
          <div class="item form-group" align="center">
     <label class="control-label col-md-4 col-sm-4 col-xs-12"<td>ID :</td><span class="required"></span></label>
	 <div class="col-md-8 col-sm-8 col-xs-12">      
     <?php
                  mysql_connect("localhost","root","");
                  mysql_select_db("kelsembilan");
                  $result=mysql_query("select * from petugas");
                  $jsArray="var prdName=new Array();\n";
                  echo '<select class="form-control col-md-8 col-xs-12" style="color:#000000;" name="ID" onchange="changevalue(this.value)">';
                  echo'<option>Pilih</option>';
                  while ($row = mysql_fetch_array($result)){
                    echo '<option value="'.$row['ID'].'">'. $row['ID'].'</option>';
                  }
                  echo '</select>';
?>
				 </td>
    </tr>
    <tr>
	</div>
            </div>
			
            
		
			
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">JENIS SURAT: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#000000;"  name="JENIS_SURAT"  required type="text">
                </div>
            </div>
			
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">TANGGAL KIRIM: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#000000;"  name="TANGGAL_KIRIM"  required type="date">
                </div>
            </div>
			
			<div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NO SURAT: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#000000;"  name="NO_SURAT"  required type="text">
                </div>
            </div>
			<div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">PENGIRIM: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" style="color:#000000;"  name="PENGIRIM"  required type="text">
                </div>
            </div>

			<div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">PERIHAL: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <textarea input  class="form-control col-md-8 col-xs-12" style="color:#000000;"  name="PERIHAL"  required type="text"></textarea>
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
  <br>
</form>

 </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->
