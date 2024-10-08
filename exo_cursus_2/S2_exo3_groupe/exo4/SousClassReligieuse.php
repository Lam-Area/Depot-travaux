<?php

require_once ("Patisserie.php");

class Religieuse extends Patisserie 
{

    protected $saveurPremierBoule = ["pistache", "malabar", "fraise"];
    protected $saveurDeuxiemeBoule = ["reglisse", "menthe", "framboise"];
    protected $supplementChantilly = "";


    public function getsaveurCreme($saveurPremierBoule) {
        $this -> saveurPremierBoule = $saveurPremierBoule;
    }
    public function getsaveurGlacage($saveurDeuxiemeBoule) {
        $this -> saveurDeuxiemeBoule = $saveurDeuxiemeBoule;
    }


    public function afficherReligieuse() {
        echo "saveur premiere boule : ". $this -> saveurPremierBoule. "<br/>";
        echo "saveur glacage : ". $this -> saveurDeuxiemeBoule. "<br/>";
    }

    public function setChantilly($supplementChantilly)
    {
        if ($supplementChantilly == "oui") {
            $this->supplementChantilly = $supplementChantilly;
            echo "Chantilly ajouté". "<br/>";
        }
        else if ($supplementChantilly == "non") {
            $this->supplementChantilly = $supplementChantilly;
            echo "Chantilly non ajouté". "<br/>";
        }
        else {
            echo "Information manquante (oui or non)". "<br/>";
        }
    }

    public function changerPremiereBoule() {
        if ($this -> saveurPremierBoule == "pistache") {
            $this -> saveurPremierBoule = "malabar";
        } elseif ($this -> saveurPremierBoule == "malabar") {
            $this -> saveurPremierBoule = "fraise";
        } elseif ($this -> saveurPremierBoule == "fraise") {
            $this -> saveurPremierBoule = "pistache";
        }
    }

    public function changerDeuxiemeBoule() {
        if ($this -> saveurDeuxiemeBoule == "reglisse") {
            $this -> saveurDeuxiemeBoule = "menthe";
        } elseif ($this -> saveurDeuxiemeBoule == "menthe") {
            $this -> saveurDeuxiemeBoule = "framboise";
        } elseif ($this -> saveurDeuxiemeBoule == "framboise") {
            $this -> saveurDeuxiemeBoule = "reglisse";
        }
    }
}

?>