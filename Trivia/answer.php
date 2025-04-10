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
    <pre>
    <?php
        if($_SESSION["question"]["correct_answer"] === $_POST["answer"]) {
            echo "Prawidlowa odpowiedz!";
        } else {
            echo "Nie prawidlowa odpowiedz!";
        }
        echo "\n";
        print_r($_SESSION);
    ?>
    </pre>

    <a href="question.php">Nastepne pytanie</a>
</body>
</html>