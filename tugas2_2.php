<?php
$hargaboneka = 50000;
$hargajual = 80000;

echo "Jual = $hargajual <br>";
echo "Beli = $hargaboneka <br>";
echo "Keuntungan = .... ? <br>";

$keuntungan = ($hargajual - $hargaboneka)/$hargaboneka;
$persen = $keuntungan * 100;
echo "Jawaban :  $persen %";
?>