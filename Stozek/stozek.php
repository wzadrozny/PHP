<?php
include_once "przeciwprostokatna.php";

class Stozek extends PrzeciwProstokatna
{

    private float $R;
    private float $H;

    function __construct(float $R, float $H)
    {
        $this->R = $R;
        $this->H = $H;
    }

    private function polePodstawy(): float
    {
        return pi() * $this->R * $this->R;
    }

    private function poleBoczne(): float
    {
        return pi() * $this->R * $this->ppk($this->R, $this->H);
    }

    public function poleCalkowite(): float
    {
        return $this->polePodstawy() + $this->poleBoczne();
    }

    public function objetosc(): float
    {
        return (1 / 3) * pi() * $this->R * $this->R * $this->H;
    }
}


