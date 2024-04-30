<?php

include("koneksi.php");

if(isset($_POST['daftar'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $ttl = $_POST['ttl'];

    // buat query
    $sql = "INSERT INTO siswa (nim, nama, usia, alamat, jenis_kelamin, ttl)
VALUE ('$nim', '$nama','$usia', '$alamat', '$jk', '$ttl')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>