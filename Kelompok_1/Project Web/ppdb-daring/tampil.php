<?php
session_start();

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// pagination
// konfigurasi
$jumlahDataPerHalaman = 5;

if (isset($_GET['keyword'])) {
    $jumlahData = count(jumlahCari($_GET['keyword']));
  } else {
    $jumlahData = count(query("SELECT * FROM siswa"));
}
  
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($halamanAktif - 1) * $jumlahDataPerHalaman;
$no = $awalData + 1;

// tombol cari ditekan

if(isset($_GET["cari"])) {
    $keyword = $_GET['keyword'];
    $siswa = cari($keyword, $awalData, $jumlahDataPerHalaman);
} else {
    $siswa = query("SELECT * FROM siswa ORDER BY nis ASC LIMIT $awalData, $jumlahDataPerHalaman");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB Online SMAN Situraja - Data Siswa</title>
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
                        <li class="nav-item home">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item active tmpl">
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
                        <form class="mr-4" action="" method="get">
                            <div class="form-row d-flex cari">
                                <div class="col-4">
                                    <input type="text" class="form-control" name="keyword" size="25" autofocus placeholder="Cari..." autocomplete="off">
                                </div>

                                <div class="col-2">
                                    <button type="submit" class="btn btn-primary" name="cari">Cari</button>
                                </div>
                                <div class="col-1 ml-auto">
                                    <a class="btn btn-primary" id="btn-tambah" href="tambah.php">Tambah Data</a>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive tbl">
                        <table class="table table-bordered">
                            <?php if(!$jumlahData == 0) : ?>   
                                <thead>
                                <tr>
                                        <th scope="col">No.</th>
                                        <th style="width: 9%">Aksi</th>
                                        <th>Foto</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Tempat, Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Agama</th>
                                        <th>Alamat</th>
                                        <th>No HP</th>
                                    </tr>
                                </thead>
                            <?php else : ?>
                                <thead class="d-none">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th>Aksi</th>
                                        <th>Foto</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Tempat, Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Agama</th>
                                        <th>Alamat</th>
                                        <th>No HP</th>
                                    </tr>
                                </thead>
                            <?php endif; ?>
                            <?php foreach($siswa as $row) : ?>
                                <tr>
                                    <td class="center align-middle"><?= $no; ?></td>
                                    <td class="center align-middle mb-2">
                                        <a class="btn btn-sm btn-outline-info btn-edit" href="ubah.php?nis=<?= $row['nis'] ?>"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-sm btn-outline-danger" href="hapus.php?nis=<?= $row['nis'] ?>" onclick="return confirm('Apakah Anda yakin?');"><i class="fas fa-trash btn-hapus"></i></a>
                                    </td>
                                    <td class="center"><img src="img/<?= $row["foto"] ?>" width="50"></td>
                                    <td><?= $row["nis"] ?></td>
                                    <td><?= $row["nama"] ?></td>
                                    <td><?= $row["tempat_lahir"] ?>, <?php echo date('d-m-Y',
                                    strtotime($row['tanggal_lahir'])); ?></td>
                                    <td><?= $row["jenis_kelamin"] ?></td>
                                    <td><?= $row["agama"] ?></td>
                                    <td><?= $row["alamat"] ?></td>
                                    <td><?= $row["no_hp"] ?></td>
                                </tr>
                            <?php $no++ ?>
                            <?php endforeach; ?>
                        </table>
                    </div>

            <div class="row">
                <div class="col">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            <?php if(isset($_GET['keyword'])) : ?>
                            <?php if($halamanAktif > 1) : ?>
                                <li class="page-item"><a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>&keyword=<?= $_GET['keyword'] ?>&cari=">&laquo;</a>
                            <?php endif; ?>

                            <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                                <?php if($i == $halamanAktif) : ?>
                                    <li class="page-item active"><a class="page-link" href="?halaman=<?= $i; ?>&keyword=<?= $_GET['keyword'] ?>&cari="><?= $i; ?></a>
                                <?php else : ?>
                                    <li class="page-item"><a class="page-link" href="?halaman=<?= $i; ?>&keyword=<?= $_GET['keyword'] ?>&cari="><?= $i; ?></a>
                                <?php endif; ?>
                            <?php endfor; ?>

                            <?php if($halamanAktif < $jumlahHalaman) : ?>
                                <li class="page-item"><a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>&keyword=<?= $_GET['keyword'] ?>&cari=">&raquo;</a>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>

                <div class="col">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            <?php elseif(!isset($_GET['keyword'])) : ?>
                                <?php if($halamanAktif > 1) : ?>
                                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $halamanAktif-1 ?>">&laquo</a></li>
                                <?php endif; ?>

                                <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                                    <?php if($i == $halamanAktif) : ?>
                                        <li class="page-item active"><a class="page-link" href="?halaman=<?php echo $i ?>"><?php echo $i ?></a></li>
                                    <?php else : ?>
                                        <li class="page-item"><a class="page-link" href="?halaman=<?php echo $i ?>"><?php echo $i ?></a></li>
                                    <?php endif; ?>
                                <?php endfor; ?>

                                <?php if($halamanAktif < $jumlahHalaman) : ?>
                                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $halamanAktif+1 ?>">&raquo</a></li>
                                <?php endif; ?>
                                <?php endif; ?>
                        </ul>
                    </nav>
                </div>
                <div class="col">
                    <?php if(!$jumlahData == 0) : ?>
                        <a class="float-right mb-3">
                            Halaman <?php echo $halamanAktif; ?> dari <?php echo $jumlahHalaman; ?> -
                            Total <?php echo $jumlahData; ?> data
                        </a>
                    <?php else : ?>
                        <a class="float-right d-none">
                            Halaman <?php echo $halamanAktif; ?> dari <?php echo $jumlahHalaman; ?> -
                            Total <?php echo $jumlahData; ?> data
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <?php if($jumlahData == 0) : ?>
                <div class="d-flex justify-content-center mb-5";>Data Tidak Ditemukan!</div>
            <?php endif; ?>
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