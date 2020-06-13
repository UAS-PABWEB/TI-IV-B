<?php
session_start();

require 'functions.php';

// cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id" );
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

if(isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if(mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {
            // Set session
            $_SESSION["login"] = true;

            // cek remember me
            if(isset($_POST["remember"])) {
                // buat cookie

                setcookie('id', $row['id'], time()+60);
                setcookie('key', hash('sha256', $row['username']), time()+60);
            }

            header("Location: index.php");
            exit;
        }

    }

    $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB Online SMAN Situraja - Login</title>
    <link rel="shortcut icon" href="assets/img/logo_smantura.jpg">
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/datepicker/css/datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome-free-5.4.2-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="container-fluid">
        <div class="row flex-fill bg-body">
            <div class="col d-flex flex-column col-sm-8 col-md-6 col-lg-4 mx-auto register">
                <div class="card card-signin my-5">
                    <div class="card-body">

                        <div class="text-center">
                            <img src="assets/img/logo_smantura.jpg" alt="logo-smantura" class="rounded" height="150">
                        </div>

                        <h5 class="card-title text-center">Halaman Login</h5>

                        <?php if(isset($error)) : ?>
                            <div class="alert alert-danger">Username atau password salah!</div>
                        <?php endif; ?>

                        <form action="" method="post" class="form-signin">
                            <div class="form-label-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username">
                            </div>
                            <div class="form-label-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" name="remember" id="remember">
                                <label class="custom-control-label" for="remember">Remember Me</label>
                            </div>
                            
                            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>

                            <div class="text-center">
                                <div>Belum mempunyai akun? Silahkan <a href="registrasi.php">register</a>.</div>
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