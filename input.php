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
                width: 500px;
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

            input[type=submit]:hover {
                background-color: #45a049;
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

input[type=submit]:hover {
  background-color: #45a049;
}
        </style>
    </head>
    <body>
        <h1>Input Data</h1>
        <div class="container">
            <form id="form_tb_buku" action="input_proses.php" method="post">
                <fieldset>
                    <legend>Input Data Buku</legend>
                    <p>
                        <label for="kode_buku">Kode Buku :</label>
                        <input type="text" name="kode_buku" id="kode_buku" placeholder="Contoh: 092612">
                    </p>
                    <p>
                        <label for="judul_buku">Judul Buku :</label>
                        <input type="text" name="judul_buku" id="judul_buku">
                    </p>
                    <p>
                       <label for="jenis_buku">Jenis Buku</label> 
                       <input type="text" name="jenis_buku" id="jenis_buku">
                    </p>
                    <p>
                        <label for="penulis">Penulis :</label>
                        <input type="text" name="penulis" id="penulis">
                    </p>
                    <p>
                        <label for="penerbit">Penerbit :</label>
                        <input type="text" name="penerbit" id="penerbit">
                    </p>
    
                </fieldset>
                <p>
                    <input type="submit" name="input" value="Tambah Data">
                </p>
            </form>
        </div>
    </body>
</html>