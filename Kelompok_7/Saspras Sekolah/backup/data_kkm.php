<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->
    <script language="javascript">
function check_all()
{
    var chk = document.getElementsByName('check_list[]');
    for (i = 0; i < chk.length; i++)
    chk[i].checked = true ;
}

function uncheck_all()
{
    var chk = document.getElementsByName('check_list[]');
    for (i = 0; i < chk.length; i++)
    chk[i].checked = false ;
}
</script>

    <section id="services">
        <div class="container">
            <div class="box first">
            
                <div class="row">
                    <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3 align="center"> Data KKM </h3><br>
                            <a href="?page=input_kkm" class="btn btn-primary">+ Tambah Data</a>
                             <a href="skxls.php" >+ Simpan Excel</a>
                          </header>
                           <form method="post" action="?page=deleteallkkm">
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2">
                                      <thead>
                                      <tr>
                                      <th width="10">&nbsp;</th>

                                          <th>KODE SK</th>
                                          <th>NAMA SK</th>
                                          <th>NILAI SK</th>
                                          <th>KODE JURUSAN</th>
                                          <th>NAMA JURUSAN</th>
                                         
                                         
                                          
                                          <th class="hidden-phone">Aksi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                      error_reporting(0);
                                        require "config/koneksi.php";
                                        require "config/lib.php";

       
                                        $cek = $mysqli->query("SELECT * FROM  standar_kompetensi    order by kd_sk asc");
                                        while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
                                       
                                            $kd_sk       = $row['kd_sk'];
                                            $nama_sk = $row['nama_sk'];
                                            $nilai_sk = $row['nilai_sk'];
                                            $kd_jurusan = $row['kd_jurusan'];
                                            $nama_jurusan = $row['nama_jurusan'];
        
                                
                                            
                                            $no++;
                                       ?>
                             

                                      <tr class="gradeX">
                                                 <td><input type="checkbox" name="check_list[]" value="<?php echo $tampil['kd_sk'];?>" /></td>
                                          <td><?php echo "$kd_sk"; ?></td>
                                          <td><?php echo "$nama_sk"; ?></td>
                                          <td><?php echo "$nilai_sk"; ?></td>
                                          <td><?php echo "$kd_jurusan"; ?></td>
                                          <td><?php echo "$nama_jurusan"; ?></td>

                                           
                                          
                                               
                                         
                                          <td class="center hidden-phone">
                                             <a href="?page=ubah_sk&Token=<?php echo $row['kd_sk']; ?>" class="btn btn-primary btn-xs">Edit</i></a>
                                             <a href="?page=hapus_sk&Token=<?php echo $row['kd_sk']; ?>"  onClick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger btn-xs">Hapus</i></a>
                                          </td>
                                      </tr>
                                      <?php } ?>
                                      <tr>
  
      <td style="padding-bottom:30px;"><a href="#" onClick="check_all()">Chek all</a></td>&nbsp;&nbsp;<td> <a href="#" onClick="uncheck_all()">Unchek all</a></td>
        <td><input type="submit" name="hapus" value="HAPUS" onClick="return confirm('Hapus yang ditandai?')" />
        &nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>     
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
