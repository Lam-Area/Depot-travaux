<?php

if (isset($_GET['pname']) && is_array($_GET['pname'])) { 
    $pilotes = $_GET['pname']; 
}
else {
    echo "aucune valeur indiquer";
    exit;
}

$tours = 3;

for ($i = 1; $i <= $tours; $i++) {
    echo "Tour". $i. ": ";
    foreach ($pilotes as $pilote) {
        echo "-". $pilote. " commence le circuit. ";
    }
    $nombrePilotes = count($pilotes);
    $gagnantIndex = rand(0, $nombrePilotes - 1);//(min, max(3) -1)
    $gagnant = $pilotes[$gagnantIndex];
    echo "<br>". "Le gagnant du tour ". $i. " est : ". $gagnant. "!". "<br><br>";
}

//ne pas oublier de bien definir l'array[] dans l'url (pilotes.php?pname[]=aa&pname[]=bb&pname[]=cc)
?>
