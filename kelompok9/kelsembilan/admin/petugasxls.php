<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=petugasxls.xls");//ganti nama sesuai keperluan
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
                              <h3 align="center"> Data Petugas </h3><br>
                           </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2">
                                      <thead>
                                      <tr>
                                      
                                          <th>ID</th>
                                          <th>NAMA DEPAN</th>
                                          <th>NAMA BELAKANG</th>
                                          <th>PASSWORD</th>
                                          <th>USERNAME</th>
                                          <th>STATUS</th>	
                                         
                                         
                                         
                                          
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                      error_reporting(0);
                                        require "config/koneksi.php";
                                        require "config/lib.php";
       
                                        $cek = $mysqli->query("SELECT * FROM  petugas    order by ID asc");
                                        while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
                                       
                                            $ID     	  = $row['ID'];
                                            $NAMA_DEPAN       = $row['NAMA_DEPAN'];
                                            $NAMA_BELAKANG        = $row['NAMA_BELAKANG'];
                                            $password       = $row['password'];
                                            $username           = $row['username'];
                                            $status         = $row['status'];
                                            
                                            
                                
                                            
                                            $no++;
                                       ?>
                                      <tr class="gradeX">
                                       
                                          <td><?php echo "$ID"; ?></td>
                                          <td><?php echo "$NAMA_DEPAN"; ?></td>
                                          <td><?php echo "$NAMA_BELAKANG"; ?></td>
                                          <td><?php echo "$password"; ?></td>
                                          <td><?php echo "$username"; ?></td>
                                          <td><?php echo "$status"; ?></td>
               
                                          
                                               
                                         
                                         
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
