<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <h2>Kalkulator</h2>
    <form method="GET" action="kalkulator.php">
        Broj A: <input type="text" name="brojA" required>
        Broj B: <input type="text" name="brojB" required>
        Operacija: 
        <select name="operacija" required>
            <option value="+" selected>+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="submit" value="Rezultat">
    </form>

    <?php
    if(isset($_GET['brojA']) && isset($_GET['brojB']) && isset($_GET['operacija'])) {
        $brojA = $_GET['brojA'];
        $brojB = $_GET['brojB'];
        $operacija = $_GET['operacija'];

        if(validateNumbers($brojA, $brojB) && validateOperation($operacija)) {
            $rezultat = Operacija($brojA, $brojB, $operacija);
            echo "<h3>Rezultat je $rezultat</h3>";
        } else {
            echo "<h3>Neispravan unos</h3>";
        }
    }

    function validateNumbers($brojA, $brojB) {
        return is_numeric($brojA) && is_numeric($brojB);
    }

    function validateOperation($operacija) {
        return in_array($operacija, ['+', '-', '*', '/']);
    }

    function Operacija($brojA, $brojB, $operacija) {
        switch($operacija) {
            case '+':
                return $brojA + $brojB;
            case '-':
                return $brojA - $brojB;
            case '*':
                return $brojA * $brojB;
            case '/':
                if($brojB == 0) {
                    return "Nije moguće dijeliti s nulom";
                }
                return $brojA / $brojB;
            default:
                return false;
        }
    }
    ?>
</body>
</html>
