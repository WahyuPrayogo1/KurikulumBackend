<?php 
/**
 * 
 */
class Register 
{
	
	function __construct($bisa1)
	{

		print_r($bisa1[0]);
		print_r($bisa1[1]);
	}

	 static function namaSantri($bisa)
	{
		echo "Nama Santri Terbaru \n";
		$ambil = $bisa;

		print_r($ambil);
	}

}


echo "Mau Berapa Santri yang Di Tambahkan ? \n";
$masuk = (int) fgets(STDIN);

for ($i=0; $i < $masuk ; $i++) { 
	echo "Masukan Nama Santri : \n";
	$nama =(trim(fgets(STDIN)));
	echo "Masukan Nama alamat : \n";
	$alamat = (trim(fgets(STDIN)));
		
	$arr1[][] = $nama;

	
	$run = $arr1;
	
}


$bisa1 = $run;
$masuk = new register($bisa1);

// $bisa = $arr1;
// $masuk = register::namaSantri($bisa,$bisa1);





 ?>