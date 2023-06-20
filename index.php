<?php

include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                /* background-image: url("img/backround.png");
                background-position-y:100vh ;
                background-size: cover; */

                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            .section-card {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                column-gap: 48px;
                width: 80%;
                margin: 60px auto;
                background-color: #fff;
            }

            .card {
                background-color: #fff;
                box-shadow: 0 20px 40px rgba(0, 0, 0, .2);
            }

            .card-img {
                width: 100%;
                display: block;
            }

            .card_details {
                padding: 10px 0;
            }

            .card_details ul {
                list-style: none;
                display: flex;
                flex-direction: column;
                margin: 0 auto;
                width: 80%;
                padding: 20px 0;
            }

            .card_details ul li {
                width: 100%;
                text-align: center;
                font-size: 16px;
                padding: 12px 0;
            }

            .card_details ul li:not(:last-child) {
                border-bottom: 1px solid #bbb;
            }

            /* button */

            .btn {
                text-decoration: none;
                text-transform: uppercase;
                text-align: center;
                color: #eee;
                font-weight: 500;

                display: inline-block;
                padding: 14px 28px;
                border-radius: 100px;
                margin-left: 50%;
                transform: translateX(-50%);
                margin-bottom: 30px;
            }

            .card-1 .btn {
                background-color: #2E5180;
            }
            .card-1 .btn:hover {
                    background: green;
                    text-decoration: none;
            }

            .card-2 .btn {
                background-color: #2E5180;
            }
            .card-2 .btn:hover {
                background: green;
                text-decoration: none;
            }

            .card-3 .btn {
                background-color: #2E5180;
            }
            .card-3 .btn:hover {
                background: green;
                text-decoration: none;
            }

            .wrapper {
                width: 1500px;
                margin: auto;
                position: relative;
            }
            .logo {
                font-size: 50px;
                font-weight: bold;
                float: left;
                font-family: 'Courier New', Courier, monospace;
                color: #;
            }
            .menu {
                float: right;
            }
            nav {
                width: 100%;
                margin: auto;
                display: flex;
                line-height: 80px;
                position: sticky;
                top: 0;
                background: #fff;
                z-index: 1;
                border-bottom: 1px solid #2E5180;
            }

            .img img{
                width: 100%;
                align-items: center;
            }

        </style>
    </head>

    <body>
    <nav>
        <div class="wrapper">
            <div class="logo">Perpustakaan SMK N 4 PAYAKUMBUH</div>
            <div class="menu">
        </nav><br><br><br>
    <section class="section-card">
        <div class="card card-1">
            <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="petugas" class="card-img">
            <div class="card_details">
                <ul>
                 <li>Data Pegawai</li>
                </ul>
            </div>
            <a href="pegawai.php" class="btn">Lihat</a>
        </div>

        <div class="card card-2">
            <img src="https://images.unsplash.com/photo-1630178836733-3d61d8974258?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1032&q=80" alt="sekolah" class="card-img">
            <div class="card_details">
                <ul>
                    <li>Data Anggota</li>
                </ul>
            </div>
            <a href="anggota.php" class="btn">Lihat</a>
        </div>

        <div class="card card-3">
            <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="daily" class="card-img">
            <div class="card_details">
                <ul>
                    <li>Data Buku</li>
                </ul>
            </div>
            <a href="buku.php" class="btn">Lihat</a>
        </div>
    </section><br><br><br>
    <!-- <div class="img">
        <img src="img/smk4.png" alt="">
    </div> -->
    </body>
</html>