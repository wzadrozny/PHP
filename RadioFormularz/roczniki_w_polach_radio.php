<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        fieldset {
            border: 2px solid;
        }
    </style>
</head>
<body>
    <form>
        <fieldset>
            <legend>Roczniki</legend>
            <?php
                $current = 2010;

                for ($i=0; $i <= 15; $i++) {
                    echo "<input type='radio' name='rok' id='rok_$i'></input>";
                    echo "<label for='rok_$i'>$current</label>";
                    echo "<br>";
                    $current += 1;
                }
            ?>
        </fieldset>
    </form>
</body>
</html>