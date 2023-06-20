<?php
// memanggil file koneksi.php untuk melakukan koneksi databse
include 'koneksi.php';
// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])){
    // membuat variable untuk menampung data dari form
    $kode_pegawai = $_POST['kode_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $alamat_pegawai = $_POST['alamat_pegawai'];
    $shift = $_POST['shift'];
    // jalankan query Insert untuk menambah data ke database
    $query = "INSERT INTO tb_pegawai VALUES (NULL,'$kode_pegawai', '$nama_pegawai','$alamat_pegawai','$shift')";
    $result = mysqli_query($link, $query);
    // periksa query apakah ada eror
    if(!$result){
        die("Query gagal dijalankan: " . mysqli_errno($link) .
            " _ " . mysqli_error($link));
    }
}

// melakukan redirect (mengalihkan) ke halaman indek.php
header("location:pegawai.php");
?>