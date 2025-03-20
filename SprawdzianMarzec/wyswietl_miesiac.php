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
    <?php
        if(isset($_SESSION["miesiac"])) {
            echo "Miesiąc twoich urodzin to: ".$_SESSION["miesiac"];
        }
    ?>
    <br>
    <a href="ustaw_miesiac.php">Ustaw miesiąc</a>
</body>
</html>