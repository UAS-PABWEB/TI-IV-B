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
                              <h3 align="center"> Data Wali Murid </h3><br>
                            <a href="?page=input_wali" class="btn btn-primary">+ Tambah Data</a>
                             <a href="walixls.php" >+ Simpan Excel</a>
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2">
                                      <thead>
                                      <tr>
                                      
                                          <th>KODE WALI</th>
                                          <th>NISN</th>
                                          <th>NAMA AYAH</th>
                                          <th>PEKERJAAN AYAH</th>
                                          <th>NAMA IBU</th>
                                          <th>PEKERJAAN IBU</th>
                                          <th>ALAMAT WALI</th>
                                          <th>NOMOR TELEPON</th>
                                         
                                         
                                          
                                          <th class="hidden-phone">Aksi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                      error_reporting(0);
                                        require "config/koneksi.php";
                                        require "config/lib.php";
       
                                        $cek = $mysqli->query("SELECT * FROM  wali_murid    order by kd_wali asc");
                                        while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
                                       
                                            $kd_wali       = $row['kd_wali'];
                                            $nisn = $row['nisn'];
                                            $nama_ayah = $row['nama_ayah'];
                                            $pekerjaan_ayah = $row['pekerjaan_ayah'];
                                            $nama_ibu = $row['nama_ibu'];
                                            $pekerjaan_ibu = $row['pekerjaan_ibu'];
                                            $alamat_wali = $row['alamat_wali'];
                                            $telp_wali = $row['telp_wali'];
        
                                
                                            
                                            $no++;
                                       ?>
                                      <tr class="gradeX">
                                       
                                          <td><?php echo "$kd_wali"; ?></td>
                                          <td><?php echo "$nisn"; ?></td>
                                          <td><?php echo "$nama_ayah"; ?></td>
                                          <td><?php echo "$pekerjaan_ayah"; ?></td>
                                          <td><?php echo "$nama_ibu"; ?></td>
                                          <td><?php echo "$pekerjaan_ibu"; ?></td>
                                          <td><?php echo "$alamat_wali"; ?></td>
                                          <td><?php echo "$telp_wali"; ?></td>

                                           
                                          
                                               
                                         
                                          <td class="center hidden-phone">
                                             <a href="?page=ubah_wali&Token=<?php echo $row['kd_wali']; ?>" class="btn btn-primary btn-xs">Edit</i></a>
                                             <a href="?page=hapus_wali&Token=<?php echo $row['kd_wali']; ?>"  onClick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger btn-xs">Hapus</i></a>
                                          </td>
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
