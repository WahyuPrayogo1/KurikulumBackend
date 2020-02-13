<?php


class autoloadBangunDatar
{
    public function kpersegi($luaspersegi,$kelilingpersegi){
        $hasil = $luaspersegi * $luaspersegi;
        echo "Hasil Luas Persegi: ",$hasil;
        echo "<br>";
        $hasil1 = $kelilingpersegi * 4;
        echo "Hasil Keliling Persegi: ", $hasil1; 
    }

    public function persegiPanjang($lpp,$kpp){
        $hasil = $lpp * $kpp;
        echo "Luas Persegi Panjang :", $hasil;
        echo "<br>";
        $hasil1 = ($lpp + $kpp) * 2;
        echo "Keliling Persegi Panjang :", $hasil1;
    }


}

?>