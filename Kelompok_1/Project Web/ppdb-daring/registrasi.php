<?php
require 'functions.php';

if(isset($_POST['register'])) {
    if(registrasi($_POST) > 0) {
        echo "<script>
                alert('User baru berhasil ditambahkan');
                document.location.href = 'login.php';
              </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB Online SMAN Situraja - Registrasi</title>
    <link rel="shortcut icon" href="assets/img/logo_smantura.jpg">
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/datepicker/css/datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome-free-5.4.2-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="container-fluid">
        <div class="row flex-fill bg-body">
            <div class="col d-flex flex-column col-sm-8 col-md-6 col-lg-4 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        
                        <div class="text-center">
                            <img src="assets/img/logo_smantura.jpg" alt="logo-smantura" class="rounded" height="150">
                        </div>

                        <h5 class="card-title text-center">Halaman Registrasi</h5>

                        <form action="" method="post" class="form-signin">
                            <div class="form-label-group">
                                <label for="username">Username : </label>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-label-group">
                                <label for="password">Password : </label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-label-group">
                                <label for="password2">Konfirmasi Password : </label>
                                <input type="password" name="password2" id="password2" class="form-control">
                            </div>

                            <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">Register</button>

                            <div class="text-center">
                                <div>Sudah mempunyai akun? Silahkan <a href="login.php">login</a>.</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-4.1.3/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/fontawesome-free-5.4.2-web/js/all.min.js"></script>
    <script type="text/javascript" src="assets/plugins/datepicker/js/bootstrap-datepicker.min.js"></script>
    
</body>
</html>