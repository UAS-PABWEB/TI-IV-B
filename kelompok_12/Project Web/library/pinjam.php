<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="gmbr/buku.png">

    <title>Perpustakaan Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<!-- Less styles  
	<link rel="stylesheet/less" type="text/css" href="less/bootsshop.less">
	<script src="less.js" type="text/javascript"></script>
	 -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
	  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- Le styles  -->

    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet"/>
	<link href="assets/css/docs.css" rel="stylesheet"/>
	 

	<link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet"/>

	
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
     <style>
   body {
    background-image: url("background1.JPG");
    background-repeat: no-repeat;
}
</style>
 </head>
<body >
  <!-- Navbar
    ================================================== -->
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home_admin.php">Perpustakaan Online</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="home_admin.php"><i class="icon-home icon-large"></i> Home</a></li>
            <li><a href="anggota.php"><i class=" icon-th-large icon-large"></i> Anggota</a></li>
            <li><a href="buku.php"><i class="icon-signal"></i> Buku</a></li>
            <li class="active"><a href="pinjam.php"><i class="icon-flag"></i>  Pinjam</a></li>
            <li><a href="admin.php"><i class="icon-flag"></i>  Admin</a></li>
            <li><a href="logout.php"><i class="icon-flag"></i>  Logout</a></li>
              </ul>
            
                                    
							 
       <div class="pull-right"></a> </div>
       
       <div class="pull-right">
                       				
						</div>

                       </div><!--/.nav-collapse --></div>

</nav>
<body>
  <link rel="stylesheet" type="text/css" href="animated.css">
<h2><center class="animated infinite pulse slow">Form Pinjam Buku | Perpustakaan Online</center></h2>
  <li><a href="pinjam_buku.php"><i class="icon-flag"></i>  Pinjam</a></li>
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover">
      <thead>
<p><center>buku yang sedang dipinjam  </center></p>

          <tr>
            <th >No</th>
            <th >Tanggal Pinjam Buku </th>
      <th >Jumlah Pinjam </th>
      <th >tanggal kembali </th>
      <th >nama peminjam</th>
      <th >Buku</th>
      
      <th >Aksi</th>
          </tr>
        </thead>
                                    
                  

                                    <tbody>
                  <?php 
include "koneksi.php";
$query  = "select * from meminjam,buku,anggota
where meminjam.id_anggota = anggota.id_anggota and
meminjam.kd_buku = buku.kd_buku and meminjam.kembali = 1
 order by id_pinjam";
$sql  = mysql_query ($query);
$no = 1;
while ($data=mysql_fetch_array($sql)) {
?>      
                                        <tr class="odd gradeX">
                                            <td><?php echo $no?></td>
                                            <td><?php echo $data['tgl_pinjam'];?></td>
                       <td><?php echo $data['jumlah_pinjam'];?></td>
                        <td><?php echo $data['tgl_kembali'];?></td>
                         <td><?php echo $data['nm_anggota'];?></td>
                          <td class="center"><?php echo $data['judul_buku'];?></td>
                      
                                            <td class="center"><a href="edit_pinjam.php?id=<?php echo $data['id_pinjam']; ?>" > Edit </a> | <a href="kembali_buku.php?id=<?php echo $data['id_pinjam']; ?>" onClick = "return confirm('Apakah Anda ingin mengembalikan  <?php echo $data['judul_buku']; ?>?')"> Kembalikan </a></td>
                                        </tr>
                    
                                        <?php $no++; }?>
                                    </tbody>
                  
                  

                                </table>
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover">
      <thead>
  <p><center>buku yang sudah di kembalikan</center></p>
<tr>
            <th >No</th>
            <th >Tanggal Pinjam Buku </th>
      <th >Jumlah Pinjam </th>
      <th >tanggal kembali </th>
      <th >nama peminjam</th>
      <th >Buku</th>
      
      <th >Aksi</th>
          </tr>
        </thead>
                                    
                  

                                    <tbody>
                  <?php 
include "koneksi.php";
$query  = "select * from meminjam,buku,anggota
where meminjam.id_anggota = anggota.id_anggota and
meminjam.kd_buku = buku.kd_buku and meminjam.kembali = 2
 order by id_pinjam";
$sql  = mysql_query ($query);
$no = 1;
while ($data=mysql_fetch_array($sql)) {
?>      
                                        <tr class="odd gradeX">
                                            <td><?php echo $no?></td>
                                            <td><?php echo $data['tgl_pinjam'];?></td>
                       <td><?php echo $data['jumlah_pinjam'];?></td>
                        <td><?php echo $data['tgl_kembali'];?></td>
                         <td><?php echo $data['nm_anggota'];?></td>
                          <td class="center"><?php echo $data['judul_buku'];?></td>
                      
                                            <td class="center"><a href="hapus_pinjam.php?id=<?php echo $data['id_pinjam']; ?>" 
  onClick = "return confirm('Apakah Anda ingin mengapus  <?php echo $data['id_pinjam']; ?>?')"> hapus</a> </td>
                                        </tr>
                    
                                        <?php $no++; }?>
                                    </tbody>
                  
                  

                                </table>
                
                
</td>
</tr>
<tr>
</tr>
</table>
</body>
</html>