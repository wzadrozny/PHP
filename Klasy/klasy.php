<?php
 class Kalkulator {
    public $n1;
    public $n2;

    function are_valid_inputs() {
        if (is_numeric($this->n1) && is_numeric($this->n2)) {
            return true;
        }
        return false;
    }

    function add() {
        if (!$this->are_valid_inputs()) {
            return null;
        }
        return $this->n1 + $this->n2;
    }

    function subtract() {
        if (!$this->are_valid_inputs()) {
            return null;
        }
        return $this->n1 - $this->n2;
    }

    function multiply() {
        if (!$this->are_valid_inputs()) {
            return null;
        }
        return $this->n1 * $this->n2;
    }

    function divide() {
        if (!$this->are_valid_inputs()) {
            return null;
        }
        if ($this->n2 == 0) {
            return null;
        }

        return $this->n1 / $this->n2;
    }

    function modulo() {
        if (!$this->are_valid_inputs()) {
            return null;
        }
        if ($this->n2 == 0) {
            return null;
        }

        return $this->n1 % $this->n2;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $obj = new Kalkulator();

        $obj->n1 = 25;
        $obj->n2 = 12;

        $wynik = $obj->modulo();

        if ($wynik == null) {
            echo "Wprowadzono nieprawidlowe liczby!";
            return 0;
        }   

        echo "Reszta z dzielenia liczb ".$obj->n1." i ".$obj->n2." jest równa ".$obj->modulo();
    ?>
</body>
</html>