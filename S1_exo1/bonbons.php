<?php

if (isset($_GET['soft']) && isset($_GET['hard']))
{
    $soft_candys = $_GET['soft'];
    $hard_candys = $_GET['hard'];

    if (is_array($soft_candys) && is_array($hard_candys))
    {
        $hard_candy = max($hard_candys);
        $soft_candy = max($soft_candys);

        echo "Il y a ". count($soft_candys). " bonbons neutres et ". count($hard_candys). " bonbons piquants". "<br><br>";
        echo "Le bonbon piquant le plus fort est : ". $hard_candy. " et le bonbon le plus neutre est : ". $soft_candy. "<br>";
    
        $totalhard = count($hard_candys);
        $totalsoft = count($soft_candys);
        if ($totalhard < $totalsoft) {
            echo "il y a plus de bonbons soft";
        }
        else if ($totalhard > $totalsoft) {
            echo "il y a plus de bonbons hard";
        }
        else {
            echo "meme valeur";
        }

    }
    else {
        echo "ne pas oublier de tiper les crochets apres l'appelation de soft et hard dans l'url";
    }
}
else {
    echo "entrer les valeurs 'soft' et 'hard' dans l'url";
}

// le seul bemole est que les tableaux fonctionnent par ordre alphabetique
?>