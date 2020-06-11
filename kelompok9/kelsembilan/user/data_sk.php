<br>
<br>
<br>
<br>
<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->

    <section id="services">
        <div class="container">
            <div class="box first">
            <form method="post" action="?page=deleteallsk">
                <div class="row">
                    <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                 <center>
								<img src="images/SK.png" width="400" height="140">
								</center>
								<br>
							<div>
                            <a href="?page=input_sk" class="btn btn-primary">+ Tambah Data</a>
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2">
                                      <thead>
                                      <tr>
									  
                                      <th>NO</th>
                                          <th>NO AGENDA</th>
                                          <th>ID</th>
                                          <th>JENIS SURAT</th>
                                          <th>TANGGAL KIRIM</th>
										  <th>NO SURAT</th>
                                          <th>PENGIRIM</th>
										  <th>PERIHAL</th>
										  
                                      
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                      error_reporting(0);
                                        require "config/koneksi.php";
                                        require "config/lib.php";
       
                                        $cek = $mysqli->query("SELECT * FROM  surat_keluar    order by NO_AGENDASK asc");
                                        while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
                                       
                                            $NO_AGENDASK    				 = $row['NO_AGENDASK'];
                                            $ID      						 = $row['ID'];
                                            $JENIS_SURAT   		 		 = $row['JENIS_SURAT'];
                                            $TANGGAL_KIRIM 			     = $row['TANGGAL_KIRIM'];
											$NO_SURAT 			     	 = $row['NO_SURAT'];
											$PENGIRIM  			   	     = $row['PENGIRIM'];
											$PERIHAL  			     	 = $row['PERIHAL'];
											
											
                                            
                                            $no++;
                                       ?>
                                      <tr class="gradeX">
                                             
       <td><div align="center"><?php echo $no;?></td>
                                          <td><?php echo "$NO_AGENDASK"; ?></td>
                                          <td><?php echo "$ID"; ?></td>
                                          <td><?php echo "$JENIS_SURAT"; ?></td>
										  <td><?php echo "$TANGGAL_KIRIM"; ?></td>
										  <td><?php echo "$NO_SURAT"; ?></td>
										  <td><?php echo "$PENGIRIM"; ?></td>
										  <td><?php echo "$PERIHAL"; ?></td>
                                               
                                         
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
              <!-- page end-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->
