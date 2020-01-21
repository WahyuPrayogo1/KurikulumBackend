<?php
class WarungKopi 
{
    protected $bahan = 
    [
        "Kopi Malaka","Susu Sapi","Gula Pasir"
    ];

    public function order($toping)
    {
        $kopi = $this->bahan['1'];
        print_r($kopi);
        echo " + Kopi = ". $toping. "\n";
    }

    protected function proses()
    {
        $kopi = cara($bahan);

        return $kopi;
    }

}


class WarungSodaSusu extends WarungKopi
{
    protected $toping = ['Gula'];

    public function applyTopping()
    {
        $kopipanas =$this->bahan;
        return $kopipanas;
    }
}
$warungKopi = new WarungSodaSusu();
$warungKopi->applyTopping();

print_r($warungKopi); 