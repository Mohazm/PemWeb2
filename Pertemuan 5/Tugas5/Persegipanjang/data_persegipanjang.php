<?php 
require_once('class_persegipanjang.php');

// instansiasi object lingkaran
$pj1 = new Persegipanjang(20, 3);
$pj2 = new Persegipanjang(8, 2);

//Memanggil method dari object
echo "<br> Luas Persegipanjang 1: " . $pj1->getLuas();
echo "<br> Luas Persegipanjang 2: " . $pj2->getLuas();

echo '<br>';

echo "<br> Keliling Persegipanjang 1: " . $pj1->getKeliling();
echo "<br> Keliling Persegipanjang 2: " . $pj2->getKeliling();




?>
