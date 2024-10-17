<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            background-color: aliceblue;
            border-collapse: collapse;
        }

        td {
            border: 1px solid dodgerblue;
            padding: 10px;
            color: blue;
            text-align: center;
        }


    </style>
</head>
<body>
    <table>
    <tr>
    <?php
        $nums = range(0, 10);
        shuffle($nums);

        foreach($nums as $num) {
            echo "<td>$num</td>";
        }
    ?>
    </tr>
    </table>
</body>
</html>