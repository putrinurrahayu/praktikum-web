<?php

    $bil1 = $_POST['bil1'];//variabel $bil1=bil1

    $bil2 = $_POST['bil2'];//variabel $bil2=bil2

    if ($tambah = $_POST['tambah'])//jika tambah maka $bil1+$bil2

    {

    $hasil = $bil1 + $bil2 ;
    }

    if ($kurang = $_POST['kurang'])//jika kurang maka $bil1-$bil2

    {
		$hasil = $bil1 - $bil2;
    }

    if ($kali = $_POST['kali'])//jika kali maka $bil1*bil2

    {

    $hasil = $bil1 * $bil2 ;

    }

    if ($bagi = $_POST['bagi'])//jika bagi maka $bil1/$bil2

    {$hasil = $bil1 / $bil2 ;

    }
	
	header ("location:index.php?bil3=$hasil");//memanggil form index.php
	
	?>
