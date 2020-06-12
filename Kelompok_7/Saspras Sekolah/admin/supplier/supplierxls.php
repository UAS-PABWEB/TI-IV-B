<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=supplierxls.xls");//ganti nama sesuai keperluan
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
                              <h3 align="center"> Data Supplier </h3><br>
                           
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2">
                                      <thead>
                                      <tr>
                                      
                                          <th>KODE SUPPLIER</th>
                                          <th>NAMA SUPPLIER</th>
                                          <th>ALAMAT SUPPLIER</th>
                                          <th>NO TELEPON SUPPLIER</th>
                                          <th>KOTA SUPPLIER</th>
                                         
                                         
                                          
                                          
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                      error_reporting(0);
                                        require "config/koneksi.php";
                                        require "config/lib.php";
       
                                        $cek = $mysqli->query("SELECT * FROM  supplier    order by kode_supplier asc");
                                        while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
                                       
                                            $kode_supplier       = $row['kode_supplier'];
                                            $nama_supplier = $row['nama_supplier'];
                                            $alamat_supplier = $row['alamat_supplier'];
                                            $telp_supplier = $row['telp_supplier'];
                                            $kota_supplier = $row['kota_supplier'];
                                            
                                            
                                            $no++;
                                       ?>
                                      <tr class="gradeX">
                                       
                                          <td><?php echo "$kode_supplier"; ?></td>
                                          <td><?php echo "$nama_supplier"; ?></td>
                                          <td><?php echo "$alamat_supplier"; ?></td>
                                          <td><?php echo "$telp_supplier"; ?></td>
                                          <td><?php echo "$kota_supplier"; ?></td>
                                          
                                          
                                               
                                         
                                       
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
