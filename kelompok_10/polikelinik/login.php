<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title> 
      <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <hgroup>
  <h1><b>LOGIN</h1>
   <h1><b>Admin / User</h1>
  <img src="orang.png"width="50" height="50" style="border:10px;">
</hgroup>
<form action="proses.php?op=in" name="login" method="post" id="from-login">
  <div class="group">
  <center><input type="text" name="username" placeholder="Masukan Username" ><span class="highlight"></span><span class="bar"></span>
     </div></center>
  <div class="group">
   <center><input type="password" name="password" placeholder="Masukan Password"><span class="highlight"></span><span class="bar"></span>
  </div></center>
    <div class='login'>
      <input type='submit' value='Login'>
    </div>
        
</form>
<footer>
  <p>Isi dulu Username & Password maka anda bisa Masuk</b>
</footer>
  </body>
</html>
