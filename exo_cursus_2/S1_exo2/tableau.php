<?php

echo "Tableau aleatoire :". "<br/>";
//création d'un tableau empty
$tableau = [];

//boucle for qui permet de créer des nombres random et de les mettre dans le tableau empty
for ($i = 0; $i < 21; $i++) {
  //$tableau[] = random_int(1, 100);
  array_push($tableau, rand(1,100));
  echo "tab[" . $i . "] = " . $tableau[$i] . "</br>";
}

//création d'un deuxieme tableau qui sauvegardera les nombres aléatiores du premier tableau en ordre croissant
$tableau2 = [];

//création d'une boucle qui vérifie que si les valeurs sont supérieures 0 la boucle continue
while (count($tableau) > 0)
{
    $min = 100; // va servir à stocker les values de l'ancien tableau
    $cacheclear = 0; // supprimera la copie de l'ancien tableau

    //création d'un foreach pour pouvoir décaler les valeurs de l'ancien tableau dans une copie (min) et les remettre dans l'ordre croissant
    foreach ($tableau as $key => $value) {
        if ($value < $min) {
            $min = $value;
            $cacheclear = $key; //variable qui stockera les keys du 1er tableau pour pouvoir ensuite les unset
        }
        
    }
    $tableau2[] = $min; //array_push($tableau2, $min); //envoi de la copie vers le nouveau tableau dans l'ordre croissant
    unset($tableau[$cacheclear]); //permet de vider les keys du tableau
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<br>
    <p>Tableau ordonné :</p>
    <pre><?php print_r($tableau2); //balise avec un print_r qui permet de pouvoir afficher un tableau correctement venant de php ?></pre>
</body>
</html>