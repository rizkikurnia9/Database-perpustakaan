<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
        <title>Data Siswa</title>
        <style>
            a{  
                color: white;
                text-decoration: none;
            }
            a:hover{
                color: red;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
                <nav class="navbar sticky-top navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>   Data Buku</a>
                    </div>
                </nav>
                <div class="mt-5"></div>
                <figure class="text-center">
                <blockquote class="blockquote">
                    <p>Data Buku Yang Terdaftar</p>
                </blockquote>
                <figcaption class="blockquote-footer" >
                    Perpustakaan<cite title="Source Title">SMKN 4 PYK</cite>
                </figcaption>
                </figure>

                <div class="col text-center">
                <button type="button" class="btn btn-info"><a href="input.php">
                <i class="fa fa-file-text" aria-hidden="true"></i>  Tambah Data</button>
                </div>

            <div class="mt-5"></div>

            <div class="mt-5"></div>

            <div class="table-responsive">
            <table class="table align-middle">
            <tr>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Jenis Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Pilihan</th>
            </tr>
        
            <?php
            // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
            $query = "SELECT * FROM tb_buku ORDER BY kode_buku ASC";
            $result = mysqli_query($link, $query);
            // mengecek ada eror ketika menjalankan query
            if(!$result){
                die("Querry Error:".mysqli_errno($link). " _ ".mysqli_error($link));
            }

            // buat perulangan untuk element tabel dari data mahasiswa
            // $no =1; //variable untuk membuat nomor urut
            // hasil query akan disimpan dalam  variable $data dalam bentuk array
            // kemuadian dicetak dengan perulangan while
            while($data = mysqli_fetch_assoc($result))
            {
                // mencetak / menampilkan data
                echo "<tr>";
                // echo "<td>$no</td>";// menampilkan data no
                echo "<td>$data[kode_buku]</td>";// menampilkan data nim
                echo "<td>$data[judul_buku]</td>";// menampilkan data nama
                echo "<td>$data[jenis_buku]</td>";// menampilkan data fakultas
                echo "<td>$data[penulis]</td>";// menampilkan data jurusan
                echo "<td>$data[penerbit]</td>";// menampilkan data ipk
                // membuat link untuk mengedit dan menghapus data
                echo '<td>
                <button type="button" class="btn btn-primary btn-sm"><a href="edit.php?id='.$data['kode_buku'].'"
                        <i class="fa fa-pencil" aria-hidden="true"></i>   edit</a></button>
                        <button type="button" class="btn btn-danger btn-sm"><a href="hapus.php?id='.$data['kode_buku'].'"
                        <i class="fa fa-file-text" aria-hidden="true"></i>   hapus</a></button>
                </td>';
                echo "</tr>";
                // $no++; //menambah nilai urut
                
            }
            ?>


        </table>
        </div>
        </div>
    </body>
</html>