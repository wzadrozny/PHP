<?php
include_once "stozek.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: lightpink;
            color: darkmagenta;
            font-size: 50px;
            padding-top: 100px;
            padding-bottom: 100px;
            padding-left: 0px;
            padding-right: 0px;
            text-align: center;
            font-family: Consolas;
        }

        div {
            border-top: solid;
            border-bottom: solid;
            border-right: none;
            border-left: none;
            border-width: 3px;
            border-color: magenta;
            display: inline-block;
        }
    </style>

</head>

<body>
    <?php
    $R = 123.46;
    $H = 78.09;
    $obj = new Stozek($R, $H);
    ?>

    <div>
        <p>Stożek</p>
        <p>Promień: R = <?= $R ?> m</p>
        <p>Wysokość: H = <?= $H ?> m</p>
        <p>Pole: P = <?= number_format($obj->poleCalkowite(), 2, ",", " ") ?> m<sup>2</sup></p>
        <p>Objętość: V = <?= number_format($obj->objetosc(), 2, ",", " ") ?> m<sup>3</sup></p>
    </div>
</body>

</html>