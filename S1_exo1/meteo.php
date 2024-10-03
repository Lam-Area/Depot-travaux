<?php

if (isset($_GET['meteo']))
{
    $meteo = $_GET['meteo'];

    if ($meteo <= 0) {
        echo "temperature minus";
    }
    else if ($meteo < 13) {
        echo "temperature frisqueuse";
    }
    else if ($meteo < 26) {
        echo "temperature semi-frisqueuse";
    }
    else if ($meteo < 39) {
        echo "temperature agreable";
    }
    else {
        echo "humainement dangeureux";
    }
}
else {
    echo "Inserer une valeur dans l'url";
}
?>