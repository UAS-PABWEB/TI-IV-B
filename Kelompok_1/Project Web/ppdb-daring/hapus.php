<?php
session_start();

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}


require 'functions.php';

$nis = $_GET["nis"];

if(hapus($nis) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'tampil.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'tampil.php';
        </script>
    ";
};

?>