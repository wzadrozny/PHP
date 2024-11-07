<?php
    include_once("Arytmetyka.php");
    $obj = new Arytmetyka(0.005, 0.002);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        ul {
            list-style-type: circle;
            background-color: cyan;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <ul>
        <li>Suma liczb <strong><?=$obj->n1;?></strong> i <strong><?=$obj->n2;?></strong> wynosi <strong><?=$obj->add();?></strong></li>
        <li>Roznica liczb <strong><?=$obj->n1;?></strong> i <strong><?=$obj->n2;?></strong> wynosi <strong><?=$obj->subtract();?></strong></li>
        <li>Iloczyn liczb <strong><?=$obj->n1;?></strong> i <strong><?=$obj->n2;?></strong> wynosi <strong><?=$obj->multiply();?></strong></li>
        <li>Iloraz liczb <strong><?=$obj->n1;?></strong> i <strong><?=$obj->n2;?></strong> wynosi <strong><?=
            $obj->divide()?? "brak, nie można dzielić przez 0!";
        ?></strong></li>
        <li>Reszta z dzielenia liczb <strong><?=$obj->n1;?></strong> i <strong><?=$obj->n2;?></strong> wynosi <strong><?=
            $obj->modulo()?? "brak, nie można dzielić przez 0!";
        ?></strong></li>
        <li><strong><?=$obj->n1;?></strong> do potęgi <strong><?=$obj->n2;?></strong> wynosi <strong><?=$obj->pow();?></strong></li>
    </ul>
</body>
</html>