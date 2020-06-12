
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Input Data User</title>
<style type="text/css">
<!--
.style4 {
	color: black;
	font-size: large;
	font-weight: bold;
}
.style5 {font-size: 16px}
.style6 {
	font-size: large;
	color: pink;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style9 {
	color: black;
	font-size: 18px;
	font-weight: bold;
}
body,td,th {
	color: black;
	font-size: medium;
}
body {
	background-color: #white;
}
h1,h2,h3,h4,h5,h6 {
	font-family: Georgia, Times New Roman, Times, serif;
}
-->
</style>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Digital Login Form Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300italic,300,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Salsa' rel='stylesheet' type='text/css'>

<style type="text/css">
  .kuning{
    color: orange;
  }
  form .register{
    max-width: 600;
  }
.style1 {
	color: black;
	font-weight: bold;
	font-size: 36px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style2 {
	color: black;
	font-weight: bold;
}
.style11 {
	font-size: large;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style13 {font-family: Georgia, "Times New Roman", Times, serif}
.style14 {
	font-weight: bold;
	font-size: large;
	color: #339999;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style17 {
	color: #339999;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style18 {color: #339999}
.style23 {font-size: large}
.style24 {font-weight: bold}
.style25 {font-weight: bold; color: pink;}
</style>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- js -->
<!-- script for close -->
<script>
$(document).ready(function(c) {
  $('.alert-close').on('click', function(c){
    $('.vlcone').fadeOut('slow', function(c){
      $('.vlcone').remove();
    });
  });   
});
</script>
<!-- //script for close -->

</head>
<?php
 error_reporting(0);
 include "config/koneksi.php";

if(isset($_POST['btnSimpan'])){
 # Baca Variabel Data Form
   $id_admin                 = $_POST['id_admin'];
  $username                  = $_POST['username'];
  $password                 = $_POST['password'];
       
  $myQry = $mysqli->query("INSERT INTO admin (id_admin,username,password,level)
  VALUES ('$id_admin','$username','$password')") or die(mysqli_error($mysqli));
 
         if($myQry){
           echo "<script>alert('Berhasil di simpan');location.href='index.php'</script>";
           // echo "<meta http-equiv='refresh' content='0; url=?page=input_data'>";
         } else {
           echo "<script>alert('Oops! Terjadi Kesalahan ');location.href='javascript:history.back()';</script>";
         }
     

        
    
   
} // Penutup POST
  
  
 

?>

<section id="main-slider1" class="carousel">
        
        
</section><!--/#main-slider-->
        <span class="style11"><section id="services">
        </section><section id="services"></section></span><span class="style13"><section id="services"></section><section id="services"></section></span><section id="services"><div class="container">
            <div class="box first">
           
                <div class="row">
                              <span class="style11"><header class="panel-heading">
                              </header><header class="panel-heading"></header></span><span class="style13"><header class="panel-heading"></header><header class="panel-heading"></header></span><header class="panel-heading"><h3 align="center" class="style1 style6">INPUT DATA USER</h3>
				<div align="center"><img src="4.jpg" width="226" height="177"><br>
                              </div>
                 </header>
<form class="register"   enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
<div>
  <div>
    <td style="width: 100px;"><label>
      <div align="center" class="style14">User Id</div>
      </label></td>
    <div align="center">
      <input name="id_admin" type="text" class="style11" style="width: 200px;" value="">
      </div>
  </div>

  <div>
    <label>
    <div align="center">
      <div align="center" class="style2 style5">
        <div align="center" class="style4 style17"><strong>Username</strong></div>
      </div>
      <input name="username" type="text" class="style11" id="username" style="width: 200px;">
      </div>
  </div>

  <div>
    <label>
    <div align="center" class="style2">
      <div align="center" class="style4 style13 style18">Password</div>
    </div>
    <div align="center">
      <input name="password" type="text" class="style11" id="password" style="width: 200px;">
      </div>
  </div>

    <div> 
   <div align="right">                                            
     <p>&nbsp;</p>
     <div align="center">
       <button name="btnSimpan" class="style9">
       <h3 class="style4 style18 style23">Simpan</h3>
       </button>
     </div>
   </div>
  </div>
</div>
</form>
 <div align="center">
   <h3><span class="style23"><a href="javascript:history.back()" class="btn-warning btn style4"><strong></strong></a></span><a href="javascript:history.back()" class="btn-warning btn style4"><strong>
     <button class="style4">
     <h3 class="style18 style23">Batal</h3>
     </button>
     </strong></a></h3>
   <h3 class="style4 style18 style23"><a href="javascript:history.back()"  class="btn-warning btn  style24"><strong>
     <button class="style24"></button>
   </strong></a></h3></div>
              </div>
              <h3><!--/.row-->
            </h3>
          </div>
            <h3><!--/.box-->
        </h3></div><h3><!--/.container-->
    </h3></section><h3><!--/#services-->
    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>

</h3></body>

</html>

</body>
</html>
