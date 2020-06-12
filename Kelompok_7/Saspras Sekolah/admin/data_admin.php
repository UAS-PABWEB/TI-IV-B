  <?php 
  include "config/koneksi.php" ?>
<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->

    <section id="services">
        <div class="container">
            <div class="box first">
            
                <div class="row">
                    <!-- page start-->
              <div class="row">
                  <div class="col-lg-10">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3 align="center"> Data Admin </h3><br>
                            <a href="?page=input_admin" class="btn btn-secondary"> Tambah Data</a>
                             <a href="adminxls.php" class="btn btn-success" >Simpan Excel</a>
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2" border="1" bgcolor="blue">
                                      <thead>
                                      <tr>
                                          <th>ADMIN ID</th>
                                          <th>USERNAME</th>
                                          <th>PASSWORD</th>
                                          <th>LEVEL</th>
                                          
                                         
                                          
                                          <th class="hidden-phone">Aksi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                      error_reporting(0);
                                        require "config/koneksi.php";
                                        require "config/lib.php";
       
                                        $cek = $mysqli->query("SELECT * FROM  admin    order by id_admin asc");
                                        while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
                                            $id_admin  = $row['id_admin'];
                                            $username  = $row['username'];
                                            $password   = $row['password'];
                                            $level   = $row['level'];
                                            
                                            
                                            $no++;
                                       ?>
                                      <tr class="gradeX">
                                          <td><?php echo "$id_admin"; ?></td>
                                          <td><?php echo "$username"; ?></td>
                                          <td><?php echo "$password"; ?></td>
                                          <td><?php echo "$level"; ?></td>
                                         
                                           
                                          
                                               
                                         
                                          <td class="center hidden-phone">
                                             <a href="?page=ubah_admin&Token=<?php echo $row['id_admin']; ?>" class="btn btn-secondary btn-xs"><i class="fa fa-edit"> Edit</i></a>
                                             <a href="?page=hapus_admin&Token=<?php echo $row['id_admin']; ?>"  onClick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"> Hapus</i></a>
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
