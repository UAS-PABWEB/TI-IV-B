<div  style="background-image: url(images/i.jpg);" data-stellar-background-ratio="0.05">
			<div class="overlay"></div>
			<div class="container-login100">
				<div class="row">
					<div class="col-sm-12 col-sm-offset-0 ">
<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->

    <section id="services">
        <div class="container">
            <br>
            <br>
                    <center>
								<img src="images/lpp.png" width="400" height="140">
								</center>
								<br>
							<div>
<div class="col-md-12" align="left">
<label style="color:#000000;" align="left">Cari Data Berdasarkan</label>
</div>
<form class="form-horizontal form-label-left" novalidate action="?page=cari_sm2" method="POST" name="cari">
    <div class="row">
        <div class="col-md-12">
         
            <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" class="search form-control" name="search" id="searchid" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;" placeholder="Search for No Agenda SM" name="nrp" />  
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
			<th><i class=" fa fa-edit"></i>NO AGENDA SM</th>
			<th><i class=" fa fa-edit"></i>ID PETUGAS</th> 
            <th><i class=" fa fa-edit"></i>JENIS SURAT MASUK</th>   
            <th><i class=" fa fa-edit"></i>TANGGAL KIRIM SURAT</th> 
            <th><i class=" fa fa-edit"></i>TANGGAL TERIMA SURAT</th>  
			<th><i class=" fa fa-edit"></i>NO SURAT MASUK</th>   
            <th><i class=" fa fa-edit"></i>PENGIRIM SURAT MASUK</th> 
            <th><i class=" fa fa-edit"></i>PERIHAL SURAT MASUK</th> 
            <!-- <th><i class=" fa fa-edit"></i> Jabatan Sekarang</th>
            <th><i class=" fa fa-edit"></i> Jabatan Sekarang</th>           -->                
        </tr>
        </thead>
        <tbody align="left">
         <?php
         error_reporting(0);
          require "config/koneksi.php";
                                        require "config/lib.php";
        if ((isset($_POST['submit'])) AND ($_POST['search'] <> ""))
        {
         $search = $_POST['search'];
         $sql1 = $mysqli->query("SELECT * FROM lap_sm2 WHERE NO_AGENDASM LIKE '%$search%' or NO_AGENDASM LIKE '$search'");
         }
         else{
             $sql1 = $mysqli->query("SELECT * FROM lap_sm2  order by NO_AGENDASM asc LIMIT 10");
         }
         $jumlah1 = mysqli_num_rows($sql1);
           {
           $no=0;
           while ($tampil = $sql1->fetch_array(MYSQLI_ASSOC)){
            $Nomor ++;
    
    ?>
        
        <tr>
            <td><?php echo $Nomor ?> </td>
			<td class="hidden-phone"><?php echo $tampil['NO_AGENDASM']; ?> </td>
            <td class="hidden-phone"><?php echo $tampil['ID']; ?> </td>
            <td class="hidden-phone"><?php echo $tampil['JENIS_SURAT']; ?> </td>
            <td class="hidden-phone"><?php echo $tampil['TANGGAL_KIRIM']; ?> </td>
            <td class="hidden-phone"><?php echo $tampil['TANGGAL_TERIMA']; ?> </td>
            <td class="hidden-phone"><?php echo $tampil['NO_SURAT']; ?> </td>
			<td class="hidden-phone"><?php echo $tampil['PENGIRIM']; ?> </td>
            <td class="hidden-phone"><?php echo $tampil['PERIHAL']; ?> </td>
            <td class="hidden-phone"><a href="?page=carilapsuratmasuk2&token=<?php echo $tampil['NO_AGENDASM'];?>">Lihat Detail</a> </td>  
          
        </tr>     
        <?php } }?>             
        <tr>
            <td>Jumlah Data</td>
            <td>: <?php echo $jumlah1 ?> </td>
        </tr>      
        </tbody>
    </table>
</section>                                                                                    
 <br>
<br>
<br>
<br>
<br>


                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->
