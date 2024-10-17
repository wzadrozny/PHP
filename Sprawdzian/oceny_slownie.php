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
            padding: 10px;
            border: 1px solid deeppink;
        }
    </style>
</head>
<body>
    <table>
    <?php
        $oceny = ["niedostateczna", "dopuszczająca", "dostateczna", "dobra", "bardzo dobra", "celująca"];

        foreach ($oceny as $ocena) {
            if ($ocena == "celująca") {
                echo "<tr><td style='background-color: hotpink;'>$ocena</td></tr>";
                continue;
            }
            
            echo "<tr><td>$ocena</td></tr>";
        }
    ?>
    </table>
</body>
</html>