<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        tr {
            background-color: lightgray;
        }
        table, td, tr {
            border: 2px solid black;
            border-collapse: collapse;
            border-color: gray;
        }
        td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <table>
    <?php
        $i = 1;
        while ($i <= 5) {
            echo "<tr>";
            echo "<td>To jest wiersz nr $i</td>";
            echo "</tr>";
            $i++;
        }
    ?>
    </table>
</body>
</html>