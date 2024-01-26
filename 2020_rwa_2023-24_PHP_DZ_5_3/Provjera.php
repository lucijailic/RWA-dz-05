<!DOCTYPE html>
<html>
<head>
    <title>Provjera lozinke</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = isset($_POST["username"]) ? $_POST["username"] : '';
        $password = isset($_POST["password"]) ? $_POST["password"] : '';

        function CheckPwd($password) {
            if (strlen($password) < 6) {
                return 0;
            }
            if (!preg_match('/[a-zA-Z]/', $password) || !preg_match('/\d/', $password)) {
                return 0;
            }

            return 1;
        }

        $isValidPassword = CheckPwd($password);
        if ($isValidPassword) {
            echo "Lozinka je valjana.";
        } else {
            echo "Lozinka nije valjana. Provjerite uvjete: minimalna duljina 6 znakova, sadrži brojeve i slova.";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Korisničko ime: <input type="text" name="username"><br><br>
        Lozinka: <input type="password" name="password"><br><br>
        <input type="submit" value="Pošalji">
    </form>

</body>
</html>
