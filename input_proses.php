<?php

include 'koneksi.php';

if (isset($_POST['input'])){

    $kode_buku = $_POST['kode_buku'];
    $judul_buku = $_POST['judul_buku'];
    $jenis_buku = $_POST['jenis_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];

    $query = "INSERT INTO tb_buku VALUES ('$kode_buku', '$judul_buku','$jenis_buku','$penulis','$penerbit')";
    $result = mysqli_query($link, $query);

    if(!$result){
        die("Query gagal dijalankan: " . mysqli_errno($link) .
            " _ " . mysqli_error($link));
    }
}


header("location:buku.php");
?>