<?php

$porteM = 34; //euros
function eurosDollars($transact) {
    $dollars = 1.12;
    $transact += $dollars;
}
echo "1er fonction : il y a ". $porteM. "euros, la transaction en dollars donne ". eurosDollars($porteM). " dollars". "<br/><br/>";

$achatP = 40;
$promo = 25;
function calculerPrix($prixB,$Reduc) { 
    $prixfinal = ($prixB * $Reduc) / 100;
    $prixB -= $prixfinal;
    return $prixB;
}
echo "2eme fonction : promo : ". $promo. ", achatprix : ". $achatP. ", resultat : ". calculerPrix($achatP, $promo). "<br/><br/>";

$panier = [12, 45, 13];
function sommePanier($listePrix) {
    $total = 0;
    foreach ($listePrix as $prix) {
        $total += $prix;
    }
    return $total;
}
echo "3eme fonction : le prix total sera de ". sommePanier($panier); 
?>