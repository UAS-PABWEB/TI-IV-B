<br>
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
								<img src="images/SM.png" width="400" height="140">
								</center>
								<br>
							<div>
                            <a href="?page=input_sm" class="btn btn-primary">+ Tambah Data</a>
                             <a href="smxls.php" class="btn btn-primary" >+ Simpan Excel</a>
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2">
                                      <thead>
                                      <tr>
									 
                                      <th>NO</th>
                                          <th>NO AGENDA</th>
                                          <th>ID</th>
									
                                          <th>JENIS SURAT</th>
                                          <th>TANGGAL KIRIM</th>
                                          <th>TANGGAL TERIMA</th>
										  <th>NO SURAT</th>
                                          <th>PENGIRIM</th>
										  <th>PERIHAL</th>
										  
                                          <th class="hidden-phone">Aksi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                      error_reporting(0);
                                        require "config/koneksi.php";
                                        require "config/lib.php";
       
                                        $cek = $mysqli->query("SELECT * FROM  surat_masuk    order by NO_AGENDASM asc");
                                        while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
                                       
                                            $NO_AGENDASM    				 = $row['NO_AGENDASM'];
                                            $ID      						 = $row['ID'];
								
                                            $JENIS_SURAT     		 		 = $row['JENIS_SURAT'];
                                            $TANGGAL_KIRIM   			     = $row['TANGGAL_KIRIM'];
											$TANGGAL_TERIMA   			     = $row['TANGGAL_TERIMA'];
											$NO_SURAT   			     	 = $row['NO_SURAT'];
											$PENGIRIM   			   	     = $row['PENGIRIM'];
											$PERIHAL	 			     	 = $row['PERIHAL'];
											
											
                                            
                                            $no++;
                                       ?>
                                      <tr class="gradeX">
                                          
       <td><div align="center"><?php echo $no;?></td>
                                          <td><?php echo "$NO_AGENDASM"; ?></td>
                                          <td><?php echo "$ID"; ?></td>
									
                                          <td><?php echo "$JENIS_SURAT"; ?></td>
										  <td><?php echo "$TANGGAL_KIRIM"; ?></td>
										  <td><?php echo "$TANGGAL_TERIMA"; ?></td>
										  <td><?php echo "$NO_SURAT"; ?></td>
										  <td><?php echo "$PENGIRIM"; ?></td>
										  <td><?php echo "$PERIHAL"; ?></td>
                                               
                                         
                                          <td class="center hidden-phone">
                                             <a href="?page=ubah_sm&Token=<?php echo $row['NO_AGENDASM']; ?>" class="btn btn-xs"><img src="images/pen.png" width="60" height="60"></i></a>
                                             <a href="?page=delete_sm&Token=<?php echo $row['NO_AGENDASM']; ?>"  onClick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-xs"><img src="images/drop.png" width="60" height="60"></i></a>
                                          </td>
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
<br>
              <!-- page end-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->
