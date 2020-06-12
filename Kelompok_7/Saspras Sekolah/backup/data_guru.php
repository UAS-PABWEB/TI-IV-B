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
                              <h3 align="center"> Data Guru </h3><br>
                            <a href="?page=inputguru" class="btn btn-primary">+ Tambah Data</a>
                             <a href="guruxls.php" >+ Simpan Excel</a>
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2">
                                      <thead>
                                      <tr>
                                      
                                          <th>KODE GURU</th>
                                          <th>KODE JURUSAN</th>
                                          <th>NIP</th>
                                          <th>NAMA GURU</th>
                                          <th>ALAMAT GURU</th>
                                          <th>NO TELEPON</th>
                                         
                                         
                                          
                                          <th class="hidden-phone">Aksi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                      error_reporting(0);
                                        require "config/koneksi.php";
                                        require "config/lib.php";
       
                                        $cek = $mysqli->query("SELECT * FROM  guru    order by kd_guru asc");
                                        while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
                                       
                                            $kd_guru       = $row['kd_guru'];
                                            $kd_jurusan = $row['kd_jurusan'];
                                            $nip = $row['nip'];
                                            $nama_guru = $row['nama_guru'];
                                            $alamat_guru = $row['alamat_guru'];
                                            $telp_guru = $row['telp_guru'];
                                
                                            
                                            $no++;
                                       ?>
                                      <tr class="gradeX">
                                       
                                          <td><?php echo "$kd_guru"; ?></td>
                                          <td><?php echo "$kd_jurusan"; ?></td>
                                          <td><?php echo "$nip"; ?></td>
                                          <td><?php echo "$nama_guru"; ?></td>
                                          <td><?php echo "$alamat_guru"; ?></td>
                                          <td><?php echo "$telp_guru"; ?></td>
                                           
                                          
                                               
                                         
                                          <td class="center hidden-phone">
                                             <a href="?page=ubah_guru&Token=<?php echo $row['kd_guru']; ?>" class="btn btn-primary btn-xs">Edit</i></a>
                                             <a href="?page=hapus_guru&Token=<?php echo $row['kd_guru']; ?>"  onClick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger btn-xs">Hapus</i></a>
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
