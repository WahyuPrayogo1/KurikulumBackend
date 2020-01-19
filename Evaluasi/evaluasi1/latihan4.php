<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Latihan1</h1>
    <form action="" method="POST" >
        <table>
            <tr>
                <td>
                    <input type="number" name="angka" placeholder="Disini Bos">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="number" name="angka1" placeholder="Disini Bos">
                </td>
            </tr>
            <tr>
                <td>
                    <select name="pilihan" id="pilihan">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
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
$angka = $_POST['angka'];
$angka1 = $_POST['angka1'];
$pilihan = $_POST['pilihan'];

if (isset($_POST['submit'])) {
    if ($pilihan == '+') {
        echo "Jawaban anda", $angka + $angka1;
    }elseif($pilihan == '-'){
        echo "Jawaban anda", $angka - $angka1;
    }elseif($pilihan == '*'){
        echo "Jawaban anda", $angka * $angka1;
    }elseif($pilihan == '/'){
        echo "Jawaban anda", $angka / $angka1;
    }
}