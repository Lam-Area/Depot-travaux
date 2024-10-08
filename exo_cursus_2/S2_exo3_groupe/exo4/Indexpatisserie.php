<?php

require_once("SousClassEclair.php");
require_once("SousClassReligieuse.php");

$eclairdouteux = new Eclairs;
$eclairdouteux -> getpoid(200);
$eclairdouteux -> getnote(4);
$eclairdouteux -> getprix(2);
$eclairdouteux -> presentation();

$eclairdouteux -> getsaveurCreme("vanille");
$eclairdouteux -> getsaveurGlacage("chocolat");
$eclairdouteux -> getLongueur(4);
$eclairdouteux -> changerGlacage();
$eclairdouteux -> afficherEclair();

$religieusedouteuse = new Religieuse;

$religieusedouteuse -> getpoid(200);
$religieusedouteuse -> getnote(3.5);
$religieusedouteuse -> getprix(3);
$religieusedouteuse -> presentation();

$religieusedouteuse -> getsaveurCreme("malabar");
$religieusedouteuse -> getsaveurGlacage("menthe");
$religieusedouteuse -> changerPremiereBoule("malabar");
$religieusedouteuse -> setChantilly("oui");
$religieusedouteuse -> afficherReligieuse();


?>