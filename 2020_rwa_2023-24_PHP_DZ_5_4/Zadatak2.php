<?php

class Test {
    public $ime;
    public $prezime;
    public $ostvareni_bodovi;
    public $max_bodovi;
    public $ocjena;

    public function __construct($ime, $prezime, $ostvareni_bodovi, $max_bodovi) {
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->ostvareni_bodovi = $ostvareni_bodovi;
        $this->max_bodovi = $max_bodovi;
        $this->izracunajOcjenu();
    }

    public function izracunajOcjenu() {
        if ($this->max_bodovi == 0) {
            $this->ocjena = "N/A";
        } else {
            $postotak = ($this->ostvareni_bodovi / $this->max_bodovi) * 100;
            if ($postotak >= 90) {
                $this->ocjena = "5";
            } elseif ($postotak >= 80) {
                $this->ocjena = "4";
            } elseif ($postotak >= 70) {
                $this->ocjena = "3";
            } elseif ($postotak >= 60) {
                $this->ocjena = "2";
            } else {
                $this->ocjena = "1";
            }
        }
    }
}

$test1 = new Test("Lucija", "Ilić", 85, 100);
$test2 = new Test("Marko", "Markić", 60, 80);

echo "Test 1: " . $test1->ime . " " . $test1->prezime . ", Ocjena: " . $test1->ocjena . "<br>";
echo "Test 2: " . $test2->ime . " " . $test2->prezime . ", Ocjena: " . $test2->ocjena . "<br>";

?>
