<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=barang_masukxls.xls");//ganti nama sesuai keperluan
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
                              <h3 align="center"> Data Barang yang Masuk </h3><br>
                           
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2">
                                      <thead>
                                      <tr>
                                      
                                          <th>ID MASUK BARANG</th>
                                          <th>KODE BARANG</th>
                                          <th>NAMA BARANG</th>
                                          <th>TANGGAL MASUK</th>
                                          <th>JUMLAH MASUK</th>
                                          <th>KODE SUPPLIER</th>
                                         
                                          
                                          
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                      error_reporting(0);
                                        require "config/koneksi.php";
                                        require "config/lib.php";
       
                                        $cek = $mysqli->query("SELECT * FROM  masuk_barang    order by id_msk_brg asc");
                                        while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
                                       
                                            $id_msk_brg       = $row['id_msk_brg'];
                                            $kode_barang = $row['kode_barang'];
                                            $nama_brg = $row['nama_brg'];
                                            $tgl_masuk = $row['tgl_masuk'];
                                            $jml_masuk = $row['jml_masuk'];
                                            $kode_supplier = $row['kode_supplier'];
                                            
                                            
                                            $no++;
                                       ?>
                                      <tr class="gradeX">
                                       
                                          <td><?php echo "$id_msk_brg"; ?></td>
                                          <td><?php echo "$kode_barang"; ?></td>
                                          <td><?php echo "$nama_brg"; ?></td>
                                          <td><?php echo "$tgl_masuk"; ?></td>
                                          <td><?php echo "$jml_masuk"; ?></td>
                                          <td><?php echo "$kode_supplier"; ?></td>
                                          
                                          
                                               
                                         
                                       
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
