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
            <form id="form_tb_pegawai" action="input_proses_pegawai.php" method="post">
                <fieldset>
                    <legend>Input Data Pegawai</legend>
                    <p>
                        <label for="kode_pegawai">Kode Pegawai :</label>
                        <input type="text" name="kode_pegawai" id="kode_pegawai" placeholder="Contoh: 092612">
                    </p>
                    <p>
                        <label for="nama_pegawai">Nama Pegawai :</label>
                        <input type="text" name="nama_pegawai" id="nama_pegawai">
                    </p>
                    <p>
                       <label for="alamat_pegawai">Alamat Pegawai :</label> 
                       <input type="text" name="alamat_pegawai" id="alamat_pegawai">
                    </p>
                    <p>
                       <label for="shift">Shift :</label> 
                       <input type="text" name="shift" id="shift">
                    </p>
                   

    
                </fieldset>
                <p>
                    <input type="submit" name="input" value="Tambah Data">
                </p>
            </form>
        </div>
    </body>
</html>