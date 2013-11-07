<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<!-- 
Algoritma :
1. Start
2. Tampil tabel yang berisi dari data dari basis data myweb dan tabel mahasiswa
3. Jika ingin menambah data pilih "tambah data" dan isi teksbox lalu submit
4. Jika ingin mengedit data pilih "edit" lalu ubah data dan submit
5. jika ingin menghapus data pilih "delete" lalu pilih ok 
6. End
-->
<title>Akses dan Manipulasi Data</title>
<style type="text/css">
.even {
background: #ddd;
}
</style>
</head>
<body>
<?php
ini_set('display_errors',1);
// Meng-include file koneksi dan data handler
require_once './koneksi.php';
require_once './data_handler.php';
// Konstanta nama tabel
define('MHS', 'mahasiswa');
// Memanggil fungsi data handler
data_handler('?m=data');
?>
</body>
</html>