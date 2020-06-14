<br>
<br>
<br>
<br>
<br>

<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->

    <section id="services">
        <div class="container">
            <div class="box first">

                <div class="row">
                    <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
						  <script language="javascript">
						  

</script>
                              <center>
								<img src="images/DP.png" width="400" height="140">
								</center>
								<br>
							<div>
							 <a href="?page=input_dp" class="btn btn-primary">+ Tambah Data</a>
                            <a href="?page=log_dp" class="btn btn-primary" >Log Disposisi</a>
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2">
                                      <thead>
                                      <tr>
				                       <th>NO</th>
                                          <th>NO DISPOSISI</th>
                                          <th>NO SURAT MASUK</th>
                                          <th>NO AGENDA</th>
                                          <th>NO SURAT</th>
										  <th>KEPADA</th>
                                          <th>KETERANGAN</th>
										  <th>STATUS SURAT</th>
										  <th>TANGGAPAN</th>
                                          
                                         
                                          
                         
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                      error_reporting(0);
                                        require "config/koneksi.php";
                                        require "config/lib.php";
       
                                        $cek = $mysqli->query("SELECT * FROM  disposisi    order by NO_DISPOSISI asc");
                                        while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
                                       
                                            $NO_DISPOSISI    				 = $row['NO_DISPOSISI'];
                                            $NO_AGENDASM      	 = $row['NO_AGENDASM'];
                                            $NO_AGENDADP       = $row['NO_AGENDADP'];
                                            $NO_SURAT    		 = $row['NO_SURAT'];
                                            $KEPADA  			 = $row['KEPADA'];
											$KETERANGAN				 = $row['KETERANGAN'];
											$STATUS_SURAT				 = $row['STATUS_SURAT'];
											$TANGGAPAN				 = $row['TANGGAPAN'];
                                            
                                            $no++;
                                       ?>
                                      <tr class="gradeX">
                                            
       <td><div align="center"><?php echo $no;?></td>
                                          <td><?php echo "$NO_DISPOSISI"; ?></td>
                                          <td><?php echo "$NO_AGENDASM"; ?></td>
                                          <td><?php echo "$NO_AGENDADP"; ?></td>
                                          <td><?php echo "$NO_SURAT"; ?></td>
                                          <td><?php echo "$KEPADA"; ?></td>                       
                                          <td><?php echo "$KETERANGAN"; ?></td>
										  <td><?php echo "$STATUS_SURAT"; ?></td>
										  <td><?php echo "$TANGGAPAN"; ?></td>
     
                                         
                              
                                           
                                      <?php } ?>
                                      </tbody>
                                      <tfoot>
                                     
                                      </tfoot>
                          </table>
                                </div>
								<table width="100%" cellpadding="3" cellspacing="1">

      <div class="text-center">
								   <img src="images/us.png" width="200" height="200">
								   </div>
    </tr>
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
