<html>

<head>
<title>Set Cookie</title>
</head>
<body>
<?php
//Mem set nilai cookie
setcookie('nama_cookie','nilai_cookie');
//Mendapatkan nilai cookie
echo $_COOKIE['nama_cookie'];
?>

</body>
</html>