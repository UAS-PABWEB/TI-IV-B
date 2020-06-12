<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=barang_keluarxls.xls");//ganti nama sesuai keperluan
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
                              <h3 align="center"> Data Barang yang Keluar </h3><br>
                           
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2">
                                      <thead>
                                      <tr>
                                      
                                          <th>ID BARANG KELUAR</th>
                                          <th>KODE BARANG</th>
                                          <th>NAMA BARANG</th>
                                          <th>TANGGAL KELUAR</th>
                                          <th>PENERIMA</th>
                                          <th>JUMLAH BARANG YANG KELUAR</th>
                                          <th>KEPERLUAN</th>
                                         
                                         
                                          
                                          
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                      error_reporting(0);
                                        require "config/koneksi.php";
                                        require "config/lib.php";
       
                                        $cek = $mysqli->query("SELECT * FROM  keluar_barang    order by id_brg_keluar asc");
                                        while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
                                       
                                            $id_brg_keluar       = $row['id_brg_keluar'];
                                            $kode_barang = $row['kode_barang'];
                                            $nama_barang = $row['nama_barang'];
                                            $tgl_keluar = $row['tgl_keluar'];
                                            $penerima = $row['penerima'];
                                            $jml_brg_keluar = $row['jml_brg_keluar'];
                                            $keperluan = $row['keperluan'];
                                            
                                            
                                            $no++;
                                       ?>
                                      <tr class="gradeX">
                                       
                                          <td><?php echo "$id_brg_keluar"; ?></td>
                                          <td><?php echo "$kode_barang"; ?></td>
                                          <td><?php echo "$nama_barang"; ?></td>
                                          <td><?php echo "$tgl_keluar"; ?></td>
                                          <td><?php echo "$penerima"; ?></td>
                                          <td><?php echo "$jml_brg_keluar"; ?></td>
                                          <td><?php echo "$keperluan"; ?></td>
                                          
                                          
                                               
                                         
                                       
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
