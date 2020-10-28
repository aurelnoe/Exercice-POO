<?php

include_once("Batiment.php");
include_once("Maison.php");

$batiment1 = new Batiment("Armentières");
$batiment2 = new Batiment("Lille");
$batiment3 = new Batiment("Roubaix");

$maison1 = new Maison(5, $batiment1->getAdresse(), 147.5);
$maison2 = new Maison(4, $batiment2->getAdresse(), 27.5);
$maison3 = new Maison(6, $batiment3->getAdresse(), 198.5);

// echo $batiment1."\n\n";
// echo $batiment1->getAdresse()."\n";
// echo $maison1;

echo($maison1);