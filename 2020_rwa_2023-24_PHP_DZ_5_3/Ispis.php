<!DOCTYPE html>
<html>
<head>
    <title>Odaberite opciju</title>
</head>
<body>

<h2>Odaberite opciju:</h2>
<form method="GET" action="ispis.php">
    <button type="submit" name="option" value="A">A</button>
    <button type="submit" name="option" value="B">B</button>
    <button type="submit" name="option" value="C">C</button>
</form>

<?php
if(isset($_GET['option'])) {
    $selectedOption = $_GET['option'];
    echo "<p>Odabrali ste dugme  $selectedOption</p>";
} else {
    echo "<p>Niste odabarli nijedno dugme.</p>";
}
?>

</body>
</html>