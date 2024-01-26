<?php 
    //ZADATAK_4
    //Kod računa faktorijel za svaki broj do broja koji se unese kao argument funkcije
    echo "Zadatak 4 - rješenje" . "\n" . "<br>";
    echo "Table of Factorials" . "\n" . "<br>";
    function faktorijel($broj){
        $rezultat = 1;
        for ($i = 1; $i <= $broj; $i++) {
            $rezultat *= $i;
        }
        echo "$broj != $rezultat <br>";
    }
        

    $zadani_broj = 9; 

    for ($broj = 1; $broj <= $zadani_broj; $broj++) {
        faktorijel($broj);
    }
    
?>