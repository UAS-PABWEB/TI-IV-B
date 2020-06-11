<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=dpxls.xls");//ganti nama sesuai keperluan
header("Pragma: no-cache");
header("Expires: 0");
//disini script laporan anda
?>
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
                              <h3 align="center"> Data Disposisi </h3><br>
                           </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2">
                                      <thead>
                                      <tr>
                                      
                                          <th>NO DISPOSISI</th>
                                          <th>NO AGENDA SURAT MASUK</th>
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
                                       
                                            $NO_DISPOSISI    	  = $row['NO_DISPOSISI'];
                                            $NO_AGENDASM       = $row['NO_AGENDASM'];
                                            $NO_AGENDADP        = $row['NO_AGENDADP'];
											$NO_SURAT        = $row['NO_SURAT'];
                                            $KEPADA       = $row['KEPADA'];
                                            $KETERANGAN           = $row['KETERANGAN'];
											$STATUS_SURAT            = $row['STATUS_SURAT'];
                                            $TANGGAPAN         = $row['TANGGAPAN'];
											
                                            
                                            
                                
                                            
                                            $no++;
                                       ?>
                                      <tr class="gradeX">
                                       
                                          <td><?php echo "$NO_DISPOSISI"; ?></td>
                                          <td><?php echo "$NO_AGENDASM"; ?></td>
                                          <td><?php echo "$NO_AGENDADP"; ?></td>
										  <td><?php echo "$NO_SURAT"; ?></td>
                                          <td><?php echo "$KEPADA"; ?></td>
                                          <td><?php echo "$KETERANGAN"; ?></td>
										  <td><?php echo "$STATUS_SURAT"; ?></td>
                                          <td><?php echo "$TANGGAPAN"; ?></td>
										  
               
                                          
                                               
                                         
                                         
                                      </tr>
                                      <?php } ?>
                                      </tbody>
                                      <tfoot>
                                     
                                      </tfoot>
                          </table>
                                </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->
