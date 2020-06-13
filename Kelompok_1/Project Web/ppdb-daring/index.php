<?php
session_start();

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB Online SMAN Situraja - Home</title>

    <link rel="shortcut icon" href="assets/img/logo_smantura.jpg">
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/datepicker/css/datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome-free-5.4.2-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-lg-12 navbar fixed-top navbar-expand-lg navbar-light bg-white border-bottom">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo_smantura.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                    PPDB Online
                </a>
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item tmpl">
                            <a class="nav-link" href="tampil.php">Tampil Data</a>
                        </li>
                        <li class="nav-item btn-out">
                            <a class="btn btn-sm btn-outline-primary" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row flex-fill bg-body border-bottom">
            <div class="col d-flex flex-column">
                <div class="jumbotron jumbotron-fluid text-center bg-white border">
                    <div class="container wlcm">
                        <h1 class="display-4">PPDB SMAN Situraja</h1>
                        <p class="lead">Selamat datang di aplikasi PPDB Online SMAN Situraja, silahkan melakukan pendaftaran, atau <a href="tampil.php">Lihat Data</a>.</p>
                        <a class="btn btn-primary btn-lg btn-daftar" href="tambah.php" role="button">Daftar &raquo;</a>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <footer class="pt-4 pt-md-3">
            <div class="row">
                <div class="col-12 col-md center copyr">
                    &copy; 2020 - PPDB SMAN Situraja | Kelompok 1
                </div>
            </div>
        </footer>
    </div>

    <script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-4.1.3/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/fontawesome-free-5.4.2-web/js/all.min.js"></script>
    <script type="text/javascript" src="assets/plugins/datepicker/js/bootstrap-datepicker.min.js"></script>

</body>
</html>