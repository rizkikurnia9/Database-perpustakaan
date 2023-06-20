<?php 

$host = "localhost";
$user = "root";
$pass = "";
$name = "db_perpus";
$link = mysqli_connect($host, $user, $pass, $name);

if(!$link){
    die("koneksi dengan databse gagal:" . mysqli_connect_errno() .
        " _ " . mysqli_connect_error());
}
?>