<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->

    <section id="services">
        <div class="container">
            <div class="box first">
            <marquee behavior="scroll" ></marquee>
                <div class="row">
                    
<div class="col-md-12" align="left">
<label align="left">Cari Data Berdasarkan</label>
</div>
<form class="form-horizontal form-label-left" novalidate action="?page=cari_nilai" method="POST" name="cari">
    <div class="row">
        <div class="col-md-12">
         
            <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" class="search form-control" name="search" id="searchid" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;" placeholder="Search for people" name="nrp" />  
                <div     id="result"></div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12" align="left">
                <button class="btn btn-primary" name="submit">Cari..</button>
            </div>
        </div>
    </div>   
</form>
         <br>
         <hr>
<section class="panel">       
    <table class="table table-striped   table-hover">
        <thead>
        <tr>
            <th>Nomor</th>
     
            <th class="hidden-phone"><i class="fa fa-question-circle"></i> nisn </th>
            <th><i class=" fa fa-edit"></i> Nama Siswa</th>   
            <th><i class=" fa fa-edit"></i> Nama Kelas</th> 
            <th><i class=" fa fa-edit"></i> Alamat Siswa </th>  
            <!-- <th><i class=" fa fa-edit"></i> Jabatan Sekarang</th>
            <th><i class=" fa fa-edit"></i> Jabatan Sekarang</th>           -->                
        </tr>
        </thead>
        <tbody align="left">
         <?php
         error_reporting(0);
           include "config/koneksi.php";    
        if ((isset($_POST['submit'])) AND ($_POST['search'] <> ""))
        {
         $search = $_POST['search'];
         $sql1 = $mysqli->query("SELECT * FROM siswa WHERE nama_siswa LIKE '%$search%' or nama_siswa LIKE '$search'");
         }
         else{
             $sql1 = $mysqli->query("SELECT * FROM siswa order by nama_siswa asc LIMIT 5");
         }
         $jumlah1 = mysqli_num_rows($sql1);
           {
           $no=0;
           while ($tampil = $sql1->fetch_array(MYSQLI_ASSOC)){
            $Nomor ++;
    
    ?>
        
        <tr>
            <td><?php echo $Nomor ?> </td>
            
            <td class="hidden-phone"><?php echo $tampil['nisn']; ?> </td>
            <td class="hidden-phone"><a href="?page=detailnilai&token=<?php echo $tampil['nisn']; ?>"><?php echo $tampil['nama_siswa']; ?> </td>
            <td class="hidden-phone"><?php echo $tampil['nama_kelas']; ?> </td>
            <td class="hidden-phone"><?php echo $tampil['alamat_siswa']; ?> </td>
            
            <td class="hidden-phone"><a href="?page=detailnilai1&token=<?php echo $tampil['nisn'];?>">Lihat Detail</a> </td>  
          
        </tr>     
        <?php } }?>             
        <tr>
            <td>Jumlah Data</td>
            <td>: <?php echo $jumlah1 ?> </td>
        </tr>      
        </tbody>
    </table>
</section>                                                                                    
 


                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->
