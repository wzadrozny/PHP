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

        td {
            padding: 15px;
            border: 3px dotted red;
        }
    </style>
</head>
<body>
    <table>
    <tr>

    <?php
        $str = "Kon'nichiwa sekai";

        foreach(str_split($str) as $letter) {
            echo "<td>$letter</td>";
        }
    ?>

    </tr>
    </table>
</body>
</html>