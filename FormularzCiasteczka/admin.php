<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        setcookie($_POST["cookie_name"], $_POST["cookie_content"], time() + $_POST["cookie_expire"]);
    }
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

    <?php
        $previous_content = array_key_exists("good_password_definition", $_COOKIE)? $_COOKIE["good_password_definition"]: "";
    ?>

    <div class="content">
        <?php
            if(isset($_SESSION["is_admin"]) && $_SESSION["is_admin"]) {
                ?>
                    <form method="post">
                        <label for="cookie_name">Nazwa ciasteczka:</label>
                        <input readonly id="cookie_name" type="text" name="cookie_name" value="good_password_definition">

                        <label for="cookie_expire">Wygasa: (w sekundach)</label>
                        <input id="cookie_expire" type="number" name="cookie_expire" value="3600">

                        <label for="cookie_content">Zawartość:</label>
                        <textarea id="cookie_content" name="cookie_content"><?=$previous_content?></textarea>

                        <input type="submit">
                    </form>
                <?php
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