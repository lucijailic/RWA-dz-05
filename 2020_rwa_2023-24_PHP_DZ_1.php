<?php
    //ZADATAK_1
    //Korištenjem for petlje ispisuju se brojevi od 1 do 20 te njihovi kvadrati
    echo "Zadatak 1 - rješenje" . "\n" . "<br>";
    for($i=1;$i<=20;$i++){
        $kvadrat = $i * $i;
        echo "Broj " . $i . " i njegov kvadrat je " . $kvadrat . "\n" . "<br>";
    }

    echo "<br>" . "\n";
    
    //ZADATAK_2
    //Korištenjem for petlje računa se suma prvih 100 prirodnih brojeva
    echo "Zadatak 2 - rješenje" . "\n" . "<br>";
    $suma = 0;
    for($i=1;$i<=100;$i++){
        $suma +=$i;
        
    }
    echo "Suma iznosi: " . $suma . "<br>" . "\n";


    echo "<br>" . "\n";
    
    //ZADATAK_3
    //Korištenjem while petlje računa se suma prvih 100 prirodnih brojeva
    echo "Zadatak 3 - rješenje" . "\n" . "<br>";
    while($i<=100){
        $suma +=$i;
    }
    echo "Suma iznosi: " . $suma . "<br>" . "\n";

    echo "<br>" . "\n";

    //ZADATAK_4
    //Ispisuje sve parne brojeve od 1 do 100
    echo "Zadatak 4 - rješenje" . "\n" . "<br>";
    for($i=1;$i<=100;$i++){
        if($i%2==0){
            echo $i . "<br>" . "\n";
        }
    }

    echo "<br>" . "\n";

    //ZADATAK_5
    //Ispisuje sve troznamenkaste parne brojeve
    echo "Zadatak 5 - rješenje" . "\n" . "<br>";
    for( $i= 100;$i< 1000;$i++){
        if($i%2==0){
            echo $i . "<br>" . "\n";
        }
    }

    echo "<br>" . "\n";
    //ZADATAK_6
    //Ispisuje sve dvoznamenkaste brojeve djeljive s 3 i 5 ili s oba
    echo "Zadatak 6 - rješenje" . "\n" . "<br>";
    echo "Brojevi djeljivi s 3:";
    for( $i= 0;$i< 100;$i++){
        if($i%3==0){
            echo $i . ",";
        }
    }
    echo "<br>" . "\n" . "Brojevi djeljivi 5:";
    for( $i= 0;$i< 100;$i++){
        if($i%5==0){
            echo $i . "," ;
        }
    }
    echo "<br>" . "\n" . "Brojevi djeljivi s 3 i 5:";
    for( $i= 0;$i< 100;$i++){
        if($i%3==0 && $i%5==0){
            echo $i . "," ;
        }
    }

    echo "<br>" . "\n";
    echo "<br>" . "\n";


    //ZADATAK_7
    //Izračunava se broj stanovnika kroz sve godine,koje godine je bilo najviše stanovnika i koliko je godina se provodilo mjerenje
    echo "Zadatak 7 - rješenje" . "\n" . "<br>";
    $grad = array(
        1995 => 24000,
        1997 => 25510,
        1998 => 29154,
        2000 => 32124,
        2002 => 33114
    );
    $ukupanBrojStanovnika = 0;
    $brojGodina = count($grad);

    foreach ($grad as $stanovnici) {
        $ukupanBrojStanovnika += $stanovnici;
    }

    $prosjecanBrojStanovnika = $ukupanBrojStanovnika / $brojGodina;
    echo "a) Prosječan broj stanovnika kroz sve godine: " . $prosjecanBrojStanovnika . "<br>";

    $maxStanovnika = max($grad);
    $godinaNajviseStanovnika = array_search($maxStanovnika, $grad);
    echo "b) Godina s najviše stanovnika: " . $godinaNajviseStanovnika . " (" . $maxStanovnika . " stanovnika)" . "<br>";

    $brojGodinaMjerenja = count($grad);
    echo "c) Broj godina mjerenja: " . $brojGodinaMjerenja . "<br>";

    echo "<br>" . "\n";


    //ZADATAK_8
    //Funkcija ispituje je li broj prost i zatim se ispisuju svi prosti brojevi manji od 100
    echo "Zadatak 8 - rješenje" . "\n" . "<br>";
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

    echo "<br>" . "\n";
    echo "<br>" . "\n";

    //ZADATAK_9
    //Zbraja sve članove polja pomoću foreach petlje
    echo "Zadatak 9 - rješenje" . "\n" . "<br>";
    $brojevi = array(1, 22, 3, 4, 5, 55, 12, 49, 94, 23, 7);
    $zbroj = 0;
    foreach ($brojevi as $i) {
        $zbroj += $i;
    }
    echo "Zbroj svih brojeva u polju je: $zbroj";

    echo "<br>" . "\n";
    echo "<br>" . "\n";

    //ZADATAK_10
    //Izračunava površinu pravokutnika i ispisuje u browseru:"Površina pravokutnika širine ____ i dužine ___ iznosi ____" (popunite s vrijednostima iz varijabli) 
    echo "Zadatak 10 - rješenje" . "\n" . "<br>";
    $a = 3;
    $b = 5;
    $pov_pravokutnik = $a * $b;
    echo "Površina pravokutnika širine $a i dužine $b iznosi $pov_pravokutnik.";

?>