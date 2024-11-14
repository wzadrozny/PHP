<?php
    include_once "okrag_sfera_kula.php";
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: #219ebc;
            color: #023047;
            font-family: Garamond;
            font-size: 18px;
            font-weight: bold;
            padding: 20px;
        }

        table {
            background-color: #8ecae6;
            border-collapse: collapse;
            width: 100%;
            table-layout: fixed;
        }

        td {
            border: 4px solid #ffb703;
            padding: 10px;
            text-align: center;
        }

        .wzory td {
            font-style: italic;
        }

    </style>
</head>
<body>
    <?php
        $r = rand(0,99);
        $r = 99;
        $obj = new OkragSferaKula($r);
    ?>


    <table>
        <tr><td colspan="3">Promień kuli: r = <?=$r?></td></tr>

        <tr>
            <td>Obwód</td>
            <td>Pole powierzchni</td>
            <td>Objętość</td>
        </tr>

        <tr class="wzory">
            <td>L=2&pi;r</td>
            <td>P=4&pi;r<sup>2</sup></td>
            <td>V=&frac13;&middot;4&pi;r<sup>3</sup></td>
        </tr>
        
        <tr>
            <td><?=$obj->obwod()?></td>
            <td><?=$obj->pole()?></td>
            <td><?=$obj->objetosc()?></td>
        </tr>
    </table>
</body>
</html>