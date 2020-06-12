<!DOCTYPE html>
<?php
error_reporting(0);
include "conn";
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">
      <style type="text/css">
<!--
.style1 {
	color: blue;
	font-weight: bold;
	font-size: 40px;
}
.style2 {
	color: White;
	font-weight: bold;
	font-size: 20px;
}
.style5 {color: #3399CC}
.style6 {font-family: "Courier New", Courier, mono}
.style7 {color: #3399CC; font-family: "Courier New", Courier, mono; }
body,td,th {
	color: #FFFF99;
	font-family: Courier New, Courier, mono;
	font-weight: bold;
}
body {
	background-color: #White;
}
.style13 {color: #0033CC}
.style25 {color: #0099FF}
.style26 {font-size: 40px; color: blue;}
-->
      </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>
<p align="center"><span class="style1">
<marquee behavior="alternate">
</marquee></span><span class="style26">
<marquee behavior="alternate">
<span class="text--center style6  style25">WELCOME TO OUR WEB PENGELOLAAN INVENTARIS SEKOLAH</span>
</marquee>
</span></p>
    <p align="center"><span class="style7"><img src="4.jpg" width="266" height="219"></span><img src="3.jpg" width="465" height="220"></p>
<div class="grid">

      <form action="koneksi.php?op=in" method="POST" class="form login" onSubmit="return validasi(this)">

        <div class="form__field">
          <label for="login__username"><span class="hidden">Username</span></label>
          <input style="font-size: 16px;" id="login__username" type="text" name="username" class="form__input" placeholder="Username" required>
        </div>

        <div class="form__field">
          <label for="login__password"><span class="hidden">Password</span></label>
          <input style="font-size: 16px;" id="login__password" type="password" name="password" class="form__input" placeholder="Password" required>
        </div>

        <div class="form__field">
          <input type="submit" class="form__input" style="font-size: 16px;" value="Sign In">
        </div>

      </form><br>
      <form class="from login" action="inputuser1.php">
      <div class="from__field">
      <input style="font-size: 16px; width: 100%;" type="submit" value="Sign Up">
      </div>
      </form>

</div>
    
    <svg xmlns="http://www.w3.org/2000/svg" class="icons"><symbol id="arrow-right" viewBox="0 0 1792 1792"><path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z"/></symbol><symbol id="lock" viewBox="0 0 1792 1792"><path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z"/></symbol><symbol id="user" viewBox="0 0 1792 1792"><path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z"/></symbol></svg>
 </div> 
<div id="footer">
  <div align="center" class="style5 style6">
    <p>&nbsp;</p>
<hr size="5" color="white">
    <p class="style2">Copyrights @NurulWulan @IhsanSeptian @IbnuAmar</p>
  </div>
</div>  

</body>

</html>
  
  
</body>
</html>
