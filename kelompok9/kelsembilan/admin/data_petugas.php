<br>
<br>
<br>
<br>

<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->

    <section id="services">
        <div class="container">

                <div class="row">
                    <!-- page start-->
              <div class="row">
		
				
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
						  <script language="javascript">


</script>
								<center>
								<img src="images/PE.png" width="400" height="140">
								</center>
								<br>
							<div>
                            <a href="?page=input_petugas" class="btn btn-primary">+ Tambah Data</a>
                             <a href="petugasxls.php" class="btn btn-primary" >+ Simpan Excel</a>
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2">
									
                                      <thead>
                                      <tr>
									 
                                      <th>NO</th>
                                          <th>ID PETUGAS</th>
                                          <th>NAMA DEPAN</th>
                                          <th>NAMA BELAKANG</th>
										  <th>USERNAME</th>
                                          <th>PASSWORD</th>
                                          <th>STATUS</th>
                                          
                                         
                                          <div>
										  <center>
                                          <th class="hidden-phone">Aksi</th>
										  </div>
										  </center>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                      error_reporting(0);
                                        require "config/koneksi.php";
                                        require "config/lib.php";
       
                                        $cek = $mysqli->query("SELECT * FROM  petugas    order by ID asc");
                                        while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
                                       
                                            $ID    				 = $row['ID'];
                                            $NAMA_DEPAN      	 = $row['NAMA_DEPAN'];
                                            $NAMA_BELAKANG       = $row['NAMA_BELAKANG'];
                                            $username  			 = $row['username'];
                                            $password    		 = $row['password'];
											$status				 = $row['status'];
                                            
                                            $no++;
                                       ?>
                                      <tr class="gradeX">
                                             
       <td><div align="center"><?php echo $no;?></td>
                                          <td><?php echo "$ID"; ?></td>
                                          <td><?php echo "$NAMA_DEPAN"; ?></td>
                                          <td><?php echo "$NAMA_BELAKANG"; ?></td>
                                          <td><?php echo "$username"; ?></td>   
                                          <td><?php echo "$password"; ?></td>                    
                                          <td><?php echo "$status"; ?></td>                       
     
                                         
                                          <td class="center hidden-phone">
                                             <div align="center"><a href="?page=ubah_petugas&Token=<?php echo $row['ID']; ?>" class="btn  btn-xs"><img src="images/pen.png" width="60" height="60"></i></a>
                                              <div align="center"><a href="?page=delete_petugas&Token=<?php echo $row['ID']; ?>"  onClick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn  btn-xs"><img src="images/drop.png" width="60" height="60"></i></a>
                                          </td>
										   </div>
										   </div>
                                      </tr>
                                      <?php } ?>
                                      </tbody>
                                      <tfoot>
                                     
                                      </tfoot>
                          </table>
                                </div>
								<table width="100%" cellpadding="3" cellspacing="1">
    <tr>
      

    <div class="text-center">
<img src="images/a.png" width="200" height="200">
  </div>
    </tr>
  </table>
                          </div>
                      </section>
                  </div>
              </div>

<br>
<br>
<br>
<br>
              <!-- page end-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->
