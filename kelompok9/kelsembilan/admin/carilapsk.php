<div  style="background-image: url(images/lp.jpg);" data-stellar-background-ratio="0.10">
			<div class="overlay"></div>
			<div class="container-login100">
				<div class="row">
					<div class="col-sm-12 col-sm-offset-0 ">
<?php
include "config/lib.php";
include "config/koneksi.php";
$token = $_GET['token'];
$cek = $mysqli->query("SELECT * FROM  lap_sk2 WHERE NO_AGENDASK ='$token'");
  while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
?>
 <style type="text/css">
    .jumbotron {
    width: 70%;
    box-shadow: 2px  1px 9px 0  #333;
     
    }
    </style>
                                                                          
 
 

<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->

    <section id="services">
        <div class="container">
           
<div align="center"> 
<br>
<br>
 <div class="row jumbotron "  >
 <h2 style="font-size:19px;">Detail Data Surat Keluar</h2>
 <hr>

        <div class="col-md-3 col-sm-3 col-xs-12" align="right">
            
            <div class="item form-group">
                 
             
                    <br>                                       
                   
                </div>
            </div>  
             
          

        </div>

       <div style="color: #ffc926;" class="col-md-9 col-sm-9 col-xs-12" style="font-size:14px;">

            
         <table class="table     table-hover" border="0">
          <tr>
                                 <td><label>No AgendaSK</label></td>
                                  <td><label>: </label></td>
                                 <td><label><?php echo $row['NO_AGENDASK']; ?></label></td> 
                              </tr>
                              
                              <tr>
                                  <td><label>Id Petugas</label></td>
                                  <td><label>: </label></td>
                                  <td><label><?php echo $row['ID']; ?></label></td> 
                              </tr>
							  
							 
                              <tr>
                                  <td><label>Jenis Surat Keluar</label></td>
                                  <td><label>: </label></td>
                                 <td><label><?php echo $row['JENIS_SURAT']; ?></label></td> 
                              </tr>
                             
                               <tr>
                                 <td><label>Tanggal Kirim Surat</label></td>
                                  <td><label>: </label></td>
                                  <td><label><?php echo $row['TANGGAL_KIRIM']; ?></label></td> 
                              </tr>
                              
							  
                               <tr>
                                 <td><label>No Surat Keluar</label></td>
                                  <td><label>: </label></td>
                                 <td><label><?php echo $row['NO_SURAT']; ?></label></td> 
                              </tr>
                              
                                      <tr>
                                 <td><label>Pengirim Surat Keluar</label></td>
                                  <td><label>: </label></td>
                                   <td><label><?php echo $row['PENGIRIM']; ?></label></td> 
                              </tr>
							  
                               <tr>
                                 <td><label>Perihal Surat Keluar</label></td>
                                  <td><label>: </label></td>
                                 <td><label><?php echo $row['PERIHAL']; ?></label></td> 
                              </tr> 
                          </table>
        
    </div> 
    <a href="doc.php?token=<?php echo $row['NO_AGENDASK'] ?>" style="color:#ffc926;">Export to doc</a>
                                                                                        
    </div>
	
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


       </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->


<?php } ?>

 