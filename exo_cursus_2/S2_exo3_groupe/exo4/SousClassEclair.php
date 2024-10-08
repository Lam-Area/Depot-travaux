<?php

require_once ("Patisserie.php");

class Eclairs extends Patisserie {

    protected $saveurCreme = ["vanille", "chocolat", "fraise"];
    protected $saveurGlacage = ["vanille", "chocolat", "framboise"];
    protected $longueur = 0;


    public function getsaveurCreme($saveurCreme) {
        $this -> saveurCreme = $saveurCreme;
    }
    public function getsaveurGlacage($saveurGlacage) {
        $this -> saveurGlacage = $saveurGlacage;
    }
    public function getLongueur($longueur) {
        $this -> longueur = $longueur;
    }


    public function afficherEclair() {
        echo "saveur creme : ". $this -> saveurCreme. "<br/>";
        echo "saveur glacage : ". $this -> saveurGlacage. "<br/>";
        echo "longueur : ". $this -> longueur. " cm". "<br/>". "<br/>". "<br/>";
    }

    public function changerGlacage() {
        if ($this -> saveurGlacage == "vanille") {
            $this -> saveurGlacage = "chocolat";
        } elseif ($this -> saveurGlacage == "chocolat") {
            $this -> saveurGlacage = "framboise";
        } elseif ($this -> saveurGlacage == "framboise") {
            $this -> saveurGlacage = "vanille";
        }
    }

    public function changerCreme() {
        if ($this -> saveurCreme == "vanille") {
            $this -> saveurCreme = "chocolat";
        } elseif ($this -> saveurCreme == "chocolat") {
            $this -> saveurCreme = "fraise";
        } elseif ($this -> saveurCreme == "fraise") {
            $this -> saveurCreme = "vanille";
        }
    }
}

?>