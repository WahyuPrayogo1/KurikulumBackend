<?php
echo "Masukan Jumlah : ";
$value = (int) fgets(STDIN);

for ($i=0; $i < $value ; $i++) { 
    echo "Masukan Nilai : ";
    $nilai = (int) fgets(STDIN);
    $arr[] = $nilai;
}



sort($arr);
// MENCARI TINGGI
print_r($arr);
//-----//
$r2 =array_unique($arr);
$r = array_reverse($r2);
$s = array_slice($r,0,3);
echo "\n";
echo"HASIL YANG TINGGI";
echo "\n";
print_r($s);


echo "\n";
echo "\n";
echo "\n";
echo "\n";


// MENCARI RENDAH
print_r($arr);
rsort($arr);
$re = array_reverse($arr);
$sl = array_slice($re,0,3);
echo "\n";
echo"HASIL YANG RENDAH";
echo "\n";
print_r($sl);
