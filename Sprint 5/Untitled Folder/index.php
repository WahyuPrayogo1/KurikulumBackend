<?php
require_once __DIR__. '/vendor/autoload.php';

use Carbon\Carbon;
use KodingWaelah\autoloadBangunDatar;
use Carbon\CarbonImmutable;

$tampil = Carbon::now();
$tampil1 = CarbonImmutable::now();
$modiftampil = $tampil->add(1,'day');
$modiftampil1 = CarbonImmutable::now()->add(1, 'day');

echo $tampil;
echo "<br>";
echo $tampil1;
echo "<br>";
echo $modiftampil;
echo "<br>";
echo $modiftampil1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Datar</title>
</head>
<body>

<form action="" method="post">
    <div>
        <label for="luas_persegi">Luas Persegi</label>
        <input type="number" id="luas_persegi" name="luas_persegi">
    </div>

    <div>
        <label for="keliling_persegi">Keliling Persegi</label>
        <input type="number" id="keliling_persegi" name="keliling_persegi">
    </div>

    <input type="submit" name="submit" value="Cari Keliling & Luas Persegi !!"> 
</form>
    <hr>
<form action="" method="post">
    <div>
        <label for="luas_persegi_panjang">Panjang Persegi Panjang</label>
        <input type="number" id="luas_persegi_panjang" name="luas_persegi_panjang">
    </div>

    <div>
        <label for="keliling_persegi_panjang">Luas Persegi Panjang</label>
        <input type="number" id="keliling_persegi_panjang" name="keliling_persegi_panjang">
    </div>

    <input type="submit" name="submit1" value="Cari Keliling & Luas Persegi Panjang !!"> 
</form>
<hr>
<form action="" method="post">
    <div>
        <label for="luas_persegi_panjang">Jari - Jari</label>
        <input type="number" id="luas_persegi_panjang" name="jarijari">
    </div>

    <input type="submit" name="submit2" value="Cari Keliling & Luas Lingkaran !!"> 
</form>

</body>
</html>

<?php

//BATAS

if (isset($_POST['submit'])) {
    $luas_persegi = $_POST['luas_persegi'];
    $keliling_persegi = $_POST['keliling_persegi'];

    $tampil = new KodingWaelah\autoloadBangunDatar;
    $tampil->kpersegi($luas_persegi,$keliling_persegi);
}

if (isset($_POST['submit1'])) {
    $lpp = $_POST['luas_persegi_panjang'];
    $kpp = $_POST['keliling_persegi_panjang'];

    $tampil = new KodingWaelah\autoloadBangunDatar;
    $tampil->persegiPanjang($lpp,$kpp);
} 


if (isset($_POST['submit2'])) {
    $jariJari = $_POST['jarijari'];


    $tampil = new KodingWaelah\autoloadBangunDatar;
    $tampil->Lingkaran($jariJari);

}
?>




