<?php
// $p = 9;
// $l = 10;

// // Mencari Luas
// function countTriangle($base, $height){
//         $hasil = $base*$height;
//         echo "MENCARI LUAS :",$hasil;
// }
// countTriangle($p,$l);

// echo "<br>";
// // Mencari Keliling
// function countRectangle($width, $length){
//         $tambah = $width+$length;
//         $hasil = $tambah+2;
//         echo "MENCARI KELILING :",$hasil;
        
// }
// countRectangle($p,$l);


// function countCircle($radius, $diameter){

// }


$a =4;
$b =3;
$c =5;
$t =3;


// Segitiga Keliling
echo "MENCARI LUAS & KELILING SEGITIGA";
echo "<br>";
function countTriangle($base, $height){
    $hitungl = 0.5 * $base * $height;
    echo "LUAS :", $hitungl;
    echo "<br>";
    $hitung =$base+$height+5;
    echo "KELILING :",$hitung;
}
countTriangle($a,$b);

// Segitiga Luas
echo "<br>";
echo "<br>";
echo "<br>";
echo "MENCARI LUAS & KELILING KOTAK";
echo "<br>";
// Kotak 
function countRectangle($width, $length){
            $tambah = $width+$length;
            echo " Keliling :" ,$tambah;
            echo "<br>";
            $hasil = $tambah*2;
            echo " LUAS  :",$hasil;
 }

 countRectangle(30,30);


 echo "<br>";
echo "<br>";
echo "<br>";
echo "MENCARI LUAS & KELILING LINGKARAN";
echo "<br>";



function countCircle($radius,$diameter){
    $hasil1 = 22/7*$radius*$radius;
    echo "Luas Keliling :",$hasil1;
    echo "<br>";

    $hasil2 = 22/7*$diameter;
    echo " Keliling Lingkaran : ", $hasil2;
}
countCircle(14,28);