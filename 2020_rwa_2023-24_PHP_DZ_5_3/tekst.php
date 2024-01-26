<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ispis teksta</title>
</head>
<body>
<?php
  if (isset($_GET['tekst']) && isset($_GET['broj'])) {
    $tekst = $_GET['tekst'];
    $broj = intval($_GET['broj']);
    for ($i = 1; $i <= $broj; $i++) {
      echo " $i: $tekst<br>";
    }
  } else {
    echo "Niste unijeli potrebne podatke.";
  }
?>
</body>
</html>
