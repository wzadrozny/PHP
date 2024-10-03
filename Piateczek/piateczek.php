<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .white {
            background-color: white;
        }
        .cyan {
            background-color: cyan;
        }
        th {
            padding: 20px;
        }
        table, th, td {
            border-collapse: collapse;
            border: 2px solid black;
        }
    </style>


</head>
<body>
    <table>
        <tr>
            <?php
                $week_days = ["pon", "wto", "śro", "czw", "pią", "sob", "nie"];
                $colors = ["white", "cyan"];

                for ($i = 0; $i < 7; $i++) {
                    $color = $colors[$i % 2];
                    $day = $week_days[$i];

                    echo "<th class='$color'>$day</th>";
                }
            ?>
        </tr>
    </table>
</body>
</html>