<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Główna</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php require "menu.php";?>
    <div class="content">
        <h2> 
            <?php
                if(isset($_SESSION["login"])) {
                    echo "Witaj ".$_SESSION["login"]."!";
                } else {
                    echo "Witaj gościu!";
                }
            ?>
        </h2>
    </div>
    <?php require "footer.php";?>
</body>
</html>
