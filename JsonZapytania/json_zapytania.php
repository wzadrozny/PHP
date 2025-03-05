<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Sprawdź przybliżoną lokalizację adresu IP v4</legend>

        <form method="post"> 
            <label for="ip">Adres ip:</label>
            <input type="text" name="ip" id="ip" pattern="^((25[0-5]|(2[0-4]|1\d|[1-9]|)\d)\.?\b){4}$"> 
            <input type="submit" value="Sprawdź">
        </form>
    </fieldset>

    <?php
        if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["ip"])) {
            $url = "http://ip-api.com/json/".$_POST["ip"];
            $result = file_get_contents($url);

            ?>
                <fieldset> 
                    <legend>Zwrócone dane (JSON)</legend>
                    <div><?=$result?></div>
                </fieldset>

                <fieldset> 
                    <legend>Zwrócone dane (array)</legend>
                    <pre><?php print_r(json_decode($result, true));?></pre>
                </fieldset>
            <?php
        }
    ?>
</body>
</html>
