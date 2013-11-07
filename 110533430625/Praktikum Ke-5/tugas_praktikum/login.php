<!DOCTYPE html>
<html>
<!--
Algoritma Program
 1. Mulai
 2. Jika session dengan nama 'nlogin' dan ber-nilai 'putri' ter-set maka akan tampil halaman isi data yang ada di basis data
 2. Jika session dengan nama 'nlogin' dan ber-nilai 'putri' belum ter-set maka akan tampil halaman login
 4. Selesai
-->
        <head>
                <title>Halaman Administrator(tugas praktikum)</title>
                <style>
                .inner {
                margin: 200px auto;
                padding: 20px;
                width: 240px;
                border: 1px solid #333;
                }
                </style>
        </head>
        
        <body>
                <?php
                session_start();
                ini_set('display_errors', 1);
                define('_VALID', 1);
                
                //include file eksternal
                include('auth.php');
                
                init_login();
                validate();
                ?>
                
                <h3>Selamat Anda memasukki halaman admin</h3>
                
                <p>
                <a href="?m=logout">Logout</a>
                
                <p>
                Menu-menu admin ada disini
                
        </body>
</html>
