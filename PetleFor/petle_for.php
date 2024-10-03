<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
           font-family: Verdana; 
           font-size: large;
           border-collapse: collapse;
           border: 1px solid black;
        }

        th, td {
            border: 1px dashed black;
            padding: 5px;
        }

        td {
            text-align: center;
        }

        th {
            background-color: burlywood;
        }
    
        .light {
            background-color: beige;
        }

        .dim {
            background-color: bisque;
        }
    </style>
</head>
<body>
    <table>
            <caption>Tabliczka mnożenia</caption>
            <?php
                echo "<tr>";
                echo "<th>×</th>";
                for ($i = 1; $i <= 10; $i++) {
                    echo "<th>$i</th>";
                }
                echo "</tr>";

                for ($line = 1; $line <= 10; $line++) {
                    echo "<tr>";
                    echo "<th>$line</th>";

                    for ($n = 1; $n <= 10; $n++) {
                        $content = $n * $line;
                        if ($n == $line) {
                            echo "<td class='dim'>$content</td>";
                            continue;
                        }
                        echo "<td class='light'>$content</td>";
                    }
                    echo "</tr>";
                }
            ?>
    </table>
</body>
</html>