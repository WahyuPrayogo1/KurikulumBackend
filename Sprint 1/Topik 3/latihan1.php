<?php
// Cara Pertama
$n= 9;
while ($n >= 0) {
    if ($n % 2 == 0) {
        echo " ";
    }
    $n--;
}
while ($n <= 16) {
    if ($n % 2 == 0) {
        echo $n. " ";
    }
    $n++;
}

// Cara Kedua
$n = 9;
while ($n >= 1) {
    if ($n == 9) {
        echo "0";
    }
    elseif ($n == 8) {
        echo "2";
    }
    if ($n == 7) {
        echo "4";
    }
    if ($n == 6) {
        echo "6";
    }
    if ($n == 5) {
        echo "8";
    }
    if ($n == 4) {
        echo "10";
    }
    if ($n == 3) {
        echo "12";
    }
    if ($n == 2) {
        echo "14";
    }
    if ($n == 1) {
        echo "16";
    }
    $n--;
}



