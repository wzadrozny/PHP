<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        <?php
            $con = @mysqli_connect("localhost","zadrozny","haslo123!","zadrozny");

            if($con == null) {
                exit(1);
            }

            $result = mysqli_query($con, "SELECT UPPER(CONCAT(Imie, ' ', Nazwisko)) AS Pracownik FROM pracownicy;");
            
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <li><?=$row["Pracownik"]?></li>
                    <?php
                }
            }


        ?>
    </ul>



</body>
</html>