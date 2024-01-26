<?php 
    //ZADATAK_2
    //Funkcija ispisuje aritmetičku sredinu između dva broja
    echo "Zadatak 2 - rješenje" . "\n" . "<br>";
    function aritmetickaSredina($a, $b) {
        $s = ($a + $b) / 2;
        echo "Aritmetička sredina između $a i $b je: $s <br>";
    }
    
    aritmetickaSredina(40, 80);
    aritmetickaSredina(20, 30);
    aritmetickaSredina(5, 10);
?>