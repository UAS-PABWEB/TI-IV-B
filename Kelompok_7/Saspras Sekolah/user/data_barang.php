<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->
    <style type="text/css">
<!--
.style1 {
	color: white;
	font-weight: bold;
	font-size: 36px;
	font-family: "Courier New", Courier, mono;}

.style2 {color: white;
	font-family: "Courier New", Courier, mono;}
.style4 {font-family: "Courier New", Courier, mono}
.style5 {color: #CC3333}
.style8 {font-family: "Courier New", Courier, mono; color: #000000; }
.style9 {
	color: #000000;
	font-weight: bold;
}
.style10 {color: #000000}
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
                              <h3 align="center" class="style1"> Data Barang </h3>
                    <br>
                         
 

   
         <br>
          <form class="form-horizontal form-label-left" novalidate action="?page=data_barang" method="POST" name="cari">
    <div class="row">
        <div class="col-md-12">
         
            <div class="col-md-4 col-sm-4 col-xs-12" >
                <input type="text" class="search form-control" align="right" name="search" id="searchid" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;" placeholder="cari barang " name="nama_barang" />  
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
         <table align="center" class="table table-striped   table-hover">
           <thead>
             <tr align="center">
               <th width="99"><div align="center" class="style10">Nomor</div></th>
               <th width="99" align="center" nowrap class="hidden-phone style4 style5"><div align="center" class="style9">KODE BARANG </div></th>
               <th width="99"> <span class="style10">NAMA BARANG</span></th>
               <th width="99"><div align="center"> <span class="style10">SPESIFIKASI</span></div></th>
               <th width="99"> <span class="style10">LOKASI BARANG</span></th>
               <th width="99"> <span class="style10">KATEGORI</span></th>
               <th width="99"> <span class="style10">JUMLAH BARANG</span></th>
               <th width="99"> <span class="style10">KONDISI</span></th>
               <th width="99"> <span class="style10">JENIS BARANG</span></th>
               <th width="99"> <span class="style10">SUMBER DANA</span></th>
             </tr>
           </thead>
           <tbody align="left">
             <?php
         error_reporting(0);
           include "config/koneksi.php";    
        if ((isset($_POST['submit'])) AND ($_POST['search'] <> ""))
        {
         $search = $_POST['search'];
         $sql1 = $mysqli->query("SELECT * FROM barang WHERE nama_barang LIKE '%$search%' or nama_barang LIKE '$search'");
         }
         else{
             $sql1 = $mysqli->query("SELECT * FROM barang order by nama_barang asc LIMIT 5");
         }
         $jumlah1 = mysqli_num_rows($sql1);
           {
           $no=0;
           while ($tampil = $sql1->fetch_array(MYSQLI_ASSOC)){
            $Nomor ++;
    
    ?>
             <tr>
               <td><?php echo $Nomor ?> </td>
               <td align="center" nowrap class="hidden-phone"><div align="center"><span class="style4"><?php echo $tampil['kode_barang']; ?></span> </div></td>
               <td class="hidden-phone"><?php echo $tampil['nama_barang']; ?> </td>
               <td class="hidden-phone"><?php echo $tampil['spesifikasi']; ?> <div align="center"></div></td>
               <td class="hidden-phone"><?php echo $tampil['lokasi_barang']; ?> </td>
               <td class="hidden-phone"><?php echo $tampil['kategori']; ?> </td>
               <td class="hidden-phone"><?php echo $tampil['jml_barang']; ?> </td>
               <td class="hidden-phone"><?php echo $tampil['kondisi']; ?> </td>
               <td class="hidden-phone"><?php echo $tampil['jenis_barang']; ?> </td>
               <td class="hidden-phone"><?php echo $tampil['sumber_dana']; ?> </td>
             </tr>
             <?php } }?>
             <tr>
               <td>Jumlah Data</td>
               <td align="center" valign="middle" nowrap><div align="center"><span class="style8">: <?php echo $jumlah1 ?> </span></div></td>
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
                
                  </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->
    <p>&nbsp;</p>
        