<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=skxls.xls");//ganti nama sesuai keperluan
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
                              <h3 align="center"> Data Surat Keluar </h3><br>
                           </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2">
                                      <thead>
                                      <tr>
                                      
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
                                       
                                            $NO_AGENDASK     	  = $row['NO_AGENDASK'];
                                            $ID       = $row['ID'];
                                            $JENIS_SURAT       = $row['JENIS_SURAT'];
                                            $TANGGAL_KIRIM           = $row['TANGGAL_KIRIM'];
                                            $NO_SURAT         = $row['NO_SURAT'];
											$PENGIRIM         = $row['PENGIRIM'];
											$PERIHAL         = $row['PERIHAL'];
                                            
                                            
                                
                                            
                                            $no++;
                                       ?>
                                      <tr class="gradeX">
                                       
                                          <td><?php echo "$NO_AGENDASK"; ?></td>
                                          <td><?php echo "$ID"; ?></td>
                                          <td><?php echo "$JENIS_SURAT"; ?></td>
                                          <td><?php echo "$TANGGAL_KIRIM"; ?></td>
                                          <td><?php echo "$NO_SURAT"; ?></td>
										  <td><?php echo "$PENGIRIM"; ?></td>
										  <td><?php echo "$PERIHAL"; ?></td>
               
                                          
                                               
                                         
                                         
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
