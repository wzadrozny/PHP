<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <?php


            foreach (range('a', 'z') as $letter) {
                $checked = '';
             
                if (!empty($_POST) && isset($_POST["letters"], $letter)) {
                    $checked = "checked";
                }
                
                ?>
                
                <input <?=$checked?> type="checkbox" id=<?="letter_$letter"?> name="letters[]" value=<?=$letter?>>
                <label for=<?="letter_$letter"?>><?=$letter?></label>

                <?php
            }?>

            <input type="submit">
    </form>

    <?php
        if (!empty($_POST)) {
            echo implode(", ", $_POST["letters"]);
        }
    
    ?>
</body>
</html>