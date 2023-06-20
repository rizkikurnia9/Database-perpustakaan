<?php
// memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

// mengecek apakah di url ada nilai get id
if(isset($_GET['id'])){
    // ambil nilai id dari url dan disimpan dalam variable $id
    $kode_buku = ($_GET['id']);

    // menampilkan data mahasiswa dari database yang mempunyai id=$id
    $query = "SELECT * FROM tb_buku WHERE kode_buku='$kode_buku'";
    $result = mysqli_query($link, $query);
    // mengecek apakah query gagal
    if(!$result){
        die("Query error: " . mysqli_errno($link) .
            " _ " . mysqli_error($link));
    }
    // mengambil data dari databse dan membuat variable untuk menampung data
    // variable ini nantinya akan ditampilkan pada form
    $data = mysqli_fetch_assoc($result);
    $kode_buku = $data['kode_buku'];
    $judul_buku = $data['judul_buku'];
    $jenis_buku = $data['jenis_buku'];
    $penulis = $data['penulis'];
    $penerbit = $data['penerbit'];
} else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            h1{
                text-align: center;
            }
            .container{
                width: 400px;
                margin: auto;
            }
            input[type=submit] {
                background-color: #04AA6D;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                float: left;
            }
            input[type=text], select, textarea {
                width: 450px;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
            }

            label {
                padding: 12px 12px 12px 0;
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <h1>Edit Data</h1>
        <div class="container">
            <form id="form_tb_buku" action="edit_proses.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <fieldset>
                    <legend>Edit Data Buku</legend>
                    <p>
                        <label for="kode_buku">Kode Buku :</label>
                        <input type="text" name="kode_buku" id="kode_buku" value="<?php echo $kode_buku ?>">
                    </p>

                    <p>
                        <label for="judul_buku">Judul Buku :</label>
                        <input type="text" name="judul_buku" id="judul_buku" value="<?php echo $judul_buku ?>">
                    </p>

                    <p>
                        <label for="jenis_buku">Jenis Buku :</label>
                        <input type="text" name="jenis_buku" id="jenis_buku" value="<?php echo $jenis_buku ?>">
                    </p>
                    
                    <p>
                        <label for="penulis">Penulis :</label>
                        <input type="text" name="penulis" id="penulis" value="<?php echo $penulis ?>">
                    </p>

                    <p>
                        <label for="penerbit">Penerbit :</label>
                        <input type="text" name="penerbit" id="penerbit" value="<?php echo $penerbit ?>">
                    </p>
                </fieldset>
                <p>
                    <input type="submit" name="edit" value="Update Data">
                </p>
            </form>
        </div>
    </body>
</html>