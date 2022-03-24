<?php
require_once "class_persegipanjang.php";
$persegipanjang1 = new persegipanjang(15,5);
$persegipanjang2 = new persegipanjang(10,5);

echo "<br/>Persegi panjang 1 Memiliki Nilai P : 15 L: 5 ";
echo "<br/>Persegi panjang 2 Memiliki Nilai P : 10 L: 5 ";

echo "<br/>Luas Persegi panjang 1 : ".$persegipanjang1->getluas();
echo "<br/>Luas Persegi panjang 2 : ".$persegipanjang2->getluas();

echo "<br/>Keliling persegi panjang 1 : ".$persegipanjang1->getkeliling();
echo "<br/>Keliling persegi panjang 2 : ".$persegipanjang2->getkeliling();

?>