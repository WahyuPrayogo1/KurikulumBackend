<?php
class autoloadBangunDatar2{

    public function Lingkaran($jariJari){

        $hitung = $jariJari*3.14;
        $total = $hitung*4.5;
        $totalb= $total*4.5**2;

        echo "Hasil dari Luas Lingkaran : ", $totalb;
        echo "<br>";

        $hitung1 = 2*3.14*$jariJari;

        echo "Hasil dari Keliling Lingkaran : ", $hitung1;
    }

    public function segitiga($sisi)
    {
        $hitung = $sisi * $sisi;
        echo "Luas Segitiga : ",$hitung;
        echo "<br>";
        $hitung2 = $sisi * 4;
        echo "Keliling Segitiga : ",$hitung2;
    }

}
?>