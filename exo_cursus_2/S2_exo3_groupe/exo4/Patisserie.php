<?php

class Patisserie
{
    protected $poid = 0;
    protected $note = 0;
    protected $prix = 0;


    public function getpoid($poid) {
        if ($poid > 0) {
            $this->poid = $poid;
        }
    }
    
    public function getnote($note) {
        if ($note >= 0 && $note <= 5) {
            $this->note = $note;
        }
    }
    
    public function getprix($prix) {
        if ($prix > 0) {
            $this->prix = $prix;
        }
    }

    public function presentation() {
        echo "poid : ". $this -> poid. " kg". "<br/>";
        echo "note : ". $this -> note. " etoiles". "<br/>";
        echo "prix : ". $this -> prix. " euros". "<br/><br/>";
    }
}

?>