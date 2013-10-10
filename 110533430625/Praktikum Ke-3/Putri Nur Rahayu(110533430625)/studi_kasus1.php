<!DOCTYPE html 
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
<title>Studi Kasus 1</title> 
</head> 
<body> 
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
Pekerjaan 
<select name="job"> 
<option value="Mahasiswa"
<?php if ($_POST['job'] == 'Mahasiswa') {echo ' selected="selected"';} ?> 
>Mahasiswa 

<option value="ABRI"
<?php if ($_POST['job'] == 'ABRI') {echo ' selected="selected"';} ?> 
>ABRI 

<option value="PNS"
<?php if (!isset($_POST['job']) or $_POST['job'] == 'PNS') {echo 'selected="selected"';}?>
>PNS 

<option value="Swasta"
<?php if ($_POST['job'] == 'Swasta') {echo ' selected="selected"';}?> 
>Swasta 
</select> 
<br/> 
<input type="submit" value="ok" /> 
</form> 
<?php 
if (isset($_POST['job'])) { 
echo $_POST['job']; 
} 
?> 

</body> 
</html> 