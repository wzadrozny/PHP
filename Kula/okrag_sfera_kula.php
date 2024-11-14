<?php

class OkragSferaKula {
    private int $r;
    public function __construct(int $r) {
        $this->r = $r;
    }
    public function obwod(): string {
        return number_format(2 * pi() * $this->r, 2, ",", " "); 
    }
    public function pole(): string {
        return number_format(4 * pi() * $this->r * $this->r, 2, ",", " "); 
    }
    public function objetosc(): string {
        return number_format(4/3 * pi() * $this->r * $this->r * $this->r, 2, ",", " ");
    }

}

