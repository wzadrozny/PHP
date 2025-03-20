<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        pre, table, span, td, th {
            border: 1px dashed red;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
        $kraje = [
            "Japonia" => "4,2 bln $",
            "Indonezja" => "1,3 bln $",
            "Indie" => "3,5 bln $"    
        ];
    ?>

    <pre><?php print_r($kraje);?></pre>

    <table> 
        <th>Kraj</th>
        <th>PKB</th>
        <?php  
            foreach($kraje as $kraj => $pieniadze) {
                ?>
                    <tr>
                        <td><?=$kraj?></td>
                        <td><?=$pieniadze?></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <br>
    <span><?=json_encode($kraje)?></span>
</body>
</html>