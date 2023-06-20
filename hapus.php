<?php
// buka koneksi dengan mysql
include("koneksi.php");

// mengecek apakah di url ada GET id
if(isset($_GET['id'])){
    // menyimpan variable id dari url ke dalam variable $id
    $kode_buku = $_GET['id'];

    // jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM tb_buku WHERE kode_buku='$kode_buku'";
    $hasil_query = mysqli_query($link, $query);

    // periksa query, apakah ada kesaslahan
    if(!$hasil_query){
        die("Gagal menghapus data: " . mysqli_errno($link) .
            " _ " . mysqli_error($link));
    }
}
// melakukan redirect ke halaman index.php
header("location:buku.php");
?>