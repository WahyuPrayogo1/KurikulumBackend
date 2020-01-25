<?php 
/**
 * 
 */

class Pendaftaran 
{
	protected $property =
	[

		[
			'namaPondok'	=> 	'Pondok Programmer',
			'tempat'		=>	'Kretek Slur'	

		],

		[
			'namaPondok'	=>	'Pondok Multimedia',
			'tempat'		=>	'Glagah Slur'
		]

	];

	function __construct()
	{

		$tampil = $this->property;
		print_r($tampil);

		echo "Mau Masuk Pondok Mana ? (0 / 1) \n";
		$masuk = (int) fgets(STDIN);

		$tampil = $this->property[$masuk]['namaPondok'];
		print_r('Kamu Masuk : '.$tampil);
		echo "\n";

		echo "Masukan Data Diri Anda: \n";
		echo "Nama : ";
		$input_nama = trim(fgets(STDIN)); 

		if ( count($input_nama) > length("10") {
			throw new Exception("Karakter Nama tidak boleh lebih dari 10 \n");
			
		}

		echo "Alamat :";
		$input_alamat = trim(fgets(STDIN)); 
	}

	

	// public function daftar($masuk)
	// {
	// 	$tampil = $this->property[$masuk]['namaPondok'];
	// 	print_r('Kamu Masuk : '.$tampil);
	// 	echo "\n";

	// 	echo "Masukan Data Diri Anda: \n";
	// 	echo "Nama : ";
	// 	$input = trim(fgets(STDIN)); 

	// 	echo "Alamat :";
	// 	$input = trim(fgets(STDIN)); 

	// }

}
$tampil = new Pendaftaran;
// print_r($tampil);
// echo "\n";

// echo "Mau Masuk Pondok Mana ? (0 / 1) \n";
// $masuk = (int) fgets(STDIN);

// $tampil->daftar($masuk);

$result = null;
try {

	$result = Pendaftaran::__construct();
	
} catch (Exception $e) {
	echo "Eror Pada ". __DIR__."Baris Pada".$e->getLine();
	echo "Bosque". $e->getMessage();
}

 ?>