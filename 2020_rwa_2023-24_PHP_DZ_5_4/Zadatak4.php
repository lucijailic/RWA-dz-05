<?php

class Kalkulator {
    public function zbroji($broj1, $broj2) {
        return $broj1 + $broj2;
    }

    public function oduzmi($broj1, $broj2) {
        return $broj1 - $broj2;
    }

    public function mnozenje($broj1, $broj2) {
        return $broj1 * $broj2;
    }

    public function dijeljenje($broj1, $broj2) {
        if ($broj2 == 0) {
            return "Nije moguće dijeliti s nulom!";
        } else {
            return $broj1 / $broj2;
        }
    }
}

$kalkulator = new Kalkulator();

echo "Zbrajanje: 10 + 23 = " . $kalkulator->zbroji(10, 23) . "<br>";
echo "Oduzimanje: 15 - 7 = " . $kalkulator->oduzmi(15, 7) . "<br>";
echo "Množenje: 8 * 8 = " . $kalkulator->mnozenje(8, 8) . "<br>";
echo "Dijeljenje: 15 / 5 = " . $kalkulator->dijeljenje(15, 5) . "<br>";
echo "Dijeljenje s nulom: 20 / 0 = " . $kalkulator->dijeljenje(20, 0) . "<br>";

?>
