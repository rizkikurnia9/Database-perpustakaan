<?php
// memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

// mengecek apakah di url ada nilai get id
if(isset($_GET['id'])){
    // ambil nilai id dari url dan disimpan dalam variable $id
    $id = ($_GET['id']);

    // menampilkan data mahasiswa dari database yang mempunyai id=$id
    $query = "SELECT * FROM tb_pegawai WHERE id='$id'";
    $result = mysqli_query($link, $query);
    // mengecek apakah query gagal
    if(!$result){
        die("Query error: " . mysqli_errno($link) .
            " _ " . mysqli_error($link));
    }
    // mengambil data dari databse dan membuat variable untuk menampung data
    // variable ini nantinya akan ditampilkan pada form
    $data = mysqli_fetch_assoc($result);
    $kode_pegawai = $data['kode_pegawai'];
    $nama_pegawai = $data['nama_pegawai'];
    $alamat_pegawai = $data['alamat_pegawai'];
    $shift = $data['shift'];
    } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    header("location:pegawai.php");
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
            <form id="form_tb_pegawai" action="edit_proses_pegawai.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <fieldset>
                    <legend>Edit Data Pegawai</legend>
                    <p>
                        <label for="kode_pegawai">Kode Pegawai :</label>
                        <input type="text" name="kode_pegawai" id="kode_pegawai" value="<?php echo $kode_pegawai ?>">
                    </p>

                    <p>
                        <label for="nama_pegawai">Nama Pegawai :</label>
                        <input type="text" name="nama_pegawai" id="nama_pegawai" value="<?php echo $nama_pegawai ?>">
                    </p>

                    <p>
                        <label for="alamat_pegawai">Alamat Pegawai :</label>
                        <input type="text" name="alamat_pegawai" id="alamat_pegawai" value="<?php echo $alamat_pegawai ?>">
                    </p>

                    <p>
                        <label for="shift">Shift :</label>
                        <input type="text" name="shift" id="shift" value="<?php echo $shift ?>">
                    </p>
                    
                   
                </fieldset>
                <p>
                    <input type="submit" name="edit" value="Update Data">
                </p>
            </form>
        </div>
    </body>
</html>