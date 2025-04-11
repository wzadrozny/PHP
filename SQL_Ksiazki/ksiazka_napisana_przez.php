<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        try {
            $con = @mysqli_connect("localhost","zadrozny","haslo123!","zadrozny");
        } catch (Exception $e) {
            $con = null;
        }
        if($con) {
            $result = mysqli_query($con, "SELECT Tytul, Imie, Nazwisko FROM ksiazki;");

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <p>Książka <i>"<?=$row["Tytul"]?>"</i> została napisana przez <strong><?=$row["Imie"].' '.$row["Nazwisko"]?></strong>.</p>
                    <?php
                }
            }
            
            mysqli_free_result($result);

            mysqli_close($con);
        } else {
            echo "Error: ", mysqli_connect_error();
        }
    ?>
</body>
</html>
</body>
</html>