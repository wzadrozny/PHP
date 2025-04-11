<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
    <tr><th>Nr czytelnika</th><th>Imię i nazwisko</th></tr>
    <?php
        $con = @mysqli_connect("localhost","zadrozny","haslo123!","zadrozny");
        if($con) {
            $result = mysqli_query($con, "SELECT Nr_czytelnika, Imie, Nazwisko FROM czytelnicy;");

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr><td><?=$row["Nr_czytelnika"]?></td><td><?=$row["Nazwisko"]. ' ' . $row["Imie"]?></td></tr>
                    <?php
                }
            }
            
            

            mysqli_free_result($result);

            mysqli_close($con);
        } else {
            echo "Error: ", mysqli_connect_error();
        }
    ?>
    </table>
</body>
</html>