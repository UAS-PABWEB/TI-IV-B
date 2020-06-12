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
                              <h3 align="center"> Data Jurusan </h3><br>
                            <a href="?page=inputjurusan" class="btn btn-primary">+ Tambah Data</a>
                             <a href="jurusanxls.php" >+ Simpan Excel</a>
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2">
                                      <thead>
                                      <tr>
                                      
                                          <th>KODE JURUSAN</th>
                                          <th>KODE PELAJARAN</th>
                                         <th>NAMA JURUSAN</th>
                                          
                                          <th class="hidden-phone">Aksi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                      error_reporting(0);
                                        require "config/koneksi.php";
                                        require "config/lib.php";
       
                                        $cek = $mysqli->query("SELECT * FROM  JURUSAN    order by kd_jurusan asc");
                                        while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
                                       
                                            $kd_jurusan        = $row['kd_jurusan'];
                                            $kd_pelajaran  = $row['kd_pelajaran'];
                                             $nama_jurusan  = $row['nama_jurusan'];
                                            $no++;
                                       ?>
                                      <tr class="gradeX">
                                       
                                          <td><?php echo "$kd_jurusan"; ?></td>
                                          <td><?php echo "$kd_pelajaran"; ?></td>
                                           <td><?php echo "$nama_jurusan"; ?></td> 
                                          
                                               
                                         
                                          <td class="center hidden-phone">
                                             <a href="?page=ubah_jurusan&Token=<?php echo $row['kd_jurusan']; ?>" class="btn btn-primary btn-xs">Edit</i></a>
                                             <a href="?page=hapus_jurusan&Token=<?php echo $row['kd_jurusan']; ?>"  onClick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger btn-xs">Hapus</i></a>
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
