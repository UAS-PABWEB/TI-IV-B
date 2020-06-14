<?php 
include "koneksi.php";
?>
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
            <li class="active"><a href="home_admin.php"><i class="icon-home icon-large"></i> Home</a></li>
            <li><a href="anggota.php"><i class=" icon-th-large icon-large"></i> Anggota</a></li>
            <li><a href="buku.php"><i class="icon-signal"></i> Buku</a></li>
            <li><a href="pinjam.php"><i class="icon-flag"></i>  Pinjam</a></li>
            <li><a href="admin.php"><i class="icon-flag"></i>  Admin</a></li>
              </ul>
            
                                    
               
       <div class="pull-right"></a> </div>
       
       <div class="pull-right">
                              
            </div>

                       </div><!--/.nav-collapse --></div>

</nav>
<body>
  <div class="container"> 
<h1><center>Form Edit Anggota | Perpustakaan Online</center></h1>
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover">
      <thead>  
<form method="post" action="proses_edit_anggota.php?id=<?php echo $_GET['id'];?>" >

<?php 
$id = $_GET['id'];
$query = mysql_query ("select * from anggota where id_anggota=$id");
$data= mysql_fetch_array($query);
?>

<table border="0">
    <form class="form-horizontal">
      <div class="form-group">
        <label class="control-label col-sm-2">Nama Anggota:</label>
        <div class="col-sm-10">
          <input type="text" name="nama" class="form-control" value="<?php echo $data['nm_anggota']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Alamat:</label>
        <div class="col-sm-10">
          <textarea name="alamat" class="form-control" ><?php echo $data['alamat']?></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Tempat Tanggal Lahir:</label>
        <div class="col-sm-10">
          <textarea name="ttl" class="form-control" ><?php echo $data['ttl_anggota']?></textarea>
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-2" for="nama">Status:</label>
        <div class="col-sm-10">
          <select name="status">
<option value="1">aktif</option>
<option value="2">tidak aktif</option>
        </div>
      </div>
<td></td>
<td></td>
      <button type="submit" name="simpan" class="btn btn-danger">Simpan</button>
    </form>   
</tr>

</table>
</form>
</td>
</tr>
<tr>
</tr>
</table>

</body>
</html>