<?php 
class Vetement 
{
    public $type = "inputtype";
    public $couleur = "inputcouleur";
    public $taille = "inputtaille";
    public $prix = 0;
    public $etat = "inputetat";

    public function presenterVetement() 
    {
        echo "<br/> Presentation du vetement " . $this->type;
        echo "<br/> Sa couleur est : " . $this->couleur;
        echo "<br/> Sa taille est  " . $this->taille;
        echo "<br/> Son prix est de : " . $this->prix;
        echo "<br/> Son etat est : " . $this->etat;
    }
}
?>