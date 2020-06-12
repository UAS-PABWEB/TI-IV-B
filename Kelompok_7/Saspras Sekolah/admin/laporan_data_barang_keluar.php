
<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->
    <style type="text/css">
<!--
.style1 {
	color: Black;
	font-weight: bold;
	font-size: 36px;
	font-family: "Courier New", Courier, mono;}

.style2 {color: Black;
	font-family: "Courier New", Courier, mono;}
-->
    </style>
    

    <section id="services">
        <div class="container">
            <div class="box first">
            <marquee behavior="scroll" ></marquee>
              <div class="row">
                <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3 align="center" class="style1"> Data Barang yang Keluar </h3>
                    <br>
                         
 

   
         <br>
          <form class="form-horizontal form-label-left" novalidate action="?page=laporan_data_barang_keluar" method="POST" name="cari">
    <div class="row">
        <div class="col-md-12">
         
            <div class="col-md-4 col-sm-4 col-xs-12" >
                <input type="text" class="search form-control" align="right" name="search" id="searchid" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;" placeholder="Search for people" name="nama_barang" />  
                <div     id="result"></div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12" align="left">
                
                              <button name="submit" type="submit " class="btn btn-default style2"> <strong>Cari</strong></button>
            </div>
        </div>
    </div>   
</form>
         <hr align="center">
        
         <div align="center"><section class="panel">       
         <table class="table table-striped   table-hover">
          <thead>
          <tr>
              <th width="99">Nomor</th>
       
            <th width="99" class="hidden-phone"><i class=></i> ID BARANG KELUAR </th>
              <th width="99"><i class=></i> KODE BARANG</th>   
              <th width="99"><i class=></i> NAMA BARANG</th> 
              <th width="99"><i class=></i> TANGGAL KELUAR</th>  
              <th width="99"><i class=></i> PENERIMA</th> 
              <th width="99"><i class=></i> JUMLAH BARANG KELUAR</th>  
              <th width="99"><i class=></i> KEPERLUAN</th> 
                
            </tr>
          </thead>
          <tbody align="left">
           <?php
         error_reporting(0);
           include "config/koneksi.php";    
        if ((isset($_POST['submit'])) AND ($_POST['search'] <> ""))
        {
         $search = $_POST['search'];
         $sql1 = $mysqli->query("SELECT * FROM keluar_barang WHERE nama_barang LIKE '%$search%' or nama_barang LIKE '$search'");
         }
         else{
             $sql1 = $mysqli->query("SELECT * FROM keluar_barang order by nama_barang asc LIMIT 5");
         }
         $jumlah1 = mysqli_num_rows($sql1);
           {
           $no=0;
           while ($tampil = $sql1->fetch_array(MYSQLI_ASSOC)){
            $Nomor ++;
    
    ?>
          
        <tr>
              <td><?php echo $Nomor ?> </td>
              
            <td class="hidden-phone"><?php echo $tampil['id_brg_keluar']; ?> </td>
              <td class="hidden-phone"><?php echo $tampil['kode_barang']; ?> </td>
              <td class="hidden-phone"><?php echo $tampil['nama_barang']; ?> </td>
              <td class="hidden-phone"><?php echo $tampil['tgl_keluar']; ?> </td>
              <td class="hidden-phone"><?php echo $tampil['penerima']; ?> </td>
              <td class="hidden-phone"><?php echo $tampil['jml_brg_keluar']; ?> </td>
              <td class="hidden-phone"><?php echo $tampil['keperluan']; ?> </td>
              
            
                                   
                                     
            
        </tr>     
          <?php } }?>             
          <tr>
              <td>Jumlah Data</td>
              <td>: <?php echo $jumlah1 ?> </td>
          </tr>      
          </tbody>
           </table>
           </section> 
   <button onclick="myfunction()">print this page</button>
<script>
function myfunction() {
	window.print();
}
</script> 


  
           </div>
                </div>
                  <div align="center">
                    <!--/.row-->
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
              </div>
                <div align="center">
                  <!--/.box-->
                </div>
            </div>
            <div align="center">
      <!--/.container-->
      </section>
      <!--/#services-->
            </div>
        