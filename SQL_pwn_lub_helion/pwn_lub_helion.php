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

        th, td {
            border: solid 1px black;
        }
    </style>

</head>
<body>
    <table>
        <tr>
            <th>Sygnatura</th>
            <th>Tytuł</th>
            <th>Autor</th>
            <th>Wydawnictwo</th>
            <th>Rok Wydania</th>
            <th>Cena</th>
        <tr>


        <?php
            $con = @mysqli_connect("localhost","zadrozny","haslo123!","zadrozny");
            $query = "SELECT Sygnatura, Tytul, CONCAT(Imie, ' ', Nazwisko) as Autor, Wydawnictwo, Rok_wyd, Cena FROM ksiazki WHERE Rok_wyd > '1990-12-31' and Rok_wyd < '2011-01-01' and Wydawnictwo = 'PWN' or Wydawnictwo = 'Helion' ORDER BY Rok_wyd ASC;";

            if ($con) {
                $result = mysqli_query($con, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $cost = explode(".", $row["Cena"]);

                        ?>
                            <tr>
                                <td><?=$row["Sygnatura"]?></td>
                                <td><?=$row["Tytul"]?></td>
                                <td><?=$row["Autor"]?></td>
                                <td><?=$row["Wydawnictwo"]?></td>
                                <td><?=$row["Rok_wyd"]?></td>
                                <td><?=$cost[0], " zł ", $cost[1], " gr "?></td>
                            </tr>
                        <?php
                    }
                }

            }

        ?>
    </table>
</body>
</html>