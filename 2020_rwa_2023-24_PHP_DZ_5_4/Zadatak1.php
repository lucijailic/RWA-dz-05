<?php

class Grad {
    public $naziv;
    protected $brojStanovnika;


    public function __construct($naziv, $brojStanovnika) {
        $this->naziv = $naziv;
        $this->brojStanovnika = $brojStanovnika;
    }

    public function getNaziv() {
        return $this->naziv;
    }

    public function setBrojStanovnika($brojStanovnika) {
        $this->brojStanovnika = $brojStanovnika;
    }

    public function getBrojStanovnika() {
        return $this->brojStanovnika;
    }

    public function getFullNaziv() {
        return $this->naziv . ' ' . $this->brojStanovnika;
    }

    public function ispunjavaKriterij($kriterij) {
        if ($this->brojStanovnika >= $kriterij) {
            return true;
        } else {
            return false;
        }
    }

}

$grad = new Grad('Zagreb', '800000');

echo "Naziv: " . $grad->getNaziv() . "<br>";
echo "Broj stanovnika: " . $grad->getBrojStanovnika() . "<br>";
echo "Puni naziv: " . $grad->getFullNaziv() . "<br>";

$grad->setBrojStanovnika('750000');

echo "Broj stanovnika nakon promjene: " . $grad->getBrojStanovnika() . "<br>";

$kriterij = 1000000;
if ($grad->ispunjavaKriterij($kriterij)) {
    echo $grad->getFullNaziv() . " ispunjava kriterij od " . $kriterij . " stanovnika.<br>";
} else {
    echo $grad->getFullNaziv() . " ne ispunjava kriterij od " . $kriterij . " stanovnika.<br>";
}

?>
