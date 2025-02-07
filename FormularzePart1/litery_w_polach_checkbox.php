<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        fieldset {
            border: solid 2px blue;
        }

    </style>
</head>
<body>
    <fieldset>
    <legend>Alfabet</legend>
    <form method="post">
        <?php
            $letters_selected = !empty($_POST) && isset($_POST["letters"]);

            foreach (range('a', 'z') as $letter) {
                $checked = '';

                if ($letters_selected && in_array($letter, $_POST["letters"])) {
                    $checked = "checked";
                }

                ?>
                <input <?=$checked?> type="checkbox" id=<?="letter_$letter"?> name="letters[]" value=<?=$letter?>>
                <label for=<?="letter_$letter"?> style="margin-right: 15px;"><?=$letter?></label>

                <?php
            }?>

            <input type="submit" value="Wybierz">

            <p>

            <?php
            
            if ($letters_selected) {
                if (count($_POST["letters"]) == 1) {
                   echo "Ta litera zostala wybrana: ";
                } else {
                  echo "Te litery zostaly wybrane: ";
                }
                echo implode(", ", $_POST["letters"]);
            } else {
                echo "Zadna litera nie zostala wybrana!";
            }
            ?>

            </p>
    </form>
    </fieldset>
</body>
</html>