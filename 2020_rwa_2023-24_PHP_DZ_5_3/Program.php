<?php
if(isset($_GET['salji'])) {
    // Provjera jesu li uneseni broj i operacija
    if(empty($_GET['broj']) || empty($_GET['operacija'])) {
        echo "Molim unesite broj i operaciju.";
        exit; // Prekini izvršavanje skripte
    }

    // Dobivanje unesenih vrijednosti
    $broj = $_GET['broj'];
    $operacija = $_GET['operacija'];

    // Provjera koje je operacija odabrana i izračun
    if($operacija === "KVADRAT") {
        $rezultat = $broj * $broj;
        echo "Poslali ste broj: $broj<br>";
        echo "Operacija je: $operacija<br>";
        echo "Rezultat je: $rezultat";
    } elseif($operacija === "KUB") {
        $rezultat = $broj * $broj * $broj;
        echo "Poslali ste broj: $broj<br>";
        echo "Operacija je: $operacija<br>";
        echo "Rezultat je: $rezultat";
    } else {
        echo "Nepodržana operacija.";
    }
}
?>
