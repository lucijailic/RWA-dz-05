<?php 
    //ZADATAK_1
    //Funkcija ispituje je li broj prost i zatim se ispisuju svi prosti brojevi manji od 100
    echo "Zadatak 1 - rješenje" . "\n" . "<br>";
    function Prost($broj) {
        if ($broj <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($broj); $i++) {
            if ($broj % $i == 0) {
                return false;
            }
        }
        return true;
    }
    echo "Prosti brojevi manji od 100 su: ";
    for ($i = 2; $i < 100; $i++) {
        if (Prost($i)) {
            echo $i . " ";
        }
    }
?>