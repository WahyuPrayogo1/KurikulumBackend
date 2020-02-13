<?php
namespace KodingWaelah;

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

    public function Lingkaran($jariJari){

        $hitung = $jariJari*3.14;
        $total = $hitung*4.5;
        $totalb= $total*4.5**2;

        echo "Hasil dari Luas Lingkaran : ", $totalb;
        echo "<br>";

        $hitung1 = 2*3.14*$jariJari;

        echo "Hasil dari Keliling Lingkaran : ", $hitung1;
    }

    public function read(){
        echo"haha";
    }
}

?>