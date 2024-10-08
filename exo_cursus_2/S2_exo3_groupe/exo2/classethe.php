<?php
class TasseDeThe {
    public $quantiteAct = 0;
    public $quantiteActSave = 0;
    public $quantiteMaximum = 0;
    public $estChaud = 1;

    public function affichertasse() {
        echo "<br/> Quantité actuelle : ". $this -> quantiteAct;
        echo "<br/> Quantité maximum : ". $this -> quantiteMaximum;
        echo "<br/> est chaud ? : ". $this -> estChaud. "<br>";
    }

    public function boire() {
        $this -> quantiteAct = 0;
        $this -> estChaud = 0;
        echo "la boisson est chaude ? : ". $this -> estChaud. "<br>". "sa quantité est à ". $this -> quantiteAct. "<br>";
    }

    
    public function remplir() {
        $this -> quantiteActSave;
        echo "remplie à ". $this -> quantiteActSave. " cl";
    }
}
?>