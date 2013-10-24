<!--
Algoritma Program
 1. Start
 2. Jika session dengan nama 'login' dan jika name dan pass 'putri' ter-set maka akan tampil halaman simulasi admin
 2. Jika session dengan nama 'login' dan jika name dan pass 'putri' belum ter-set maka akan tampil halaman login
 4. End -->

<!DOCTYPE html>
<html>


      	<head>
                <title>Halaman Administrator(tugas praktikum)</title>
                <style>
                .inner {
                margin: 200px auto;
                padding: 30px;
                width: 240px;
                border: 1px solid #333;
		background-image:url(bg.png);
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
                
                <h6> SIMULASII HALAMAN FORM</h6>
                
                <p>
                <a href="?l=logout">Logout</a>
                
                
                
        </body>
</html>