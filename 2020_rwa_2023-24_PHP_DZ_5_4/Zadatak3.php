<?php

class Person {
    public $ime;
    public $prezime;
    public $masa_kg;

    public function __construct($ime, $prezime, $masa_kg) {
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->masa_kg = $masa_kg;
    }

    public function izracunajTezinu() {
        return $this->masa_kg;
    }

    public function izracunajTezinuNaMjesecu() {
        $tezina_na_mjesecu = $this->masa_kg * 1.622 / 9.81;
        return $tezina_na_mjesecu;
    }
}

$osoba1 = new Person("Lucija", "Ilić", 63);
$osoba2 = new Person("Marko", "Markić", 80);

echo "Težina osobe {$osoba1->ime} {$osoba1->prezime} na Zemlji je {$osoba1->izracunajTezinu()} kg.<br>";
echo "Težina osobe {$osoba2->ime} {$osoba2->prezime} na Zemlji je {$osoba2->izracunajTezinu()} kg.<br>";

echo "<br>";

echo "Težina osobe {$osoba1->ime} {$osoba1->prezime} na Mjesecu je {$osoba1->izracunajTezinuNaMjesecu()} kg.<br>";
echo "Težina osobe {$osoba2->ime} {$osoba2->prezime} na Mjesecu je {$osoba2->izracunajTezinuNaMjesecu()} kg.<br>";

?>
