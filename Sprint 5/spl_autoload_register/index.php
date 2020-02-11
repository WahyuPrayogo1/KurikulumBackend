<?php

function autoloadMakanan($class)
{
    $file = "makanan/{$class}.php";
    if (is_readable($file)) {
        require $file;
    }
}

function autoloadMinuman($class)
{
    $file = "minuman/{$class}.php";
    if (is_readable($file)) {
        require $file;
    }
}
spl_autoload_register("autoloadMakanan");
spl_autoload_register("autoloadMinuman");
$tampilFoo = new autoloadMakanan();
$tampilFoo->read();
$tampilBar = new autoloadMinuman();
$tampilBar->read();