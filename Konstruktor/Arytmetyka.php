<?php

class Arytmetyka {
    public ?float $n1 = null;
    public ?float $n2 = null;

    public function __construct(float $n1, float $n2) {
        $this->n1 = $n1;
        $this->n2 = $n2;
    }

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

        return fmod($this->n1, $this->n2);
    }

    public function pow() {
        return $this->n1 ** $this->n2;
    }
}
