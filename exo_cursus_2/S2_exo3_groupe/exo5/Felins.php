<?php

require_once("Animaux.php");

class Felins extends Animaux {
    protected $poids = 0;

    public function setpoids($poids) {
        $this -> poids = $poids;
    }

    public function chasser() {
        $chasser = 5;
        $this -> poids += $chasser;
        echo "poids à jour après chasse : ". $this -> poids. " kg". "<br/><br/>";
    }
}

?>