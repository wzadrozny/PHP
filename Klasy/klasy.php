<?php
 class Kalkulator {
    public float $n1;
    public float $n2;


    function add() {
        return $this->n1 + $this->n2;
    }

    function subtract() 
        return $this->n1 - $this->n2;
    }

    function multiply() {
        return $this->n1 * $this->n2;
    }

    function divide() {
        if ($this->n2 == 0) {
            return null;
        }

        return $this->n1 / $this->n2;
    }

    function modulo() {
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