<?php
// mengecek apakah tombol edit telah di klik
if(isset($_POST['edit'])){
    // buat koneksi dengan database
    include("koneksi.php");

    // membuat variable untuk menampung data dari form edit
    $kode_buku = $_POST['kode_buku'];
    $judul_buku = $_POST['judul_buku'];
    $jenis_buku = $_POST['jenis_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];

    // buat dan jalankan update query
    $query = "UPDATE tb_buku SET kode_buku='$kode_buku', judul_buku='$judul_buku',
    jenis_buku='$jenis_buku', penulis='$penulis', penerbit='$penerbit' WHERE kode_buku='$kode_buku';";
    $result = mysqli_query($link, $query);
    // periksa hasil query apakah ada error
    if(!$result){
        die("Query gagal dijalankan: " . mysqli_errno($link) .
            " _ " . mysqli_error($link));
    }
}
// lakukan redirect ke halaman index.php
header("location:buku.php");
?>