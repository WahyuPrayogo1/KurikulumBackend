<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konversi SUHU</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <form action="" method="POST" >
        <table>
            <tr>
                <td>
                    <small>ini Celcius</small>
                    <input type="number" name="form" placeholder="Berapa Celcius">
                </td>
            </tr>
           
            <tr>
                <td>
                <select name="pilihan" id="pilihan">
                    <option value="c">Celcius</option>
                    <option value="f">ahrenheit</option>
                    <option value="k">Kelvin</option>
                    <option value="r">Reamur</option>
                </select>
            </td>
            </tr>
            <td>
                <input type="submit" name="submit" value="Cek DIsini">
            </td>
        </table>
        
    </form>
</body>
</html>
<?php
$form = $_POST["form"];
$pilihan = $_POST["pilihan"];

$celcius    = 1;
$kelvin     = 274.15;
$fahrenheit = 33.8;
$reamur     = 0.8;



if (isset($_POST['submit'])) {
    if ($pilihan == 'k' ) {
        echo "yang kamu pilih kelvin ", $form * 274.15;
    }elseif($pilihan == 'c'){
        echo "yang Kamu pilih Celcius ", $form * 1;
    }elseif($pilihan == 'f'){
        echo "yang Kamu pilih fahrenheit ", $form * 33.8;
    }elseif($pilihan == 'r'){
        echo "yang Kamu pilih reamur ", $form * 0.8;
    }
}