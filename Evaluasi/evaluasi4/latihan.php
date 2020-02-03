<?php

class NilaiS 
{

     function __construct(){   
  
        $this->dbh = new PDO('mysql:host=localhost;dbname=SantriIT', "root", "");
            if (!$this->dbh) {
                die ("GAGAL COEG".$this->dbh->connect_error. "\n");
            }else{
                echo "Connection Success ! \n";
            }
        }
    public function Tampil()
    {
        $tampil = "SELECT * FROM Nilai";
        $tampil=$this->dbh->prepare($tampil);
        $tampil->execute();
        $result = $tampil->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
    }

    public function tambah($nik,$nama,$kelas,$nilai)
    {

        $insert = "INSERT INTO Nilai (nik,nama,kelas,nilai_MTK) VALUES (:nik,:nama,:kelas,:nilai)";
        $insert=$this->dbh->prepare($insert);
        $insert->BindParam(':nik',$nik);
        $insert->BindParam(':nama',$nama);
        $insert->BindParam(':kelas',$kelas);
        $insert->BindParam(':nilai',$nilai);
        $insert->execute();
        $result = $insert->fetchAll(pdo::FETCH_ASSOC);

        $loncat = $this->Tampil();
    }
    public function input()
    {
        $insert = "SELECT COUNT(id) FROM Nilai ";
        $insert=$this->dbh->prepare($insert);
        $insert->execute();
        $result = $insert->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
        
    }
    public function rata_rata()
    {
        $insert = "SELECT AVG(Nilai_Mtk)From Nilai";
        $insert=$this->dbh->prepare($insert);
        $insert->execute();
        $result = $insert->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
    }
    public function nilai_Tinggi()
    {
        $insert = "SELECT nama,Nilai_Mtk From Nilai Where Nilai_Mtk >= 80";
        $insert=$this->dbh->prepare($insert);
        $insert->execute();
        $result = $insert->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
    }
    public function nilai_Rendah()
    {
        $insert = "SELECT nama From Nilai Where Nilai_Mtk < 65";
        $insert=$this->dbh->prepare($insert);
        $insert->execute();
        $result = $insert->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
    }
}

$masuk = new NilaiS();
echo "SELAMAT DATANG \n";
echo "|==========================| \n";
echo " 1.Tambah Data  \n";
echo " 2.Hitung Semua Data  \n";
echo " 3.Hitung Rata-Rata Nilai  \n";
echo " 4.Nilai Terbaik  \n";
echo " 5.Nilai Remedial \n";
echo "|==========================| \n";

echo "Pilih SLurr : ";
$pilih = (int) fgets(STDIN);

if ($pilih == 1) {
    echo "Masukan Tambah Data Berapa ? ";
    $tambah = (int) fgets(STDIN);

for ($i=0; $i < $tambah ; $i++) { 
    echo "\n\n";
    echo "Masukan NIK : ";
    $nik = (int) fgets(STDIN);

    echo "Masukan Nama : ";
    $nama = (trim(fgets(STDIN)));

    echo "Masukan Kelas : ";
    $kelas = (trim(fgets(STDIN)));

    echo "Masukan Nilai : ";
    $nilai = (int) fgets(STDIN);

    $masuk->tambah($nik,$nama,$kelas,$nilai);
}
}elseif($pilih == 3){

    $masuk->rata_rata();
}elseif($pilih == 2){

    $masuk->input();
}elseif($pilih == 4){

    $masuk->nilai_Tinggi();
}elseif($pilih == 5){

    $masuk->nilai_Rendah();
}




