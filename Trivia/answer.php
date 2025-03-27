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
        if($_SESSION["question"]["correct_answer"] === $_POST["answer"]) {
            echo "Prawidlowa odpowiedz!";
        } else {
            echo "Nie prawidlowa odpowiedz!";
        }

        print_r($_SESSION);
    ?>
</body>
</html>