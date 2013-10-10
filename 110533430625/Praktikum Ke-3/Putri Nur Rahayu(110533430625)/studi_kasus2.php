<!DOCTYPE html 
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
<title>Data Checkbox</title> 
<script type="text/javascript">
function validasi_input(form){
  function check_checkbox(checkbox)
  {
// memeriksa apakah radio button sudah ada yang dipilih
    for (i = 0; i < checkbox.length; i++)
    {
      if (checkbox[i].checked === true)
      {
        return checkbox[i].value;
      }
    }
   return false;
   }

   var checkbox_val = check_checkbox(form.Jurusan[]);
   if (checkbox_val === false)
    {
      alert("Anda belum memilih Jenis Kelamin!");
      return false;
    }
   return (true);
}
</script>
</head> 
<body> 
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
Hobby
<br>
<input type="checkbox" name="Jurusan[]" value="Teknik Informatika"
<?php 
if($_POST['Jurusan'] == 'Teknik Informatika'){
echo ' checked="checked"';}
?> 
/>Teknik Informatika
<br>
<input type="checkbox" name="Jurusan[]" value="Biologi" 
<?php 
if(!isset($_POST['Jurusan']) or $_POST['Jurusan'] == 'Biologi'){
echo ' checked="checked"';}
?>
/>Biologi
<br>
<input type="checkbox" name="Jurusan[]" value="Bahasa Inggris" 
<?php 
if($_POST['Jurusan'] == 'Bahasa Inggris'){
echo ' checked="checked"';}
?> 
/>Bahasa Inggris <br /> 
<input type="submit" value="ok" /> 
</form> 
<?php 
// Ekstraksi nilai 
if (isset($_POST['Jurusan'])) { 
foreach ($_POST['Jurusan'] as $key => $val) { 
echo $key . ' -> ' .$val . '<br />'; 
} 

}
?> 
</body> 
</html> 