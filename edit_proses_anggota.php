<?php
// mengecek apakah tombol edit telah di klik
if(isset($_POST['edit'])){
    // buat koneksi dengan database
    include("koneksi.php");

    // membuat variable untuk menampung data dari form edit
    $id = $_POST['id'];
    $kode_anggota = $_POST['kode_anggota'];
    $nama_anggota = $_POST['nama_anggota'];
    $alamat_anggota = $_POST['alamat_anggota'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    // buat dan jalankan update query
    $query = "UPDATE tb_anggota SET kode_anggota='$kode_anggota', nama_anggota='$nama_anggota',
    alamat_anggota='$alamat_anggota', jenis_kelamin='$jenis_kelamin' WHERE id='$id';";
    $result = mysqli_query($link, $query);
    // periksa hasil query apakah ada error
    if(!$result){
        die("Query gagal dijalankan: " . mysqli_errno($link) .
            " _ " . mysqli_error($link));
    }
}
// lakukan redirect ke halaman index.php
header("location:anggota.php");
?>