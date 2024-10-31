<?php
 class Kalkulator {
    public ?float $n1 = null;
    public ?float $n2 = null;


    public function add() {
        return $this->n1 + $this->n2;
    }

    public function subtract() {
        return $this->n1 - $this->n2;
    }

    public function multiply() {
        return $this->n1 * $this->n2;
    }

    public function divide() {
        if ($this->n2 == 0) {
            return null;
        }

        return $this->n1 / $this->n2;
    }

    public function modulo() {
        if ($this->n2 == 0) {
            return null;
        }

        return $this->n1 % $this->n2;
    }

    public function pow() {
        return $this->n1 ** $this->n2;
    }
}


$obj = new Kalkulator();
$obj->n1 = 5;
$obj->n2 = 4;

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
        }
    </style>
</head>
<body>



    <ul>
    <li>Suma liczb <strong><?php echo $obj->n1?></strong> i <strong><?php echo $obj->n2;?></strong> jest równa <strong><?php echo $obj->add();?></strong></li>
    <li>Różnica liczb <strong><?php echo $obj->n1;?></strong> i <strong><?php echo $obj->n2;?></strong> jest równa <strong><?php echo $obj->subtract();?></strong></li>
    <li>Iloczyn liczb <strong><?php echo $obj->n1;?></strong> i <strong><?php echo $obj->n2;?></strong> jest równa <strong><?php echo $obj->multiply();?></strong></li>
    <li>Iloraz liczb <strong><?php echo $obj->n1;?></strong> i <strong><?php echo $obj->n2;?></strong> jest równa <strong><?php echo($obj->n2 != 0? $obj->divide() : "brak, bo nie mozna dzielic przez 0");?></strong></li>
    <li>Reszta z dzielenia liczb <strong><?php echo $obj->n1;?></strong> i <strong><?php echo $obj->n2;?></strong> jest równa <strong><?php echo($obj->n2 != 0? $obj->modulo() : "brak, bo nie mozna dzielic przez 0");?></strong></li>
    <li>Liczba <strong><?php echo $obj->n1;?></strong> do potęgi <strong><?php echo $obj->n2;?></strong> jest równa <strong><?php echo $obj->pow();?></strong></li>
    </ul>
</body>
</html>