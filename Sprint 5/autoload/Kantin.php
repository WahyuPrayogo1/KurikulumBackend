<?php

function __autoload($class){
    require_once($class.".php");
}

$makanan = new MakananHangat\Makanan;
$minuman = new MinumanDingin\Minuman;
?>