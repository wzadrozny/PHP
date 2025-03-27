<?php
    session_start();
    $API_URL = "https://opentdb.com/api.php?amount=1&category=18&type=multiple";
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
        $response = @file_get_contents($API_URL);
        $data = json_decode($response, true) ?? ["response_code" => 429];

        if($data["response_code"] === 0) {
            $question = $data["results"][0];
            $all_answers = $question["incorrect_answers"];
            $all_answers[] = $question["correct_answer"];
            shuffle($all_answers);
            $question["answers"] = $all_answers;
            $_SESSION["question"] = $question;

            ?>
                <form action="answer.php" method="POST">
                    <p>Trudność: <i><?=$question["difficulty"]?></i></p>
                    <p>Kategoria: <i><?=$question["category"]?></i></p>
                    <p>Pytanie: <strong><?=$question["question"]?></strong></p>

                    <?php
                        foreach($all_answers as $answer) {
                            ?>
                                <input type="radio" value="<?=$answer?>" name="answer" id="<?=$answer?>">
                                <label for="<?=$answer?>"><?=$answer?></label>
                                <br>
                            <?php
                        }
                    ?>

                    <input type="submit" value="Sprawdź odpowiedź">
                </form>
            <?php
        } else {
            echo "Prosze czekać...";
            sleep(2);
            header("Refresh:0");
        }

        
    ?>
</body>
</html>