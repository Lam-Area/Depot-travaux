<?php

require_once("Animaux.php");

class Oiseaux extends Animaux {
    protected $peuxVoler = null;
    protected $estEnVol = null;

    public function setVoler($peuxVoler) {
        $this -> peuxVoler = $peuxVoler;
    }

    public function setEstEnVol($estEnVol) {
        $this -> estEnVol = $estEnVol;
    }


    public function envoler() {
        if ($this -> peuxVoler) {
            $this -> estEnVol = true;
            echo "L'oiseau s'est envolé.<br/>";
        } else {
            echo "Cet oiseau ne peut pas voler.<br/>";
        }
    }

    public function atterir() {
        if ($this -> peuxVoler && $this -> estEnVol) {
            $this -> estEnVol = false;
            echo "L'oiseau a atterri.<br/><br/>";
        } else{
            echo "L'oiseau n'est pas en vol ou ne souhaite pas atterir.<br/><br/>";
        }
    }

    public function presentationO() {
        $this->presentation();
        echo "Peut voler : ", $this -> peuxVoler?"oui":"non","<br/>";
        echo "Est en vol ? : ", $this -> estEnVol?"oui":"non","<br/>";
    }
}

?>