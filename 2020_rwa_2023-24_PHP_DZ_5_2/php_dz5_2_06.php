<?php 
    //ZADATAK_6
    //Funkcija računa prosječnu temperaturu te prikazuje 10 najviših i najnižih temperatura
    echo "Zadatak 6 - rješenje" . "\n" . "<br>";
    function prikazi_temperaturu($niz_temperatura) {
        $temperature = explode(", ", $niz_temperatura);

        $prosjek = array_sum($temperature) / count($temperature);
        echo "Prosječna temperatura: $prosjek <br>";
  
        sort($temperature);

        echo "Deset najnižih temperatura: ";
        for ($i = 0; $i < 10; $i++) {
            echo $temperature[$i] . ", ";
        }
        echo "<br>";

        echo "Deset najviših temperatura: ";
        for ($i = count($temperature) - 1; $i >= count($temperature) - 10; $i--) {
            echo $temperature[$i] . ", ";
        }
    }

    $temperatura = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
    
    prikazi_temperaturu($temperatura);

?>