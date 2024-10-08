<?php

require_once("classethe.php");

$TheChaud = new TasseDeThe();
$TheChaud -> quantiteAct = 40;
$TheChaud -> quantiteActSave = 40;
$TheChaud -> quantiteMaximum = 50;
$TheChaud -> estChaud = true;
$TheChaud -> affichertasse();
$TheChaud -> boire();
$TheChaud -> remplir();

?>