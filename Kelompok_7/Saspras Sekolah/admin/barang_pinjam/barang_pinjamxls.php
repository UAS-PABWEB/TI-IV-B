<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=barang_pinjamxls.xls");//ganti nama sesuai keperluan
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
                              <h3 align="center"> Data Barang yang di Pinjam</h3><br>
                           
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2">
                                      <thead>
                                      <tr>
                                      
                                          <th>NO PINJAM</th>
                                          <th>TANGGAL PINJAM</th>
                                          <th>KODE BARANG</th>
                                          <th>NAMA BARANG</th>
                                          <th>JUMLAH PINJAM</th>
                                          <th>PEMINJAM</th>
                                          <th>TANGGAL KEMBALI</th>
                                          <th>KETERANGAN</th>
                                          
                                         
                                          
                                          
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                      error_reporting(0);
                                        require "config/koneksi.php";
                                        require "config/lib.php";
       
                                        $cek = $mysqli->query("SELECT * FROM  pinjam_barang    order by no_pinjam asc");
                                        while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
                                       
                                            $no_pinjam       = $row['no_pinjam'];
                                            $tgl_pinjam = $row['tgl_pinjam'];
                                            $kode_barang = $row['kode_barang'];
                                            $nama_brg = $row['nama_brg'];
                                            $jml_pinjam = $row['jml_pinjam'];
                                            $peminjam = $row['peminjam'];
                                            $tgl_kembali = $row['tgl_kembali'];
                                            $keterangan = $row['keterangan'];
                                            
                                            
                                            $no++;
                                       ?>
                                      <tr class="gradeX">
                                       
                                          <td><?php echo "$no_pinjam"; ?></td>
                                          <td><?php echo "$tgl_pinjam"; ?></td>
                                          <td><?php echo "$kode_barang"; ?></td>
                                          <td><?php echo "$nama_brg"; ?></td>
                                          <td><?php echo "$jml_pinjam"; ?></td>
                                          <td><?php echo "$peminjam"; ?></td>
                                          <td><?php echo "$tgl_kembali"; ?></td>
                                          <td><?php echo "$keterangan"; ?></td>
                                          
                                          
                                               
                                         
                                       
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
