<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php require "menu.php";?>

    <div class="content">
        <?php
            if(isset($_SESSION["is_admin"]) && $_SESSION["is_admin"]) {
                echo "Jesteś adminem!";
            } else {
                if (isset($_SESSION["login"])) {
                    echo "Nie jesteś adminem!";
                } else {
                    echo "Nie jesteś zalogowany!";
                }
            }
        ?>
    </div>

    <?php require "footer.php";?>
</body>
</html>