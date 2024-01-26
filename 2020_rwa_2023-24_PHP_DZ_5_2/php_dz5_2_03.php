<?php 
    //ZADATAK_3
    //Funkcija ispisuje aritmetičku i geometrijsku sredinu između brojeva
    echo "Zadatak 3 - rješenje" . "\n" . "<br>";
    function aritmetickaSredina($niz) {
        $brojevi = explode(",", $niz);
        $broj_elemenata = count($brojevi);
        $suma = array_sum($brojevi);
        $aritmeticka_sredina = $suma / $broj_elemenata;
        echo "Aritmetička sredina: $aritmeticka_sredina <br>";
    }

    function geometrijskaSredina($niz) {
        $brojevi = explode(",", $niz);
        $broj_elemenata = count($brojevi);
        $umnozak = array_product($brojevi);
        $geometrijska_sredina = pow($umnozak, 1 / $broj_elemenata);
        echo "Geometrijska sredina: $geometrijska_sredina <br>";
    }

    $skup1 = "1,3,6,7,8,4,4,16,18,14,19";
    aritmetickaSredina($skup1);
    geometrijskaSredina($skup1);
?>