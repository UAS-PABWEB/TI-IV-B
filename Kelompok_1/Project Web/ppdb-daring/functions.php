<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_ppdb");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
     $nis = htmlspecialchars($data["nis"]);
     $nama = htmlspecialchars($data["nama"]);
     $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
     $tanggal_lahir = htmlspecialchars(date('Y-m-d', strtotime($data["tanggal_lahir"])));
     $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
     $agama = htmlspecialchars($data["agama"]);
     $alamat = htmlspecialchars($data["alamat"]);
     $no_hp = htmlspecialchars($data["no_hp"]);
     
    //  Upload gambar
    $foto = upload();
    if(!$foto) {
        return false;
    }

     $query = "INSERT INTO siswa
                VALUES
                ('$nis', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin',
                  '$agama', '$alamat', '$no_hp', '$foto')
              ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload() {
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    // cek apakah tidak ada gambar yang di upload
    if($error === 4) {
        echo "<script>
                alert('pilih gambar terlebih dahulu');
              </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('yang anda upload bukan gambar');
              </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if($ukuranFile >= 1000000) {
        echo "<script>
                alert('ukuran gambar terlalu besar');
              </script>";
        return false;
    }

    // lolos pengecekan, gambar siap di upload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;

}

function hapus($nis) {
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE nis = $nis");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
    $tanggal_lahir = htmlspecialchars(date('Y-m-d', strtotime($data["tanggal_lahir"])));
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $agama = htmlspecialchars($data["agama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $fotoLama = htmlspecialchars($data["fotoLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if($_FILES['foto']['error'] === 4) {
        $foto = $fotoLama;
    } else {
        $foto = upload();
    }

    $query = "UPDATE siswa SET
                nama = '$nama',
                tempat_lahir = '$tempat_lahir',
                tanggal_lahir = '$tanggal_lahir',
                jenis_kelamin = '$jenis_kelamin',
                agama = '$agama',
                alamat = '$alamat',
                no_hp = '$no_hp',
                foto = '$foto'
              WHERE nis = '$nis'
             ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function jumlahCari($keyword) {
    $query = "SELECT * FROM siswa 
                WHERE 
              nama LIKE '%$keyword%' OR
              nis LIKE '%$keyword%' 
             ";
    return query($query);
}

function cari($keyword, $awalData, $jumlahDataPerHalaman){
    $query = "SELECT * FROM siswa WHERE 
      nama LIKE '%$keyword%' OR
      nis LIKE '%$keyword%' ORDER BY nis ASC LIMIT $awalData, $jumlahDataPerHalaman";
    return query($query);
  } 

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Maaf, username sudah terdaftar');
              </script>";
        return false;
    }

    // cek konfirmasi password
    if($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai');
              </script>";

        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('$username', '$password')");

    return mysqli_affected_rows($conn);

}

?>