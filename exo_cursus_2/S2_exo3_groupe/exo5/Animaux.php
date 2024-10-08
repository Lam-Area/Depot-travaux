<?php

class Animaux {
    protected $nom = "";
    protected $taille = 0;
    protected $poids = 0;
    protected $alimentation = "";
    protected $verifAlimentation = ["carnivore", "herbivore", "omnivore"];

    public function setNom($nom) {
        $this -> nom = $nom;
    }

    public function setTaille($taille) {
        $this -> taille = $taille;
    }

    public function setPoids($poids) {
        $this -> poids = $poids;
    }

    public function setAlimentation($alimentation) {
        if (in_array($alimentation, $this -> verifAlimentation)) $this -> alimentation = $alimentation;
    }

    public function presentation() {
        echo "Nom : ". $this -> nom. "<br/>";
        echo "Taille : ". $this -> taille. "<br/>";
        echo "Poids : ". $this -> poids. "<br/>";
        echo "Alimentation : ". $this -> alimentation. "<br/>";
    }
}

?>