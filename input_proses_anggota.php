<?php
// memanggil file koneksi.php untuk melakukan koneksi databse
include 'koneksi.php';
// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])){
    // membuat variable untuk menampung data dari form
    $kode_anggota = $_POST['kode_anggota'];
    $nama_anggota = $_POST['nama_anggota'];
    $alamat_anggota = $_POST['alamat_anggota'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    // jalankan query Insert untuk menambah data ke database
    $query = "INSERT INTO tb_anggota VALUES (NULL,'$kode_anggota', '$nama_anggota','$alamat_anggota','$jenis_kelamin')";
    $result = mysqli_query($link, $query);
    // periksa query apakah ada eror
    if(!$result){
        die("Query gagal dijalankan: " . mysqli_errno($link) .
            " _ " . mysqli_error($link));
    }
}

// melakukan redirect (mengalihkan) ke halaman indek.php
header("location:anggota.php");
?>