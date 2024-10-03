<?php

class Pays {
    private $nom = "";
    private $continent = "";
    private $population = 0;
    private $lat = 0;
    private $long = 0; 

    public function initialiserPays($nom, $continent, $population, $lat, $long) {
        $this -> nom = $nom;
        $this -> continent = $continent;
        $this -> population = $population;
        $this -> lat = $lat;
        $this -> long = $long;
    }

    public function getnom() {
        return $this -> nom;
    }
    public function getcontinent() {
        return $this -> continent;
    }
    public function getpopulation() {
        return $this -> population;
    }
    public function getlat() {
        return $this -> lat;
    }
    public function getlong() {
        return $this -> long;
    }

    public function presenterPays() {
        echo "Pays : ". $this -> getnom(). "<br/>";
        echo "Continent du pays : ". $this -> getcontinent(). "<br/>";
        echo "Population présente : ". $this -> getpopulation(). "<br/>";
        echo "Latitude : ". $this -> getlat(). "<br/>";
        echo "Longitude : ". $this -> getlong(). "<br/><br/>";
    }

    public function croissancePopulation($rajout) {
        if (($this -> population + $rajout) > 1000000) {
            $this -> population = 1000000;
        } else {
            $this -> population += $rajout;
        }
        echo "Il y a maintenant ". $this -> population. " personnes dans la population". "<br/>";
    }

    public function decroissancePopulation($diminution) {
        if (($this -> population - $diminution) < 0) {
            $this -> population = 0;
        } else {
            $this -> population -= $diminution;
        }
        echo "Il reste ". $this -> population. " personnes dans la population". "<br/>";
    }

    public function migration($nouveauPays, $nombre) {
        if ($this -> population >= $nombre) {
            $this -> croissancePopulation($nombre);
            echo "il y a ". $nombre. " personnes qui ont migré de ". $this -> getnom(). " à ". $nouveauPays. "<br/>";
        }
        else {
            echo "il n'y a pas assez de personnes dans ". $this -> getnom(). " pour pouvoir migré". "<br/>";
        }
    }
}

?>