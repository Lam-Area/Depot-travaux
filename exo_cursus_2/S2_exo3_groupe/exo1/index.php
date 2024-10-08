<?php
require("classe.php");

$veste = new Vetement();
$veste -> type = "veste";
$veste -> couleur = "noir";
$veste -> taille = "L";
$veste -> prix = "70";
$veste -> etat = "neuf";
$veste -> presenterVetement();
?>