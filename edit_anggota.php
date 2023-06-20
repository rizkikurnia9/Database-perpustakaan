<?php
// memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

// mengecek apakah di url ada nilai get id
if(isset($_GET['id'])){
    // ambil nilai id dari url dan disimpan dalam variable $id
    $id = ($_GET['id']);

    // menampilkan data mahasiswa dari database yang mempunyai id=$id
    $query = "SELECT * FROM tb_anggota WHERE id='$id'";
    $result = mysqli_query($link, $query);
    // mengecek apakah query gagal
    if(!$result){
        die("Query error: " . mysqli_errno($link) .
            " _ " . mysqli_error($link));
    }
    // mengambil data dari databse dan membuat variable untuk menampung data
    // variable ini nantinya akan ditampilkan pada form
    $data = mysqli_fetch_assoc($result);
    $kode_anggota = $data['kode_anggota'];
    $nama_anggota = $data['nama_anggota'];
    $alamat_anggota = $data['alamat_anggota'];
    $jenis_kelamin = $data['jenis_kelamin'];
    } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    header("location:anggota.php");
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
            <form id="form_tb_anggota" action="edit_proses_anggota.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <fieldset>
                    <legend>Edit Data Anggota</legend>
                    <p>
                        <label for="kode_anggota">Kode Anggota :</label>
                        <input type="text" name="kode_anggota" id="kode_anggota" value="<?php echo $kode_anggota ?>">
                    </p>

                    <p>
                        <label for="nama_anggota">Nama Anggota :</label>
                        <input type="text" name="nama_anggota" id="nama_anggota" value="<?php echo $nama_anggota ?>">
                    </p>

                    <p>
                        <label for="alamat_anggota">Alamat Anggota :</label>
                        <input type="text" name="alamat_anggota" id="alamat_anggota" value="<?php echo $alamat_anggota ?>">
                    </p>
                    
                    <p>
                        <label for="jenis_kelamin">Jenis Kelamin :</label>
                        <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $jenis_kelamin ?>">Laki-laki
                    </p>

                </fieldset>
                <p>
                    <input type="submit" name="edit" value="Update Data">
                </p>
            </form>
        </div>
    </body>
</html>