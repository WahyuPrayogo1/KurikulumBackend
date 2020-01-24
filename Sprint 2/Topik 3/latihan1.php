<?php


class Tugas extends Exception
{   
    public static function Persegipanjang($persegi,$persegi1)
    {
      echo "Luas Persegi :".$persegi*$persegi1."\n";

        $jumlah = 2*($persegi+$persegi1);
        $angka = 100;
        $hasil = $jumlah - $angka;

        if ($hasil < 0) {
            throw new Exception("Hasil Keliling Persegi Tidak Boleh Kurang dari 0 \n" ."Eh Hasilnya malah :".$hasil ."\n");
        }
        
        echo "Keliling Persegi:". $jumlah;
    }

    public static function Lingkaran($diameter)
    {
        echo "\n";
        $jar = $diameter/2 ;
         $hitung = " Luas Lingkaran :". (3.14*($jar**2))."\n";
        echo "Hasil :". $hitung;

        $hitungk =" Keliling Lingkaran :". 2*3.14*$jar;
        echo "Hasil :".$hitungk;
    }

    public static function Trapesium($jajar,$tinggi,$miring,$jajarp)
    {

        //Mencari Luas
        $hitung = ($jajar+$jajar)*$tinggi/2;
        echo "Mencari Luas :".$hitung."\n";
        
        // Mencari Keliling
        $hitung2 = $jajarp+$jajar+$tinggi+$miring;
        echo "Mencari Keliling :".$hitung2."\n";


    }

}
echo "Menghitung Persegi Panjang \n";
echo "Panjang :";
$persegi = (int) fgets(STDIN);     

echo "Lebar :";
$persegi1 = (int) fgets(STDIN);
// Memanggil Method Static


$result = null;
try{
    $result = Tugas::Persegipanjang($persegi,$persegi1);
} catch (Exception $e){
    echo "\n\n";
    echo "Error pada :".__DIR__."\n"."Baris Ke :". $e->getLine()."\n";
    echo "Bosque " .$e->getMessage();
}
echo $result;
echo "\n\n\n\n";

echo "Menghitung Lingkaran\n\n"; 

echo "PILIH !!!\n";
echo "(lanjut / tidak)\n";
$lanjut = trim (fgets(STDIN));

if ($lanjut == 'lanjut') {
    echo "Diameter :";
    
    $diameter = (int) fgets(STDIN);
    $lingkaran = Tugas::Lingkaran($diameter);
    echo "\n\n\n\n";


    echo "Menghitung Trapesium\n\n"; 
    echo "PILIH !!!\n";
    echo "(lanjut / tidak)\n";
    $lanjut1 = trim (fgets(STDIN));

    if ($lanjut1 == 'lanjut') {
        echo "Sisi Sejajar Pendek :";
        $jajar = (int) fgets(STDIN);
        echo "Sisi Sejajar Panjang :";
        $jajarp = (int) fgets(STDIN);
        echo "Sisi Miring :";
        $miring = (int) fgets(STDIN);
        echo "Tinggi";
        $tinggi = (int) fgets(STDIN);
        $lingkaran = Tugas::Trapesium($jajar,$miring,$tinggi,$jajarp);
    }
}



echo "terima Kasih";







// // Memanggil Method dalam Construct
// $ngasal = new PersegiPanjang($input1,$input);