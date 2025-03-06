<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php require "menu.php";?>


    <div class="content">
    <?php
        $users = [
            "marek" => "haslo123",
            "jasiu" => "nieumiemprogramowac",
            "admin" => "admin123",
        ];

        $admin_privelege = ["admin"];

        if($_SERVER["REQUEST_METHOD"] === "POST") {
            if ($_POST["submit-status"] == "Zaloguj") {
                if(key_exists($_POST["login"], $users) && $_POST["password"] === $users[$_POST["login"]]) {
                    $_SESSION["login"] = $_POST["login"];
                    $_SESSION["is_admin"] = in_array($_POST["login"], $admin_privelege);
                    echo "Udane logowanie";
                } else {
                    echo "Nie udano się zalogować! Nie prawidłowe dane!";
                }
            } else {
                echo "Wylogowano!";
                session_unset();
                session_destroy();
            }
        }
        ?> 
        </div>
        <?php

        if (isset($_SESSION["login"])) {
            ?>
            <form method="POST"> 
                <input type="submit" value="Wyloguj" name="submit-status"></input>
            </form>
            <?php
        } else {
            ?>
            <form method="POST"> 
                <label for="login">Login:</label>
                <input required type="text" id="login" name="login"></input><br>

                <label for="password">Hasło:</label>
                <input required type="password" id="password" name="password"></input><br>

                <input type="submit" value="Zaloguj" name="submit-status"></input>
            </form>
            <?php
        }
    ?>
    <?php require "footer.php";?>
</body>
</html>