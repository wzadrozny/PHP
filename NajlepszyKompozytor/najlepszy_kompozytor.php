<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        fieldset, legend {
            border: solid blue 3px;
        }
        legend {
            padding: 7px;
            border-right: none;
            border-left: none;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Najlepszy kompozytor</legend>

        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                ?>
                <p>Według ciebie najlepszym kompozytorem jest: <?=$_POST["kompozytor"]?> </p>
                <?php
            } else {
                ?>

                <form method="post">
                    <input type="radio" id="k1" name = "kompozytor" value = "Alexander Borodin" required>
                    <label for="k1">Alexander Borodin</label><br>

                    <input type="radio" id="k2" name = "kompozytor" value = "Fryderyk Chopin" required>
                    <label for="k2">Fryderyk Chopin</label><br>

                    <input type="radio" id="k3" name = "kompozytor" value = "Edvard Grieg" required>
                    <label for="k3">Edvard Grieg</label><br>

                    <input type="radio" id="k4" name = "kompozytor" value = "Stanisław Moniuszko" required>
                    <label for="k4">Stanisław Moniuszko</label><br>

                    <input type="radio" id="k5" name = "kompozytor" value = "Giuseppe Verdi" required>
                    <label for="k5">Giuseppe Verdi</label><br>

                    <input type="radio" id="k6" name = "kompozytor" value = "Richard Wagner" required>
                    <label for="k6">Richard Wagner</label><br>
                    <br>
                    <input type="submit" value="Wybierz ulubionego kompozytora">
                </form>

                <?php
            }
        ?>
    </fieldset>
</body>
</html>