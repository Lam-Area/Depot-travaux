<?php

$prenom = '';
$nom = '';
$age = '';

if (empty($_POST["prenom"]) or empty($_POST["nom"]) or empty($_POST["age"])) {
    echo "miss something";
}
else {
    echo "<p><a href='formulaire.html'>&laquo; Retour au Formulaire</a></p>";
    echo "<pre>". print_r($_POST). "</pre>";
}
?>