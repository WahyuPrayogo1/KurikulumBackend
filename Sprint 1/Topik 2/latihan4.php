<?php

$angka = 2;
$rumus = 3.14;
$r     = 4.5;
$r2    = 4.5**2;

$test1 = $angka*$rumus;
$hasil = $test1*$r;
$hasil1 = $test1*$r2;
$penyelesainKeliling = $angka * $rumus * $r;

echo "MENCARI LUAS";
echo "<br>";
echo "penyelesain ", $rumus, " x ", $r2;
echo "<br>";
echo "Hasil Luas =", $hasil1;
echo "<br>";
echo "<br>";
echo "Mencari Keliling";
echo "<br>";
echo "Penyelesain ", " 2 x 3.14 x 4,5";
echo "<br>";
echo "Hasil Keliling = ", $penyelesainKeliling;

