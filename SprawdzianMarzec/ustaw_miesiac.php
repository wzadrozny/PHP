<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="miesiac">Podaj miesiąc twoich urodzin:</label>
        <br>
        <input type="number" min="1" max="12" name="miesiac" id="miesiac" value="1">
        <br> 
        <input type="submit" value="Zapisz w sesji">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $_SESSION["miesiac"] = $_POST["miesiac"];
            echo "Ustawiono miesiąc na: ".$_POST["miesiac"];
        }
    ?>

    <br>

    <a href="wyswietl_miesiac.php">Wyświetl miesiąc</a>
</body>
</html>