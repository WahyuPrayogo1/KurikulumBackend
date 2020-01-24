<?php


class  PerpustakaanMini  
{

protected $buku = 
[
    
    [
        'Judul'     =>' API SMS GateWay With Laravel versi 6',
        'ISBN'      => 726336276262,
        'Jumlah'    => 20,
    ],

    [
        'Judul'     =>'Ecommerce With Laravel versi 6',
        'ISBN'      => 284728272944,
        'Jumlah'    => 10
    ],
    
];

public function Pinjam($hari)
    {
        echo "\n";
        $myBook = $this->buku[$hari]['Judul'];
        print_r("Ini Kan Buku Yang di cari:". $myBook. "\n");

        $myBook1 = $this->buku[$hari]['Jumlah'];
        print_r("Jumlah Buku ada :". $myBook1. "\n\n");

        echo "Pinjam Berapa Sluur: ";
        $value = (int) fgets(STDIN);

        $jumlah = $myBook1 - $value ;
        echo "\n";
        print_r("Sisa Buku ".$myBook." Adalah :".$jumlah. "\n");
        
        echo "\n";
        //Batas Peminjaman
        $tanggal = date("d,m,Y");
        echo "Tanggal di Pinjam ",$tanggal,"\n"; 
        
        $tanggal = date("d,m,Y",time()+(60 * 60 *24 * 1));
        echo "Tanggal di Kembalikan Buku : ",$tanggal,"\n";  
        echo "\n";
        echo "\n";
        echo "\n";
        echo "\n";
        echo "Kembalikan Buku ".$myBook." Sluur: \n";
        echo "Buku Yang Di Kembalikan :";
        $value = (int) fgets(STDIN);

        $loncat = $this->Kembalikan($jumlah,$myBook,$value);
    }

    public function Kembalikan($jumlah,$myBook,$value)
    {
        $jumlah1 = $value + $jumlah. "\n";
        print_r("Total Buku : "."$myBook"." ada ".$jumlah1);
    
    }
    
}




//Lihat ARRAY
$book12 = New PerpustakaanMini;
print_r($book12);

echo "Pilih Buku Nomer Berapa: ";
$value = (int) fgets(STDIN);
$book12->Pinjam($value);

// for ($i=0; $i < $book ; $i++) { 
//     echo "Berapa yang mau di Pinjam: ";
//     $nilai = (int) fgets(STDIN);

// }
// $pinjam = new PerpustakaanMini;
// $pinjam->Pinjam($nilai);
// // echo "\n";
// echo "\n";
// $terserah1 = " 1 Tahun";
// $book1 = New PerpustakaanMini;
// $book1 ->Kembalikan($terserah1);