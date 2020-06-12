<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=stokxls.xls");//ganti nama sesuai keperluan
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
                              <h3 align="center"> Stok </h3><br>
                          
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2">
                                      <thead>
                                      <tr>
                                      
                                             <th>KODE BARANG</th>
                                          <th>NAMA BARANG</th>
                                          <th>JUMLAH BARANG MASUK</th>
                                          <th>JUMLAH BARANG KELUAR</th>
                                          <th>TOTAL BARANG</th>
                                          <th>KETERANGAN</th>
                                       
                                         
                                         
                                          
                                         
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                      error_reporting(0);
                                        require "config/koneksi.php";
                                        require "config/lib.php";
       
                                        $cek = $mysqli->query("SELECT * FROM  stok    order by kode_barang asc");
                                        while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
                                       
                                           $kode_barang       = $row['kode_barang'];
                                            $nama_brg = $row['nama_brg'];
                                            $jml_brg_masuk = $row['jml_brg_masuk'];
                                            $jml_brg_keluar = $row['jml_brg_keluar'];
                                            $total_barang = $row['total_barang'];
                                            $keterangan = $row['keterangan'];
                                                                       
                                            $no++;
                                       ?>
                                      <tr class="gradeX">
                                       
                                          <td><?php echo "$kode_barang"; ?></td>
                                          <td><?php echo "$nama_brg"; ?></td>
                                          <td><?php echo "$jml_brg_masuk"; ?></td>
                                          <td><?php echo "$jml_brg_keluar"; ?></td>
                                          <td><?php echo "$total_barang"; ?></td>
                                          <td><?php echo "$keterangan"; ?></td
                                                                              
                                          
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
