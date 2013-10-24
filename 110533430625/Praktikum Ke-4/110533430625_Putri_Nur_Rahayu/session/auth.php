
<?php
defined('_VALID') or die('not allowed');

function init_login() {
        //Simulasi data account nama dan password
        $name = 'putri';
        $pass = 'putri';
        
        if(isset($_POST['nama']) && isset($_POST['pass'])) {
                $name = trim($_POST['nama']);
                $pass = trim($_POST['pass']);
        
                if(($name === $name) && ($pass === $pass)) {
                        //Jika nama = 'putri' dan pass = 'putri' maka sesion dijalankan 
                        $_SESSION['nama'] = $name;
                        
                        //redirect
        ?>
                        <script type="text/javascript">
                                document.location.href="./";
                        </script>
        <?php
                } else {
                        echo 'Maaf Nama atau password anda salah';
                        return false;
                }
        }
}

function validate() {
        if(!isset($_SESSION['nama'])) {
?>
        <div class="inner">
                <form action="" method="post">
                        <table border=0 cellpadding=6>
                        <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" /></td>
                        </tr>
                        <tr>
                        <td>Password</td>
                        <td><input type="password" name="pass" /></td>
                        </tr>
                        <tr>
                        <td></td>
                        <td><input type="submit" value="LOGIN" /></td>
                        </tr>
                        </table>
                </form>
        </div>
<?php
        exit;
        }
        
        if(isset($_GET['l']) && $_GET['l'] == 'logout') {
                //Untuk Hapus session
                if(isset($_SESSION['nama'])) {
                        unset($_SESSION['nama']);
                }
                
?>
                <script type="text/javascript">
                        document.location.href="./";
                </script>
<?php
        }
}
?>