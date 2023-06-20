<?php
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
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>   Data Pegawai</a>
                    </div>
                </nav>
                <div class="mt-5"></div>
                <figure class="text-center">
                <blockquote class="blockquote">
                    <p>Data Pegawai Yang Terdaftar</p>
                </blockquote>
                <figcaption class="blockquote-footer" >
                    Perpustakaan<cite title="Source Title">SMKN 4 PYK</cite>
                </figcaption>
                </figure>

                <div class="col text-center">
                <button type="button" class="btn btn-info"><a href="input_pegawai.php">
                <i class="fa fa-file-text" aria-hidden="true"></i>  Tambah Data</button>
                </div>

            <div class="mt-5"></div>

            <div class="mt-5"></div>

            <div class="table-responsive">
            <table class="table align-middle">
            <tr>
                <th>No</th>
                <th>Kode Pegawai</th>
                <th>Nama Pegawai</th>
                <th>Alamat</th>
                <th>Shift</th>
                <th>Pilihan</th>
            </tr>
        
            <?php
            
            $query = "SELECT * FROM tb_pegawai ORDER BY kode_pegawai ASC";
            $result = mysqli_query($link, $query);
            
            if(!$result){
                die("Querry Error:".mysqli_errno($link). " _ ".mysqli_error($link));
            }

            
            $no =1;
            while($data = mysqli_fetch_assoc($result))
            {
                
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>$data[kode_pegawai]</td>";
                echo "<td>$data[nama_pegawai]</td>";
                echo "<td>$data[alamat_pegawai]</td>";
                echo "<td>$data[shift]</td>";
                echo '<td>
                <button type="button" class="btn btn-primary btn-sm"><a href="edit_pegawai.php?id='.$data['id'].'"
                <i class="fa fa-pencil" aria-hidden="true"></i>   edit</a></button>
                <button type="button" class="btn btn-danger btn-sm"><a href="hapus_pegawai.php?id='.$data['id'].'"
                <i class="fa fa-file-text" aria-hidden="true"></i>   hapus</a></button>
                </td>';
                echo "</tr>";
                $no++; 
                
            }
            ?>


        </table>
    </body>
</html>