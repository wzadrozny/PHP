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
    <?php
        $obj = new Kalkulator();

        $obj->n1 = 5;
        $obj->n2 = 0;

        echo "<li>Suma liczb <strong>$obj->n1</strong> i <strong>$obj->n2</strong> jest równa <strong>".$obj->add()."</strong></li>";
        echo "<li>Różnica liczb <strong>$obj->n1</strong> i <strong>$obj->n2</strong> jest równa <strong>".$obj->subtract()."</strong></li>";
        echo "<li>Iloczyn liczb <strong>$obj->n1</strong> i <strong>$obj->n2</strong> jest równa <strong>".$obj->multiply()."</strong></li>";
        echo "<li>Iloraz liczb <strong>$obj->n1</strong> i <strong>$obj->n2</strong> jest równa <strong>".($obj->n2 != 0? $obj->divide() : "brak, bo nie mozna dzielic przez 0")."</strong></li>";
        echo "<li>Reszta z dzielenia liczb <strong>$obj->n1</strong> i <strong>$obj->n2</strong> jest równa <strong>".($obj->n2 != 0? $obj->modulo() : "brak, bo nie mozna dzielic przez 0")."</strong></li>";
        echo "<li>Liczba <strong>$obj->n1</strong> do potęgi <strong>$obj->n2</strong> jest równa <strong>".$obj->pow()."</strong></li>";
    ?>
    </ul>
</body>
</html>