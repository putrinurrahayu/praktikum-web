<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--Algoritma
1. Input bil1 & bil 2
2. klik operator
3. Hasil nilai
-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kalkulator </title>
</head>

<body background="bg.png"> <!--Untuk background-->
	<p>
 </p>
<form name="fform" method ="post" action = "rumus2.php"> <!--untuk aksinya memanggil rumus2.php -->
<tr>
        	<font color="#610606">
            <blink>	<h1>
<center>
<p>
KALKULATOR</p>
</center>
</h1>
</blink>
            </font>
            	
            <center>
              <table width="259" border="1" bgcolor="#610606">
<tr>
                  <td colspan="5"><center>
<table width="253" border=3 bgcolor="#610606">
<tr>
                      <td>Bilangan Pertama:</td> <!--Untuk inputan pertama-->
                      <td><input size="16" name="bil1" type="text" /></td>
                    </tr>
<tr>
                      <td>Bilangan Kedua:</td><!--Untuk inputan kedua-->
                      <td><input size="16" name="bil2" type="text" /></td>
                    </tr>
<tr>
                      <td>Hasil :</td> <!--Untuk Output hasil dari bilangan pertama dan kedua-->
                      <td><input size="16" name="bil3" type="text" value="<?php if (isset($_GET['bil3'])) echo $_GET['bil3']?>" /></td>
                    </tr>
</table>
</center>
</td>
                </tr>
<center>
<tr>
                  <td width="31"><input value="+"  type="submit" name ="tambah" /></td> <!--Untuk penjumlahan-->
                  <td width="27"><input value="-"  type="submit" name = "kurang" /></td><!--Untuk pengurangan-->
                  <td width="31"><input value="*"  type="submit" name = "kali" /></td><!--Untuk perkalian-->
                  <td width="27"><input value="/"  type="submit" name = "bagi" /></td><!--Untuk pembagian-->
                  <td width="94"><input value="Bersihkan" type="submit" name = "input" /></td> <!--Untuk menghapus-->
                </tr>
</center>
</table>
</center>
</form>
</body>
</html>
