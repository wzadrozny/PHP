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
        Jak stworzyć dobrze hasło?<br>
       <?php
            if(key_exists("good_password_definition", $_COOKIE)) {
                echo $_COOKIE["good_password_definition"];
            } else {
                echo "No właśnie, jak?";
            }
       ?>
    </div>
    <?php require "footer.php";?>
</body>
</html>