<html>
<head><title>Studi kasus 2</title></head>
<body>
<?php
function table($a,$b){
	echo "<table border=5>";
	for($i=1; $i<=$a; $i++){
		echo "<tr height=50>";
		for($j=1; $j<=$b; $j++){
			echo "<td width=50></td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
table(3,4);
?>
</body>
</html>