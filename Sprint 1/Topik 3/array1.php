<?php

echo "Masukan Jumlah : ";
$value = (int) fgets(STDIN);

for ($i=0; $i < $value ; $i++) { 
    echo "Masukan Nilai : ";
    $nilai = (int) fgets(STDIN);
    $arr[] = $nilai;
}
//Mean
sort($arr);
print_r($arr);
echo "\n";
$p  = array_sum($arr);
$p1 = count($arr);

echo "Mean";
echo "\n";
echo $p/$p1;
echo "\n";
echo "\n";


//Median
echo "Median";
echo "\n";
$p2 = round(($p1)/2);
$hasilMedian = $arr [$p2-1];
echo $hasilMedian;
echo "\n";
echo "\n";

//MODUS
// $array = array(5,9,6,7,8,9,1,10,10,9);
echo "Modus";
echo "\n";
$mencari1=array_count_values($arr);
print_r($mencari1);
foreach ($mencari1 as $key => $value) {
    if ($value == MAX($mencari1)) {
        echo "MODUS Adalah ", $key, " Dengan Data sebanyak ",$value,"\n";
    }
}
