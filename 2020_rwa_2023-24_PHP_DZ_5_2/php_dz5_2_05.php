<?php 
    //ZADATAK_5
    //Kod mijenja sve vrijednosti ulaznog polja u mala ili velika slova
    echo "Zadatak 5 - rješenje" . "\n" . "<br>";
    $boje = array("Blue", "Green", "Red");
     function promijeni($ulazno, $oblik) {
        $rezultat = [];
    
        foreach ($ulazno as $ulazno) {
            if ($oblik == 'Upper') {
                $rezultat[] = strtoupper($ulazno);
            } elseif ($oblik == 'Lower') {
                $rezultat[] = strtolower($ulazno);
            }
        }
    
        return $rezultat;
    }

    $velikaSlova = promijeni($boje, 'Upper');

    echo "Velika slova: ";
    foreach ($velikaSlova as $velika) {
        echo $velika . ", ";
    }
   
    
    $malaSlova = promijeni($boje, 'Lower');
    echo  "Mala slova: ";
    foreach ($malaSlova as $mala) {
        echo $mala . ", ";
    }

?>