<?php

require_once("Oiseaux.php");
require_once("Felins.php");

$autruche = new Oiseaux();
$autruche -> setnom("autruche");
$autruche -> settaille(2.10);
$autruche -> setpoids(120.0);
$autruche -> setalimentation("herbivore");
$autruche -> presentation();

$autruche -> setVoler(false);
$autruche -> setEstEnVol(false);
$autruche -> envoler();
$autruche -> atterir();


$colibri = new Oiseaux();
$colibri -> setnom("Colibri");
$colibri -> settaille(0.06);
$colibri -> setpoids(0.2);
$colibri -> setalimentation("herbivore");
$colibri -> presentation();

$colibri -> setVoler(true);
$colibri -> setEstEnVol(true);
$colibri -> envoler();
$colibri -> atterir();



$tigre = new Felins();
$tigre -> setnom("Tigre");
$tigre -> settaille(2.6);
$tigre -> setpoids(300.0);
$tigre -> setalimentation("carnivore");
$tigre -> presentation();
$tigre -> chasser();


$lion = new Felins();
$tigre -> setnom("Lion");
$tigre -> settaille(2.6);
$tigre -> setpoids(200.0);
$tigre -> setalimentation("carnivore");
$tigre -> presentation();
$tigre -> chasser(); 




?>