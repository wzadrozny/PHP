<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <?php
        $con = mysqli_connect("localhost","zadrozny","haslo123!","zadrozny");
            if(!mysqli_connect_error()) {
                $result = mysqli_query($con, "SELECT Imie, Nazwisko FROM czytelnicy;");
            
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr><td><?=$row["Imie"]?></td><td><?=$row["Nazwisko"]?></td></tr>
                <?php
            }

            mysqli_free_result($result);

            mysqli_close($con);
        }
    ?>
    </table>
</body>
</html>