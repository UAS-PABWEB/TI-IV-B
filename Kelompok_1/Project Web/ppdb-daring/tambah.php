<?php
session_start();

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}


require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {
    // Cek apakah data berhasil ditambahkan atau tidak
   if(tambah($_POST) > 0) {
       echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'tampil.php';
            </script>
       ";
   } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'tampil.php';
            </script>
        ";
   };
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link rel="shortcut icon" href="assets/img/logo_smantura.jpg">
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/datepicker/css/datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome-free-5.4.2-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/datepicker/css/datepicker.min.css">
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
                        <li class="nav-item">
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
                <div class="container bg-white awak border">
                    <h3 class="display-5 text-center mt-3 mb-3">Pendaftaran</h3>

                    <form class="form-tambah" action="" method="post" enctype="multipart/form-data">
                        <div class="row d-flex edit">
                            <div class="col">
                                <div class="form-group col-md-12">
                                    <label for="nis">NIS</label>
                                    <input class="form-control" type="text" name="nis" maxlength="10" id="nis" required>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="nama">Nama</label>
                                    <input class="form-control" type="text" name="nama" id="nama" required>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="agama">Agama</label>
                                    <select class="form-control" name="agama" id="agama" required>
                                        <option value=""></option>
                                        <option value="Islam">Islam</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghuchu">Konghuchu</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Laki-laki" required>
                                        <label class="custom-control-label" for="jenis_kelamin1">Laki-laki</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-4">
                                        <input class="custom-control-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Perempuan" required>
                                        <label class="custom-control-label" for="jenis_kelamin2">Perempuan</label>
                                    </div>    
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" required>
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input class="form-control date_picker" autocomplete="off" data-date-format="dd-mm-yyyy" type="text" name="tanggal_lahir" id="tanggal_lahir" required>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" rows="2" type="text" name="alamat" id="alamat" required></textarea>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="no_hp">Nomor HP</label>
                                    <input class="form-control" type="text" name="no_hp" id="no_hp" maxlength="13" required>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="foto">Foto</label>
                                    <input class="form-control-file" type="file" name="foto" id="foto">
                                </div>
                            </div>

                            <div class="button-simtal form-group col-md-12 right mt-4">
                                    <button class="btn btn-primary mr-1" type="submit" name="submit">Tambah Data</button>
                                    <a href="index.php" class="btn btn-secondary btn-reset mr-3"> Batal </a>
                            </div>
                        </div>
                    </form>
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

    <script type="text/javascript">

    $(document).ready(function() {
        $('.date_picker').datepicker({
            autoclose: true,
            todayHighlight: true
        }); 
    });

    </script>
</body>
</html>