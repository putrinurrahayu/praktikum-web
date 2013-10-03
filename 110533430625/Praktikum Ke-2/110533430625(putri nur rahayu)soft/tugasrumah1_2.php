<html>
<head>passbyreference</head>
<body>
<?php
function jumlah(&$nilai){
$nilai++;
}
$input=30;
jumlah($input);
echo $input;
?>
</body>
</html>