<?php
// mengecek apakah tombol edit telah di klik
if(isset($_POST['edit'])){
    // buat koneksi dengan database
    include("koneksi.php");

    // membuat variable untuk menampung data dari form edit
    $id = $_POST['id'];
    $kode_pegawai = $_POST['kode_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $alamat_pegawai = $_POST['alamat_pegawai'];
    $shift = $_POST['shift'];

    // buat dan jalankan update query
    $query = "UPDATE tb_pegawai SET kode_pegawai='$kode_pegawai', nama_pegawai='$nama_pegawai',
    alamat_pegawai='$alamat_pegawai', shift='$shift' WHERE id='$id';";
    $result = mysqli_query($link, $query);
    // periksa hasil query apakah ada error
    if(!$result){
        die("Query gagal dijalankan: " . mysqli_errno($link) .
            " _ " . mysqli_error($link));
    }
}
// lakukan redirect ke halaman index.php
header("location:pegawai.php");
?>