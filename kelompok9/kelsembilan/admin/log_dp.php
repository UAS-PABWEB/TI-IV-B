<br>
<br>
<br>
<br>
<br>
<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->

    <section id="services">
        <div class="container">
          
                <div class="row">
                    <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
						  <script language="javascript">
						  

</script>
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2">
                                      <thead>
                                      <tr>
								
                                      <th>NO</th>
                                          <th>NO DISPOSISI</th>
                                          <th>WAKTU CATAT</th>
                                          
                                          
                                         
                                         
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                      error_reporting(0);
                                        require "config/koneksi.php";
                                        require "config/lib.php";
       
                                        $cek = $mysqli->query("SELECT * FROM  log_disposisi    order by NOMOR_DISPOSISI asc");
                                        while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
                                       
                                            $NOMOR_DISPOSISI    				 = $row['NOMOR_DISPOSISI'];
                                            $WAKTU_CATAT      	 			 = $row['WAKTU_CATAT'];
                                           
                                            
                                            $no++;
                                       ?>
                                      <tr class="gradeX">
                                      
       <td><div align="center"><?php echo $no;?></td>
                                          <td><?php echo "$NOMOR_DISPOSISI"; ?></td>
                                          <td><?php echo "$WAKTU_CATAT"; ?></td>
                                          
     <tr>
        <td colspan="3">

                                        
    </tr>
                                      </tr>
                                      <?php } ?>
                                      </tbody>
                                      <tfoot>
                                     
                                      </tfoot>
                          </table>
                                </div>
								<div class="text-center">
								<p><a  class="btn btn-lg btn-primary"  href="?page=data_dp">Kembali</a>
								<table width="100%" cellpadding="3" cellspacing="1">

<img src="images/a.png" width="200" height="200">
  </div>

  </table>
                          </div>
                      </section>
                  </div>
              </div>
			
			  <br>
<br>
<br>
<br>
<br>
              <!-- page end-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->
