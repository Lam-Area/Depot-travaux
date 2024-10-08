
<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require("Voiture.php");

    $voitureStephane = new Voiture();
    $voitureStephane->nom = "GaelickMobile";
    $voitureStephane->couleur = "vert";
    $voitureStephane->demarrer();
    $voitureStephane->rouler();
    $voitureStephane->presenterVoiture();

    $voitureWalid = new Voiture();
    $voitureWalid->nom = "WalouMobile";
    $voitureWalid->couleur = "pourpre";
    $voitureWalid->demarrer();
    $voitureWalid->rouler();
    $voitureWalid->presenterVoiture();

    echo "<br/> Fin du programme !";

?>