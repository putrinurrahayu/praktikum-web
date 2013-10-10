<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
 <title>Login Tugas Rumah Putri</title>
 
 <script type="text/javascript">
// Fungsi check digunakan untuk mengecheck kosong atau tidaknya inputtan username dan password
function check()
{
    if(form1.user.value == "")
    {
        alert('Masukkan User Name Terlebih Dahulu ');
        document.form1.user.focus();
        return false;
    }
    else if(form1.pass.value=="")
    {    
        alert('Masukkan Password Terlebih Dahulu ');
        document.form1.pass.focus();
        return false;
    }    
return true;
}

// Fungsi Huruf digunakan untuk mengecheck penggunaan selain huruf tidak diperbolehkan
function Huruf(evt) 
{
    evt = (evt) ? evt : window.event
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if ((charCode > 31 && charCode < 65) || (charCode > 90 && charCode < 97) || charCode > 122) {
        alert('Masukkan User Name dan Password Harus Berupa Huruf ');
        return false;
    }
    return true;
}
</script>

 <style type="text/css">
#apDiv1 {
    width:275px;
	margin:100px auto;
	padding:20px 40px;
	border:1px solid #f4f4f4;
	background:rgba(255,255,255,.5);
	-webkit-border-radius:10px;
	-moz-border-radius:10px;
	border-radius:10px;
	
	-webkit-box-shadow: 0 0 2px #aaa;
	-moz-box-shadow: 0 0 2px #aaa;
	box-shadow: 0 0 2px #aaa;
}
#apDiv3 {
    position:absolute;
    width:80px;
    height:25px;
    z-index:2;
    left: 560px;
    top: 390px;
}
.style3 {
    font-size: 10px;
    font-weight: bold;
}
#apDiv2 {
    position:absolute;
    width:412px;
    height:115px;
    z-index:2;
    top: 0px;
    left: 2px;
}
#header{
    width:373px;
    height:98px;
    background-image: url(headerlogin.JPG);
}
#footer{
    width:373px;
    height:40px;
    background-image: url(footer.JPG);
}
body {
   background-image:url(bg.png);
	font-family: 'Oleo Script', cursive;
}
#apDiv4 {
    position:absolute;
    width:409px;
    height:221px;
    z-index:2;
    left: 500px;
    top: 440px;
}
</style>

</head>

<body onLoad="document.form1.user.focus();">
<form name="form1" action="<?php $_SERVER['PHP_SELF'];?>"  method="post" onsubmit="return check(this)">
<div id="apDiv1">
  <div id="header">
    <br>
  </div>
  <div>
    <div align="center"><strong><br>User Name :</strong>    
    <br>
    <input type="text" name="user" size="35" value="" title="Input berupa harus huruf" autocomplete="off" onKeyPress="return Huruf(event)">
    <br>
    <br>
    <strong>Password : </strong>  
    <br>
    <input type="password" name="pass" size="35" title="Input berupa harus huruf" autocomplete="off" onKeyPress="return Huruf(event)">
    <br>
    <br>
    </div>
  </div>
  <br>
    
     
  </div>
  <div id="apDiv3" >
 <input type="submit" name="submit" value=" Log in " >
    </div>
</form>
<div id="apDiv4">
<?php
// digunakan untuk pengecheckkan apakah isi dari inputan user dan password berupa string dan apakah sudah benar atau tidak
if(is_string($_POST['user']) AND ($_POST['pass'])) 
{    
    if (($_POST['user']=='putri')AND($_POST['pass']=='putri'))
    {
        echo 'Sukses, Anda Telah login Administator Dengan User Name :'.$_POST['user'];
        echo '<br>Selamat Datang, Mrs ' . $_POST['user'];
    }
    else 
    {
        echo "<script>alert ('Username atau Password Anda Kemungkinan Salah, Silahkan Mencoba Kembali...!!');</script>";
    }
    
}

?>
</div>
</body>
</html>