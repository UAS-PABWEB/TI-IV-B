<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=barangxls.xls");//ganti nama sesuai keperluan
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
                              <h3 align="center"> Data Barang </h3><br>
                          
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2">
                                      <thead>
                                      <tr>
                                      
                                          <th>KODE BARANG</th>
                                          <th>NAMA BARANG</th>
                                          <th>SPESIFIKASI</th>
                                          <th>LOKASI BARANG</th>
                                          <th>KATEGORI</th>
                                          <th>JUMLAH BARANG</th>
                                          <th>KONDISI</th>
                                          <th>JENIS BARANG</th>
                                          <th>SUMBER DANA</th>
                                          
                                          
                                         
                                      </thead>
                                      <tbody>
                                      <?php 
                                      error_reporting(0);
                                        require "config/koneksi.php";
                                        require "config/lib.php";
       
                                        $cek = $mysqli->query("SELECT * FROM  barang    order by kode_barang asc");
                                        while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
                                       
                                            $kode_barang    = $row['kode_barang'];
                                            $nama_barang    = $row['nama_barang'];
                                            $spesifikasi    = $row['spesifikasi'];
                                            $lokasi_barang  = $row['lokasi_barang'];
                                            $kategori       = $row['kategori'];
                                            $jml_barang     = $row['jml_barang'];
                                            $kondisi        = $row['kondisi'];
                                            $jenis_barang   = $row['jenis_barang'];
                                            $sumber_dana    = $row['sumber_dana'];
                                            
                                            $no++;
                                       ?>
                                      <tr class="gradeX">
                                       
                                          <td><?php echo "$kode_barang"; ?></td>
                                          <td><?php echo "$nama_barang"; ?></td>
                                          <td><?php echo "$spesifikasi"; ?></td>
                                          <td><?php echo "$lokasi_barang"; ?></td>
                                          <td><?php echo "$kategori"; ?></td>
                                          <td><?php echo "$jml_barang"; ?></td>
                                          <td><?php echo "$kondisi"; ?></td>
                                          <td><?php echo "$jenis_barang"; ?></td>
                                          <td><?php echo "$sumber_dana"; ?></td>
                                           
                                          
                                               
                                         
                                         
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
